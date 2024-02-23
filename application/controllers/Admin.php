<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['makanan'] = $this->rental_model->get_data('makanan')->result();

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar', $data);
        $this->load->view('Admin/Dashboard', $data);
        $this->load->view('templates_user/footer');
    }
}
