<?php

class m_home extends Ci_Model {
public function tampil_data()
   {
	 
	  return $this->db->get('catatan');

	}
	 public function input_data($data){
    	$this->db->insert('catatan', $data);
    }


 }
