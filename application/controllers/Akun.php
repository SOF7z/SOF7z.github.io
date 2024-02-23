<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->rental_model->get_data('user')->result();
        // $data['user'] = $this->db->get('user')->result_array();

        // $this->db->where('id !=', 0);

        // $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('is_active', 'Is_active');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_user/header', $data);
            $this->load->view('templates_user/sidebar', $data);
            $this->load->view('Akun/Member', $data);
            $this->load->view('templates_user/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => $this->input->post('is_active'),
                'role_id' => '2',
                'date_created' => time()

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
        Menu berhasil dibuat!
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('akun');
        }
    }

    public function user_update()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->rental_model->get_data('user')->result();
        // $data['makanan'] = $this->rental_model->get_data('makanan')->result();

        $this->load->view('templates_submenu/header', $data);
        $this->load->view('Akun/Update', $data);
        $this->load->view('templates_submenu/footer');
    }


    public function delete_user($id)
    {
        $where = array('id' => $id);
        $this->rental_model->delete_data($where, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-light border-0 alert-dismissible fade show" role="alert">
        Account Berhasil Dihapus!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('akun');
    }
}
