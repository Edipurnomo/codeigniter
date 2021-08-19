<?php

class Pengeluarandtl extends CI_Controller {

	public function index()
	{

		$data['vpengeluarandtl'] = $this->m_pengeluarandtl->tampil_data()->result();

		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vpengeluarandtl', $data);
		$this->load->view('template/footer');

	}

	function tambah(){

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vpengeluarandtl');
		$this->load->view('template/footer');

	}

	public function tambah_aksi(){

		$nomor_pengeluaran 	= $this->input->post('nomor_pengeluaran');
		$material_code	    = $this->input->post('material_code');
		$material_name  	= $this->input->post('material_name');
		$jumlah 		    = $this->input->post('jumlah');
		$unit 				= $this->input->post('unit');




		$data = array(
			'nomor_pengeluaran'   => $nomor_pengeluaran,
			'material_code'      => $material_code,
			'material_name' 	 => $material_name,
			'jumlah' 			 => $jumlah,
			'unit' 				 => $unit,

		);
		
		$this->m_pengeluarandtl->input_data($data, 'pengeluaran_whsdetail');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di input!
</div>');
		redirect('pengeluarandtl/index');
	}


public function hapus($id){

	$where = array ('id' => $id);
	$this->m_pengeluarandtl->hapus_data($where,'pengeluaran_whsdetail');
	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di Hapus!
</div>');
	redirect('pengeluarandtl/index'); 
 }

 public function edit($id)
    {
        $data['pengeluarandtl'] = $this->m_pengeluarandtl->GetPengeluarandtlById($id); //get nomor di model m_warehousedtl
        /**harus berurutan sesuai urutan di table mysql / database*/
        $this->form_validation->set_rules('nomor_pengeluaran', 'Nomor_pengeluaran', 'required');
		$this->form_validation->set_rules('material_code', 'Material_code', 'required');
        $this->form_validation->set_rules('material_name', 'Material_name', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        if ($this->form_validation->run() == false) {
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('editpengeluarandtl', $data);
		$this->load->view('template/footer');
        } else {
            $this->m_pengeluarandtl->UbahDataPengeluarandtl();
            $this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di Update!
</div>');
            redirect('pengeluarandtl/index');
        }
    }


  public function detail($id)
    {
        $this->load->model('m_pengeluarandtl');
        $detail = $this->m_pengeluarandtl->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
	//**Menampilkan halaman detail di folder Views*/
        $this->load->view('detailpengeluarandtl', $data); 
		$this->load->view('template/footer');
    }

    public function cetak(){
    	$data['pengeluarandtl'] = $this->m_pengeluarandtl->tampil_data("pengeluaran_whsdetail")->result();
    	$this->load->view('cetak_detail', $data);
    }

}