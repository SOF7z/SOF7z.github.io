<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Home page!';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['makanan'] = $this->rental_model->get_data('makanan')->result();
        $data['sub_menu'] = $this->rental_model->get_data('user_sub_menu')->result();
        $this->load->model('rental_model', 'menu');

        // $data['subMenu'] = $this->menu->getSubMenu();

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar', $data);
        $this->load->view('Home/home', $data);
        $this->load->view('templates_submenu/footer');
    }
}
