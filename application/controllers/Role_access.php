<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['user_role'] = $this->rental_model->get_data('user_role')->result();
        // $data['role_access'] = $this->db->get('user_access_menu')->result_array();

        $data['subMenu'] = $this->menu->getSubMenu();

        $this->form_validation->set_rules('role_id', 'Role_id', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu_id', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_submenu/header', $data);
            $this->load->view('templates_submenu/sidebar', $data);
            $this->load->view('Role_access/Index', $data);
            $this->load->view('templates_submenu/footer');
        } else {
            $this->db->insert('role_access', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
        Menu berhasil dibuat!
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('Role_access');
        }
    }
}
