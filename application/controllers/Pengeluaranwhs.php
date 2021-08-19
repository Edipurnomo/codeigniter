<?php

class Pengeluaranwhs extends CI_Controller {

	public function index()
	{

		$data['vpengeluaranwhs'] = $this->m_pengeluaranwhs->tampil_data()->result();

		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vpengeluaranwhs', $data);
		$this->load->view('template/footer');

	}

	function tambah(){

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vpengeluaranwhs');
		$this->load->view('template/footer');

	}

	public function tambah_aksi(){

		$nomor_pengeluaran 	 = $this->input->post('nomor_pengeluaran');
		$tanggal_pengeluaran = $this->input->post('tanggal_pengeluaran');
		$tujuan_keluar      = $this->input->post('tujuan_keluar');
		$user_input 		 = $this->input->post('user_input');




		$data = array(
			'nomor_pengeluaran'   => $nomor_pengeluaran,
			'tanggal_pengeluaran' => $tanggal_pengeluaran,
			'tujuan_keluar' 	 => $Jenis_pemasukan,
			'user_input' 		 => $user_input,

		);
		
		$this->m_pengeluaranwhs->input_data($data, 'tbpengeluaran_whs');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di input!
</div>');
		redirect('Pengeluaranwhs/index');
	}


	public function hapus($id){

	$where = array ('id' => $id);
	$this->m_pengeluaranwhs->hapus_data($where,'tbpengeluaran_whs');
	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	Data Berhasil Di Hapus!
	</div>');
	redirect('Pengeluaranwhs/index'); 
 }

 public function edit($id)
    {
        $data['pengeluaranwhs'] = $this->m_pengeluaranwhs->GetPengeluaranById($id); //get nomor di model m_warehouse
        $data['jenis'] = ['Jenis Pengeluaran', 'import', 'exsport'];
        /**harus berurutan sesuai urutan di table mysql / database*/
	$this->form_validation->set_rules('nomor_pengeluaran', 'Nomor_pengeluaran', 'required');
        $this->form_validation->set_rules('tanggal_pengeluaran', 'Tanggal_pengeluaran', 'required');
        $this->form_validation->set_rules('tujuan_keluar', 'Tujuan_keluar', 'required');
        $this->form_validation->set_rules('user_input', 'User_input', 'required');
        if ($this->form_validation->run() == false) {
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('editpengeluaran', $data);
		$this->load->view('template/footer');
        } else {
            $this->m_pengeluaranwhs->UbahDataPengeluaran();
            $this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di Update!
</div>');
            redirect('Pengeluaranwhs/index');
        }
    }
  public function detail($id)
    {
        $this->load->model('m_pengeluaranwhs');
        $detail = $this->m_pengeluaranwhs->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
	//**Menampilkan halaman detail di folder Views*/
        $this->load->view('detailpengeluaranwhs', $data); 
		$this->load->view('template/footer');
    }

    public function cetak(){
    	$data['pengeluaranwhs'] = $this->m_pengeluaranwhs->tampil_data("tbpengeluaran_whs")->result();
    	$this->load->view('laporan_pengeluaran', $data);
    }
  
}