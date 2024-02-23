<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->rental_model->get_data('user')->result();
        // $data['user'] = $this->db->get('user')->result_array();


        $this->form_validation->set_rules('name', 'Name', 'required');

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar', $data);
        $this->load->view('Email/Aktifasi', $data);
        $this->load->view('templates_user/footer');
    }
}
