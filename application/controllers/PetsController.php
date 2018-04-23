<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetsController extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
        $this->load->model('PetModel');
        $this->load->library('form_validation');
        $this->load->helper('text');
        $this->load->library('session');
        $this->load->library('pagination');
  }


  public function index()
  {
		$jumlah_data = $this->PetModel->getCountPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'layout/allpet/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['AllPetList']=$this->PetModel->getPetAll($config['per_page'],$from);
		$this->load->view('PetsView',$data);
  }

	public function AllPet()
	{
    $jumlah_data = $this->PetModel->getCountPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'layout/allpet/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['AllPetList']=$this->PetModel->getPetAll($config['per_page'],$from);
		$this->load->view('PetsView',$data);
	}
	
	function cari(){
        $cari=$this->input->post('cari');
        if($this->PetModel->cari($cari))
		{
			$data['message']="";
			$data['HewanList']=$this->PetModel->hasilcari($cari);
			$data['AccList']=$this->PetModel->hasilcari2($cari);
			$this->load->view('SearchView',$data);
		}
		else {
			$data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
			$data['HewanList']=$this->PetModel->hasilcari($cari);
			$data['AccList']=$this->PetModel->hasilcari2($cari);
			$this->load->view('SearchView',$data);
			$this->session->set_flashdata('flash_data','Data Tidak Ditemukan!');
			}
    }
	
}
