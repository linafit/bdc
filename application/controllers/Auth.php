<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __Construct()
    {
        parent::__Construct();
        // $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('users')) {
            redirect('Dashboard');
        } else {
            $data = array(
                'title' => "Login | Bank Data Centre (BDC)"
            );
            $this->load->view('templates/header', $data);
            $this->load->view('auth');
            $this->load->view('templates/footer');
        }
    }

    public function login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = $this->input->post('password', true);
        $users = $this->Auth_model->cekData(['username' => $username])->row_array();

        if ($users){
            if ($users['status'] == 'A') {
                if (password_verify($password, $users['password'])) {
                    $data = [
                    'username' => $users['username'],
                    'nama' => $users['nama']
                ];
                // DAPATKAN HAK AKSES LEVEL DI TABEL USERS
                if ($this->session->userdata('users')){
               // Pengguna telah terautentikasi
                } else {
                    redirect('Dashboard');
                }
                }else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                redirect('Dashboard');
                }
            }else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Akun belum diaktifasi!!</div>');
            redirect('Dashboard');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->unset_userdata('users');
        redirect(base_url('Auth'));
    }
}
