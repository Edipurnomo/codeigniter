<?php

class m_warehousedtl extends Ci_Model {
public function tampil_data()
   {
	 
	  return $this->db->get('penerimaandtl');
    }

    public function input_data($data){
    	$this->db->insert('penerimaandtl', $data);
    }

    public function hapus_data($where, $table){

      $this->db->where($where);
      $this->db->delete($table);
    }
    // public function edit_data($where, $table){

    //  return $this->db->get_where($where,$table);
    // }

    public function GetWarehousedtlById($id)
    {
        return $this->db->get_where('penerimaandtl', ['id' => $id])->row_array();
    }

    public function UbahDataWarehousedtl()
    {
        $data = [
            "nomor_penerimaan" => $this->input->post('nomor_penerimaan', true),
            "material_code" => $this->input->post('material_code', true),
            "material_name" => $this->input->post('material_name', true),
            "jumlah" => $this->input->post('jumlah', true),
            "unit" => $this->input->post('unit', true),


        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('penerimaandtl', $data);
    }
public function detail_data($id = NULL)
    {
        $query  = $this->db->get_where('penerimaandtl', array('id' => $id))->row();
        return $query;
    }
    
}

