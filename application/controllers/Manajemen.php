<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemen extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();


        // $this->load->library('form_validation');
        $this->load->model('manajemen_model');
    }

    public function index()
    {
        $data = array(
            'title' => "Manajemen User | Bank Data Centre (BDC)"
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manajemen/user');
        $this->load->view('templates/footer');
    }
    public function get_users()
    {
        $this->manajemen_model->get_data_users();
    }
}
