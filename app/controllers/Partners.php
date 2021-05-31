<?php


class Partners extends Controller
{

    /**
     * Partners constructor.
     */
    public function __construct()
    {
        $this->partnerModel = $this->model('Partner');
    }

    public function index()
    {
        //echo 'index method is loaded<br>';
        $partners = $this->partnerModel->getPartners();
        $data = array(
            'title' => 'Koostööpartnerid',
            'partners' => $partners
        );
        $this->view('partners/index', $data);
    }

    public function show($id)
    {
        $partner = $this->partnerModel->getPartner($id);
        $partner_activity = $this->partnerModel->getPartnerActivity($id);
        $data = array(
            'partner' => $partner,
            'activity' => $partner_activity
        );
        $this->view('partners/show', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['name']),
                'reg_nr' => trim($_POST['reg_nr']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'activity' => trim($_POST['activity']),
                'location' => trim($_POST['location']),
                'field_err' => ''
            );
            if (empty($data['name'])) {
                $data['field_err'] = 'Palun täida väli';
            }
            if (empty($data['field_err'])) {
                if ($this->partnerModel->addPartner($data)) {
                    header('Location: ' . URLROOT . '/partners/index');
                }
            } else {
                $this->view('partners/add', $data);
            }
        } else {
            $data = array();
            $this->view('partners/add', $data);
        }
    }
}