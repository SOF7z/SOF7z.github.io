<?php

class Akun extends CI_Controller
{

      public function index()
      {
            $data['user'] = $this->rental_model->get_data('user')->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/akun', $data);
            $this->load->view('templates_admin/footer');
      }
}
