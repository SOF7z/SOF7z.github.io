<?php

class Akun extends CI_Controller
{

      public function index()
      {
            $data['akun'] = $this->rental_model->get_data('akun')->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/akun', $data);
            $this->load->view('templates_admin/footer');
      }
}
