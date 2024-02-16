<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
        // $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        
        $data = array(
            'title' => "Dashboard | Bank Data Centre (BDC)"
        );
        $data['users'] = $this->Auth_model->cekData(['username' => $this->session->userdata('username')])->row_array();
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard');
        $this->load->view('templates/footer');

    }

}
