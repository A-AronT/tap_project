<?php


class Users extends Controller
{

    /**
     * Users constructor.
     */
    public function __construct()
    {
        $this->usersModel = $this->model('User');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            );
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter the name';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter the email';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['email_err'] = 'Please enter the valid email';
            } else if ($this->usersModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'email is already taken';
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter the password';
            } else if (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password should be at least 6 characters';
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please enter the confirm password';
            } else if (strlen($data['confirm_password']) < 6) {
                $data['confirm_password_err'] = 'Password should be at least 6 characters';
            } else if ($data['password'] !== $data['confirm_password']) {
                $data['confirm_password_err'] = 'Password does not match the actual password you fucking retard';
            }
            print_r($data);
        } else {
            $data = array(
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            );
        }
        $this->view('users/register', $data);
    }

    public function login()
    {
        $this->view('users/login');
    }
}