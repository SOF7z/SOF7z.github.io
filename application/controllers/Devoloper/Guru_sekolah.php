<?php 
		
      class Guru_sekolah extends CI_Controller{

		public function index()
		{
                  $data ['guru'] = $this->rental_model->get_data('guru')->result();

                  $this->load->view('templates_admin/header');
                  $this->load->view('templates_admin/sidebar');
                  $this->load->view('admin/Guru_sekolah',$data);
                  $this->load->view('templates_admin/footer');
            
		}
	}	
?> 