<?php

class Warehousedtl extends CI_Controller {

	public function index()
	{

		$data['vwarehousedtl'] = $this->m_warehousedtl->tampil_data()->result();

		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vwarehousedtl', $data);
		$this->load->view('template/footer');

	}

	function tambah(){

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vwarehousedtl');
		$this->load->view('template/footer');

	}

	public function tambah_aksi(){

		$nomor_penerimaan 	= $this->input->post('nomor_penerimaan');
		$material_code	    = $this->input->post('material_code');
		$material_name  	= $this->input->post('material_name');
		$jumlah 		    = $this->input->post('jumlah');
		$unit 				= $this->input->post('unit');




		$data = array(
			'nomor_penerimaan'   => $nomor_penerimaan,
			'material_code'      => $material_code,
			'material_name' 	 => $material_name,
			'jumlah' 			 => $jumlah,
			'unit' 				 => $unit,

		);
		
		$this->m_warehousedtl->input_data($data, 'penerimaandtl');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di input!
</div>');
		redirect('warehousedtl/index');
	}
//cek lagi hapus masih eror
public function hapus($id){

	$where = array ('id' => $id);
	$this->m_warehousedtl->hapus_data($where,'penerimaandtl');
	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di Hapus!
</div>');
	redirect('warehousedtl/index'); 
 }

 public function edit($id)
    {
        $data['warehousedtl'] = $this->m_warehousedtl->GetWarehousedtlById($id); //get nomor di model m_warehousedtl
        /**harus berurutan sesuai urutan di table mysql / database*/
        $this->form_validation->set_rules('nomor_penerimaan', 'Nomor_penerimaan', 'required');
		$this->form_validation->set_rules('material_code', 'Material_code', 'required');
        $this->form_validation->set_rules('material_name', 'Material_name', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        if ($this->form_validation->run() == false) {
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('editdtl', $data);
		$this->load->view('template/footer');
        } else {
            $this->m_warehousedtl->UbahDataWarehousedtl();
            $this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di Update!
</div>');
            redirect('warehousedtl/index');
        }
    }
  public function detail($id)
    {
        $this->load->model('m_warehousedtl');
        $detail = $this->m_warehousedtl->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
	//**Menampilkan halaman detail di folder Views*/
        $this->load->view('detailwhs', $data); 
		$this->load->view('template/footer');
    }

    public function cetak(){
    	$data['Warehousedtl'] = $this->m_warehousedtl->tampil_data("penerimaandtl")->result();
    	$this->load->view('cetak_detail', $data);
    }

}