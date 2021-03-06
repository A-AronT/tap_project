<?php


class Controller
{
    //load model
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    //load view
    public function view($view, $data = array())
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('Views ' . $view . ' does not exist');
        }
    }

    public function add()
    {
        $this->view('activities/add', $data);
    }
}