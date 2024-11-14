<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk memvalidasi login
    public function validate_login($username, $password) {
        // Menggunakan MD5 atau hash lain untuk memeriksa password
        $this->db->where('username', $username);
        $this->db->where('password', md5($password)); // Gunakan md5 jika password disimpan dalam format md5
        $query = $this->db->get('users'); // Misalnya tabel 'users' untuk login

        if ($query->num_rows() == 1) {
            return $query->row(); // Mengembalikan data user jika ditemukan
        } else {
            return false; // Tidak ada user yang cocok
        }
    }
}
