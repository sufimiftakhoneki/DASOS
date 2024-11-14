<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model'); // Memuat model Login
    }

    // Fungsi untuk menampilkan form login
    public function index() {
        $this->load->view('login_view');
    }

    // Fungsi untuk autentikasi user (login)
    public function authenticate() {
        // Ambil input username dan password dari POST
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi login dengan model
        $user = $this->Login_model->validate_login($username, $password);

        // Periksa apakah login berhasil
        if ($user) {
            // Jika login berhasil, kirimkan respon sukses
            echo json_encode(['status' => 'success', 'message' => 'Login Berhasil!']);
        } else {
            // Jika login gagal, kirimkan respon gagal
            echo json_encode(['status' => 'error', 'message' => 'Username atau Password salah!']);
        }
    }
}
