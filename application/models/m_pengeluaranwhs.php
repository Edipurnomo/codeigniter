<?php

class m_pengeluaranwhs extends Ci_Model {
public function tampil_data()
   {
	 
	  return $this->db->get('tbpengeluaran_whs');
    }

    public function input_data($data){
    	$this->db->insert('tbpengeluaran_whs', $data);
    }

    public function hapus_data($where, $table){

      $this->db->where($where);
      $this->db->delete($table);
    }
    // public function edit_data($where, $table){

    //  return $this->db->get_where($where,$table);
    // }

    public function GetPengeluaranById($id)
    {
        return $this->db->get_where('tbpengeluaran_whs', ['id' => $id])->row_array();
    }

    public function UbahDataPengeluaran()
    {
        $data = [
            "nomor_pengeluaran" => $this->input->post('nomor_pengeluaran', true),
            "tanggal_pengeluaran" => $this->input->post('tanggal_pengeluaran', true),
            "tujuan_keluar" => $this->input->post('tujuan_keluar', true),
            "user_input" => $this->input->post('user_input', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbpengeluaran_whs', $data);
    }
public function detail_data($id = NULL)
    {
        $query  = $this->db->get_where('tbpengeluaran_whs', array('id' => $id))->row();
        return $query;
    }
    
}

