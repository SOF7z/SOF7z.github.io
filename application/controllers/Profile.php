<?php

class Profile extends CI_Controller
{

	public function index()
	{
		$this->load->view('temp_profile/header');
		$this->load->view('profile');
		$this->load->view('temp_profile/footer');

		
	}

	// public function tambah_pesan_aksi()
	// {
	// 	$this->_rules();

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->profile();
	// 	} else {
	// 		$nama	    	= $this->input->post('nama');
	// 		$email	    	= $this->input->post('email');
	// 		$subjek	   		= $this->input->post('subjek');
	// 		$pesan	    	= $this->input->post('pesan');


	// 		$data = array(
	// 			'nama'	    	=> $nama,
	// 			'email'	   		=> $email,
	// 			'subjek'	    => $subjek,
	// 			'pesan'	    	=> $pesan,


	// 		);

	// 		$this->profile_model->insert_data($data, 'pesan');
	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
	// 			Data Makanan Berhasil Ditambahkan!.
	// 			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 		  	</div>');
	// 		redirect('dashboard/profile');
	// 	}
	// }
}
