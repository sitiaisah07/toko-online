<?php

class Model_kategori extends CI_Model{
	
	public function data_elektronik(){
		return $this->db->get_where('tb_barang',array('kategori' =>'elektronik'));
	}

	public function data_peralatan_sepeda(){
		return $this->db->get_where('tb_barang',array('kategori' =>'peralatan sepeda'));
	}

	public function data_peralatan_sekolah(){
		return $this->db->get_where('tb_barang',array('kategori' =>'peralatan sekolah'));
	}
}