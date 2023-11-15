<?php 

class Kategori extends CI_Controller{
	public function elektronik()
	{
		$data['elektronik'] = $this->model_kategori->data_elektronik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('elektronik',$data);
		$this->load->view('templates/footer');
	}

	public function peralatan_sepeda()
	{
		$data['peralatan_sepeda'] = $this->model_kategori->data_peralatan_sepeda()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peralatan_sepeda',$data);
		$this->load->view('templates/footer');
	}

	public function peralatan_sekolah()
	{
		$data['peralatan_sekolah'] = $this->model_kategori->data_peralatan_sekolah()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peralatan_sekolah',$data);
		$this->load->view('templates/footer');
	}
}