<?php

class Home extends CI_Controller {

	public function index()
	{

		$data['vhome'] = $this->m_home->tampil_data()->result();

		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vhome', $data);
		$this->load->view('template/footer');

	}
	function tambah(){

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vhome');
		$this->load->view('template/footer');

	}

	public function tambah_aksi(){

		$catatan 	= $this->input->post('catatan');
		$ditulis_oleh = $this->input->post('ditulis_oleh');

		$data = array(
			'catatan'   => $catatan,
			'ditulis_oleh' => $ditulis_oleh,

		);
		
		$this->m_home->input_data($data, 'catatan');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di input!
</div>');
		redirect('home/index');
	}
	
}