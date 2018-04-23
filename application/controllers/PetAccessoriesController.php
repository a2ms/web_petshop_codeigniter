<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetAccessoriesController extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
        $this->load->model('AccessoriesModel');
        $this->load->library('form_validation');
        $this->load->helper('text');
        $this->load->library('session');
        $this->load->library('pagination');
  }


  public function index()
  {
		$jumlah_data = $this->AccessoriesModel->getCountPetAccessories();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/PetAccessoriesController/PetAccessories/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['PetAccessoriesList']=$this->AccessoriesModel->getPetAccessoriesAll($config['per_page'],$from);
		$this->load->view('PetAccessoriesView',$data);
  }

	public function PetAccessories()
	{
    $jumlah_data = $this->AccessoriesModel->getCountPetAccessories();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/PetAccessoriesController/PetAccessories/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['PetAccessoriesList']=$this->AccessoriesModel->getPetAccessoriesAll($config['per_page'],$from);
		$this->load->view('PetAccessoriesView',$data);
	}
}
