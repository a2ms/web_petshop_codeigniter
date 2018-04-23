<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatPetsController extends CI_Controller {

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
		$jumlah_data = $this->PetModel->getCountCatPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/CatPetsController/CatPet/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['CatPetList']=$this->PetModel->getCatPetAll($config['per_page'],$from);
		$this->load->view('CatPetsView',$data);
  }

	public function CatPet()
	{
    $jumlah_data = $this->PetModel->getCountCatPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/CatPetsController/CatPet/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['CatPetList']=$this->PetModel->getCatPetAll($config['per_page'],$from);
		$this->load->view('CatPetsView',$data);
	}
}
