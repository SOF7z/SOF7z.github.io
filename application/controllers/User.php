<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('negara', 'Negara', 'required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('job', 'Job', 'required');
        $this->form_validation->set_rules('instagram', 'Instagram', 'required');
        $this->form_validation->set_rules('tiktok', 'Tiktok', 'required');
        $this->form_validation->set_rules('facebook', 'Facebook', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_user/header', $data);
            $this->load->view('templates_user/sidebar', $data);
            $this->load->view('User/Dashboard', $data);
            $this->load->view('templates_user/footer');
        } else {
            $data = [
                'name'      => $this->input->post('name'),
                'about'     => $this->input->post('about'),
                'alamat'    => $this->input->post('alamat'),
                'negara'    => $this->input->post('negara'),
                'no_hp'     => $this->input->post('no_hp'),
                'agama'     => $this->input->post('agama'),
                'job'       => $this->input->post('job'),
                'instagram' => $this->input->post('instagram'),
                'tiktok'    => $this->input->post('tiktok'),
                'facebook'  => $this->input->post('facebook'),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
            Menu berhasil dibuat!
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('user');
        }
    }

    // public function home()
    // {
    //     $data['title'] = 'Submenu Management';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     // $data['makanan'] = $this->rental_model->get_data('makanan')->result();
    //     $data['sub_menu'] = $this->rental_model->get_data('user_sub_menu')->result();
    //     $this->load->model('rental_model', 'menu');

    //     // $data['subMenu'] = $this->menu->getSubMenu();

    //     $this->load->view('templates_user/header', $data);
    //     $this->load->view('templates_user/sidebar', $data);
    //     $this->load->view('User/Home', $data);
    //     $this->load->view('templates_user/footer');
    // }


    // public function update_user()
    // {
    //     $this->_rules();

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->user();
    //     } else {
    //         $id                = $this->input->post('id');
    //         $name        = $this->input->post('name');
    //         $about    = $this->input->post('about');
    //         $alamat            = $this->input->post('alamat');
    //         $negara            = $this->input->post('negara');
    //         $no_hp            = $this->input->post('no_hp');
    //         $agama            = $this->input->post('agama');
    //         $job            = $this->input->post('job');
    //         $instagram            = $this->input->post('instagram');
    //         $tiktok            = $this->input->post('tiktok');
    //         $facebook            = $this->input->post('facebook');
    //     }
    //     $data = array(

    //         'id'      => $this->input->post('id'),
    //         'name'      => $this->input->post('name'),
    //         'about'     => $this->input->post('about'),
    //         'alamat'    => $this->input->post('alamat'),
    //         'negara'    => $this->input->post('negara'),
    //         'no_hp'     => $this->input->post('no_hp'),
    //         'agama'     => $this->input->post('agama'),
    //         'job'       => $this->input->post('job'),
    //         'instagram' => $this->input->post('instagram'),
    //         'tiktok'    => $this->input->post('tiktok'),
    //         'facebook'  => $this->input->post('facebook'),

    //     );

    //     $where = array(
    //         'id' => $id
    //     );

    //     $this->rental_model->update_data('user', $data, $where);
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    // 			Data Makanan Berhasil Diupdate!.
    // 			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    // 		  	</div>');
    //     redirect('user');
    // }

    // public function _rules()
    // {
    // }
}
