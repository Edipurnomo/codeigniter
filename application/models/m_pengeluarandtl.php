<?php

class m_pengeluarandtl extends Ci_Model {
public function tampil_data()
   {
	 
	  return $this->db->get('pengeluaran_whsdetail');
    }

    public function input_data($data){
    	$this->db->insert('pengeluaran_whsdetail', $data);
    }

    public function hapus_data($where, $table){

      $this->db->where($where);
      $this->db->delete($table);
    }
    // public function edit_data($where, $table){

    //  return $this->db->get_where($where,$table);
    // }

    public function GetPengeluarandtlById($id)
    {
        return $this->db->get_where('pengeluaran_whsdetail', ['id' => $id])->row_array();
    }

    public function UbahDataPengeluarandtl()
    {
        $data = [
            "nomor_pengeluaran" => $this->input->post('nomor_pengeluaran', true),
            "material_code" => $this->input->post('material_code', true),
            "material_name" => $this->input->post('material_name', true),
            "jumlah" => $this->input->post('jumlah', true),
            "unit" => $this->input->post('unit', true),


        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pengeluaran_whsdetail', $data);
    }
public function detail_data($id = NULL)
    {
        $query  = $this->db->get_where('pengeluaran_whsdetail', array('id' => $id))->row();
        return $query;
    }
    
}

