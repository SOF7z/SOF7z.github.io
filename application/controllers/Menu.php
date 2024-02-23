<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_menu'] = $this->rental_model->get_data('user_menu')->result();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        // $data['subMenu'] = $this->menu->getSubMenu();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_user/header', $data);
            $this->load->view('templates_user/sidebar', $data);
            $this->load->view('Menu/Index', $data);
            $this->load->view('templates_user/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
        Menu berhasil dibuat!
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('menu');
        }
    }

    // public function tambah_menu()
    // {

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->form_validation->set_rules('menu', 'Menu', 'require');
    //     } else {
    //         $menu            = $this->input->post('menu');

    //         $data = array(
    //             'menu'       => $menu

    //         );

    //         $this->rental_model->insert_data($data, 'user_menu');
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
    //         Menu berhasil dibuat!
    //         <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    //         </div>');
    //         redirect('menu');
    //     }
    // }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['makanan'] = $this->rental_model->get_data('makanan')->result();
        $data['sub_menu'] = $this->rental_model->get_data('user_sub_menu')->result();
        $this->load->model('rental_model', 'user_sub_menu');

        $this->form_validation->set_rules('menu_id', 'Menu_id', 'required');
        $this->form_validation->set_rules('title', 'Title');
        $this->form_validation->set_rules('url', 'Url');
        $this->form_validation->set_rules('icon', 'Icon');
        $this->form_validation->set_rules('is_active');

        // $data['subMenu'] = $this->menu->getSubMenu();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_submenu/header', $data);
            // $this->load->view('templates_user/sidebar', $data);
            $this->load->view('Menu/Submenu', $data);
            $this->load->view('templates_submenu/footer');
        } else {
            $data = [
                'menu_id' => $this->input->post('menu_id'),
                'title' => $this->input->post('title'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
        Menu Sidebar berhasil dibuat!
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('menu/submenu');
        }
    }

    public function update_Submenu($id)
    {
        $data['title'] = 'Update Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['makanan'] = $this->rental_model->get_data('makanan')->result();
        $data['sub_menu'] = $this->rental_model->get_data('user_sub_menu')->result();

        $this->load->view('templates_submenu/header', $data);
        // $this->load->view('templates_user/sidebar', $data);
        $this->load->view('Menu/Update_Submenu', $data);
        $this->load->view('templates_submenu/footer');
    }


    public function delete_menu($id)
    {
        $where = array('id' => $id);
        $this->rental_model->delete_data($where, 'user_menu');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Data Berhasil Dihapus!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>');
        redirect('menu');
    }

    public function delete_submenu($id)
    {
        $where = array('id' => $id);
        $this->rental_model->delete_data($where, 'user_sub_menu');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Data Berhasil Dihapus!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>');
        redirect('menu/submenu');
    }
}
