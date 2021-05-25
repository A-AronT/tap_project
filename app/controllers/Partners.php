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
        $data = array(
            'partner' => $partner
        );
        $this->view('partners/show', $data);
    }
}