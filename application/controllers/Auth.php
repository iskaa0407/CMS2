<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password'); // Hilangkan hashing untuk sementara

        // Cek username di database
        $this->db->from('user');
        $this->db->where('username', $username);
        $user = $this->db->get()->row();

        // Jika username tidak ditemukan
        if ($user == NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible mb-2" role="alert">
            Username Tidak Ada!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        } 
        // Jika password cocok
        else if ($password == $user->password) {
            $data = array(
                'id_user' => $user->id_user,
                'nama' => $user->nama,
                'username' => $user->username,
                'level' => $user->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/home'); // Redirect ke halaman admin
        } 
        // Jika password salah
        else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible mb-2" role="alert">
            Password Salah
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
