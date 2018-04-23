<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
        $this->load->model('PetModel');
        $this->load->model('AccessoriesModel');
        $this->load->library('form_validation');
        $this->load->helper('text');
        $this->load->library('session');
        $this->load->library('pagination');
  }


  public function index()
  {
    $jumlah_data = $this->PetModel->getCountPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/SearchController/Search/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

    $jumlah_data2 = $this->AccessoriesModel->getCountPetAccessories();

		$config2['total_rows'] = $jumlah_data2;
		$config2['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config2);

		$data['AllPetList']=$this->PetModel->getPetAll($config['per_page'],$from);
    $data['PetAccessoriesList']=$this->AccessoriesModel->getPetAccessoriesAll($config2['per_page'],$from);
		$this->load->view('SearchView',$data);
  }

	public function Search()
	{
    $jumlah_data = $this->PetModel->getCountPet();
		$this->load->library('pagination');


		$config['base_url'] = base_url().'index.php/SearchController/Search/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

    $jumlah_data2 = $this->AccessoriesModel->getCountPetAccessories();

		$config2['total_rows'] = $jumlah_data2;
		$config2['per_page'] = 12;
		$from2 = $this->uri->segment(4);
		$this->pagination->initialize($config2);

		$data['AllPetList']=$this->PetModel->getPetAll($config['per_page'],$from);
    $data['PetAccessoriesList']=$this->AccessoriesModel->getPetAccessoriesAll($config2['per_page'],$from2);
		$this->load->view('SearchView',$data);
	}

	function cari(){
        $cari=$this->input->post('cari');
        if($this->PetModel->cari($cari))
		{
			$data['message']="";
			$data['SmallPetList']=$this->PetModel->hasilcari($cari);
			$this->load->view('SearchSmallPetsView',$data);
		}
		else {
			$data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
			$data['SmallPetList']=$this->PetModel->hasilcari($cari);
			$this->load->view('SearchSmallPetsView',$data);
			$this->session->set_flashdata('flash_data','Data Tidak Ditemukan!');
			}
    }
}
