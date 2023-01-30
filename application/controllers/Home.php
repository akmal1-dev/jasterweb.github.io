<?php 

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Contact_model');
        $this->load->model('Service_model');
        $this->load->model('Pricing_model');
        $this->load->model('About_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['contact'] = $this->Contact_model->getAllContact();
        $data['service'] = $this->Service_model->getAllService();
        $data['pricing'] = $this->Pricing_model->getAllPricing();
        $data['about'] = $this->About_model->getAllAbout();
        $this->load->view('home/index', $data);
    }
}