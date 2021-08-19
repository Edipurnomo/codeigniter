<?php

class Warehouse extends CI_Controller {

	public function index()
	{

		$data['vwarehouse'] = $this->m_warehouse->tampil_data()->result();

		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vwarehouse', $data);
		$this->load->view('template/footer');

	}

	function tambah(){

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('vwarehouse');
		$this->load->view('template/footer');

	}

	public function tambah_aksi(){

		$nomor_penerimaan 	= $this->input->post('nomor_penerimaan');
		$tanggal_penerimaan = $this->input->post('tanggal_penerimaan');
		$Jenis_pemasukan 	= $this->input->post('jenis_pemasukan');
		$user_input 		= $this->input->post('user_input');




		$data = array(
			'nomor_penerimaan'   => $nomor_penerimaan,
			'tanggal_penerimaan' => $tanggal_penerimaan,
			'jenis_pemasukan' 	 => $Jenis_pemasukan,
			'user_input' 		 => $user_input,

		);
		
		$this->m_warehouse->input_data($data, 'tbwarehouse');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di input!
</div>');
		redirect('warehouse/index');
	}

public function hapus($id){

	$where = array ('id' => $id);
	$this->m_warehouse->hapus_data($where,'tbwarehouse');
	$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di Hapus!
</div>');
	redirect('warehouse/index'); 
 }

 public function edit($id)
    {
        $data['warehouse'] = $this->m_warehouse->GetWarehouseById($id); //get nomor di model m_warehouse
        $data['jenis'] = ['Jenis Pemasukan', 'import', 'exsport'];
        /**harus berurutan sesuai urutan di table mysql / database*/
	$this->form_validation->set_rules('nomor_penerimaan', 'Nomor_penerimaan', 'required');
        $this->form_validation->set_rules('tanggal_penerimaan', 'Tanggal_penerimaan', 'required');
        $this->form_validation->set_rules('jenis_pemasukan', 'Jenis_pemasukan', 'required');
        $this->form_validation->set_rules('user_input', 'User_input', 'required');
        if ($this->form_validation->run() == false) {
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('template/footer');
        } else {
            $this->m_warehouse->UbahDataWarehouse();
            $this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Data Berhasil Di Update!
</div>');
            redirect('warehouse/index');
        }
    }
  public function detail($id)
    {
        $this->load->model('m_warehouse');
        $detail = $this->m_warehouse->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
	//**Menampilkan halaman detail di folder Views*/
        $this->load->view('detail', $data); 
		$this->load->view('template/footer');
    }

    public function cetak(){
    	$data['Warehouse'] = $this->m_warehouse->tampil_data("tbwarehouse")->result();
    	$this->load->view('print_warehouse', $data);
    }
    public function pdf(){
    	
    	$this->load->library('dompdf_gen');
    	
    	$data['Warehouse'] = $this->m_warehouse->tampil_data("tbwarehouse")->result();
    	
    	$this->load->view('laporan_pdf', $data);

    	$paper_size='A4';
    	$orientation='landscape';
    	$html = $this->output->get_output();
    	$this->dompdf->set_paper($paper_size, $orientation);

    	$this->dompdf->load_html($html);
    	$this->dompdf->render();
    	$this->dompdf->stream("laporan_warehouse.pdf", array('Attachment' =>0));
    }
}