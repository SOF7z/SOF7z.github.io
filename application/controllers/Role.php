<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Role Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_role'] = $this->rental_model->get_data('user_role')->result();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_user/header', $data);
            $this->load->view('templates_user/sidebar', $data);
            $this->load->view('Role/Index', $data);
            $this->load->view('templates_user/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
        Role Baru berhasil dibuat!
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('Role');
        }
    }

    public function role_access()
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_role'] = $this->rental_model->get_data('user_access_menu')->result();
        $data['role_access'] = $this->db->get('user_access_menu')->result_array();
        // $data['subMenu'] = $this->menu->getSubMenu();

        $this->db->where('id !=', 1);

        $this->form_validation->set_rules('role_id', 'Role_id', 'required');
        $this->form_validation->set_rules('role_menu', 'Role_menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_user/header', $data);
            $this->load->view('Role_access/Index', $data);
            $this->load->view('templates_submenu/footer');
        } else {
            $data = [
                'role_id' => $this->input->post('role_id'),
                'role_menu' => $this->input->post('role_menu')
            ];
            $this->db->insert('user_access_menu', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
            Menu berhasil dibuat!
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('role/role_access');
        }
    }

    public function delete_role($id)
    {
        $where = array('id' => $id);
        $this->rental_model->delete_data($where, 'user_role');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Data Berhasil Dihapus!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>');
        redirect('role');
    }

    public function delete_role_access($id)
    {
        $where = array('id' => $id);
        $this->rental_model->delete_data($where, 'user_access_menu');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Data Berhasil Dihapus!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>');
        redirect('role/role_access');
    }
}
