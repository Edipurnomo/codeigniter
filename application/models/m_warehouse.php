<?php

class m_warehouse extends Ci_Model {
public function tampil_data()
   {
	 
	  return $this->db->get('tbwarehouse');
    }

    public function input_data($data){
    	$this->db->insert('tbwarehouse', $data);
    }

    public function hapus_data($where, $table){

      $this->db->where($where);
      $this->db->delete($table);
    }
    

    public function GetWarehouseById($id)
    {
        return $this->db->get_where('tbwarehouse', ['id' => $id])->row_array();
    }

    public function UbahDataWarehouse()
    {
        $data = [
            "nomor_penerimaan" => $this->input->post('nomor_penerimaan', true),
            "tanggal_penerimaan" => $this->input->post('tanggal_penerimaan', true),
            "jenis_pemasukan" => $this->input->post('jenis_pemasukan', true),
            "user_input" => $this->input->post('user_input', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbwarehouse', $data);
    }
public function detail_data($id = NULL)
    {
        $query  = $this->db->get_where('tbwarehouse', array('id' => $id))->row();
        return $query;
    }
    
}

