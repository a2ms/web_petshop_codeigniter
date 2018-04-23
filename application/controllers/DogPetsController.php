<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DogPetsController extends CI_Controller {

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
		$jumlah_data = $this->PetModel->getCountDogPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/DogPetsController/DogPet/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['DogPetList']=$this->PetModel->getDogPetAll($config['per_page'],$from);
		$this->load->view('DogPetsView',$data);
  }

	public function DogPet()
	{
    $jumlah_data = $this->PetModel->getCountDogPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/DogPetsController/DogPet/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['DogPetList']=$this->PetModel->getDogPetAll($config['per_page'],$from);
		$this->load->view('DogPetsView',$data);
	}

	function caridog(){
        $cari=$this->input->post('cari');
        if($this->PetModel->cari($cari))
		{
			$data['message']="";
			$data['DogPetList']=$this->PetModel->hasilcaridog($cari);
			$this->load->view('SearchDogPetsView',$data);
		}
		else {
			$data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
			$data['DogPetList']=$this->PetModel->hasilcaridog($cari);
			$this->load->view('SearchDogPetsView',$data);
			$this->session->set_flashdata('flash_data','Data Tidak Ditemukan!');
			}
}

}
