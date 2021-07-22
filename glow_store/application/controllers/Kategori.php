<?php 
class Kategori extends CI_Controller{
	public function  Skincare()
	{
		$data['Skincare']= $this->model_kategori->Skincare()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('skincare', $data); 
		$this->load->view('template/footer');
	}
	public function  Bodycare()
	{
		$data['Bodycare']= $this->model_kategori->Bodycare()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('bodycare', $data); 
		$this->load->view('template/footer');
	}
	public function  Serum()
	{
		$data['Serum']= $this->model_kategori->Serum()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('serum', $data); 
		$this->load->view('template/footer');
	}
	public function Cosmetic()
	{
		$data['Cosmetic']= $this->model_kategori->Cosmetic()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('cosmetic', $data); 
		$this->load->view('template/footer');
	}
	public function  Spot_treatment()
	{
		$data['Spot_treatment']= $this->model_kategori->Spot_treatment()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('spot_treatment', $data); 
		$this->load->view('template/footer');
	}
	public function  Paket()
	{
		$data['Paket']= $this->model_kategori->Paket()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('paket', $data); 
		$this->load->view('template/footer');
	}

}
?>