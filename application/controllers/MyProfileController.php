<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfileController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('PetModel');
		$this->load->Model('AccessoriesModel');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('text');
		$this->load->library('session');
		$this->load->library('pagination');
	}


	public function index()
	{
		$id_pengguna=$this->session->userdata('id_pengguna');
		$data['MyPetList']=$this->PetModel->getMyPetAll($id_pengguna);
		$data['MyAccessoriesList']=$this->AccessoriesModel->getMyPetAccessories($id_pengguna);
		$this->load->view('MyProfilView',$data);
	}

	public function GetIdPet()
	{
		$id_hewan=$this->input->get('id_hewan');
		$this->session->set_flashdata('id_hewan',$id_hewan);
	}

	public function SoldOut()
	{
		$DataHewan=array(
			'id_hewan'=>$this->input->get('id_hewan'),
			'status'=>'terjual'
		);
		$this->PetModel->updateHewan($DataHewan);
	}

	function CekInputHarga()
	{
		$harga=$this->input->post('harga');
		if(is_numeric($harga))
		{
			return true;
		}
		else {
			return false;
		}
	}

	public function CekRequiredHewan()
	{
		$rule = array(
			array(
				'field'=>'judul',
				'label','judul',
				'rules'=>'trim|required',
				'errors'=>array(
					'required'=>'judul tidak boleh kosong'
				)
			),
			array(
				'field'=>'harga',
				'label'=>'harga',
				'rules'=>'trim|required',
				'errors'=>array(
					'required'=>'harga tidak boleh kosong'
				)
			),
			array(
				'field'=>'kategori_hewan',
				'label'=>'kategori_hewan',
				'rules'=>'trim|required',
				'errors'=>array(
					'required'=>'kategori hewan tidak boleh kosong'
				)
			),
			array(
				'field'=>'jenis_hewan',
				'label'=>'jenis_hewan',
				'rules'=>'trim|required',
				'errors'=>array(
					'required'=>'jenis hewan tidak boleh kosong'
				)
			),
			array(
				'field'=>'deskripsi',
				'label'=>'deskripsi',
				'rules'=>'trim|required',
				'errors'=>array(
					'required'=>'deskripsi tidak boleh kosong'
				)
			),
		);

		return $rule;
	}

	public function CekHarga()
	{
		$rule=array(
			array(
				'field'=>'harga',
				'label'=>'harga',
				'rules'=>'callback_CekInputHarga',
				'errors'=>array(
					'CekInputHarga'=>'harga yang diinputkan tidak valid'
				)
			)
		);
		return $rule;
	}

	public function InsertHewan()
	{
		$DataHewan=array(
			'judul'=>$this->input->post('judul'),
			'harga'=>$this->input->post('harga'),
			'kategori_hewan'=>$this->input->post('kategori_hewan'),
			'jenis_hewan'=>$this->input->post('jenis_hewan'),
			'foto'=>"",
			'deskripsi'=>$this->input->post('deskripsi'),
			'id_pengguna'=>$this->session->userdata('id_pengguna')
		);

		$this->form_validation->set_rules($this->CekRequiredHewan());

		if($this->form_validation->run())
		{
			$this->form_validation->set_rules($this->CekHarga());
			if($this->form_validation->run())
			{
				$config['upload_path'] = './assets/img/'; //path folder
				$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
				$config['max_size'] = '2048'; //maksimum besar file 2M
				$config['max_width']  = '2000'; //lebar maksimum 1288 px
				$config['max_height']  = '2000'; //tinggi maksimu 768 px
				$config['file_name'] = "file_".time(); //nama yang terupload nantinya
				$this->upload->initialize($config);
				if($_FILES['gambar']['name'])
				{
					if ($this->upload->do_upload('gambar'))
					{
						$gbr = $this->upload->data();
						$DataHewan['foto']=$gbr['file_name'];
						$this->PetModel->insertHewan($DataHewan);
					}
					else{
						$this->session->set_flashdata('message', 'Gagal upload gambar');
					}
				}
			}
			else {
				echo validation_errors();
			}
		}
		else
		{
			echo validation_errors();
		}
	}

	public function UpdateHewan()
	{
		$DataHewan=array(
			'id_hewan'=>$this->input->post('id_hewan'),
			'judul'=>$this->input->post('judul'),
			'harga'=>$this->input->post('harga'),
			'kategori_hewan'=>$this->input->post('kategori_hewan'),
			'jenis_hewan'=>$this->input->post('jenis_hewan'),
			'foto'=>"",
			'deskripsi'=>$this->input->post('deskripsi'),
			'id_pengguna'=>$this->session->userdata('id_pengguna'),
			'verifikasi'=>'tidak'
		);

		$this->form_validation->set_rules($this->CekRequiredHewan());

		if($this->form_validation->run())
		{
			$this->form_validation->set_rules($this->CekHarga());
			if($this->form_validation->run())
			{
				$config['upload_path'] = './assets/img/'; //path folder
				$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
				$config['max_size'] = '2048'; //maksimum besar file 2M
				$config['max_width']  = '2000'; //lebar maksimum 1288 px
				$config['max_height']  = '2000'; //tinggi maksimu 768 px
				$config['file_name'] = "file_".time(); //nama yang terupload nantinya
				$this->upload->initialize($config);
				if($_FILES['gambar']['name'])
				{
					if ($this->upload->do_upload('gambar'))
					{
						$gbr = $this->upload->data();
						$DataHewan['foto']=$gbr['file_name'];
						$this->PetModel->updateHewan($DataHewan);
					}
					else{
						$this->session->set_flashdata('message', 'Gagal upload gambar');
					}
				}
			}
			else {
				echo validation_errors();
			}
		}
		else
		{
			echo validation_errors();
		}
	}

	public function SetUpdateData()
	{
		$id_hewan=$this->input->get('id_hewan');
		$data = $this->PetModel->getDataPet($id_hewan);
		echo json_encode($data);
	}

	////////////////A K S E S O R I S/////////////////////
	public function InsertAksesoris()
	{
		$DataAksesoris=array(
			'judul'=>$this->input->post('judul'),
			'harga'=>$this->input->post('harga'),
			'kategori_hewan'=>$this->input->post('kategori_hewan'),
			'verifikasi'=>'tidak',
			'foto'=>"",
			'deskripsi'=>$this->input->post('deskripsi'),
			'id_pengguna'=>$this->session->userdata('id_pengguna')
		);

		$this->form_validation->set_rules($this->CekRequiredAksesoris());

		if($this->form_validation->run())
		{
			$this->form_validation->set_rules($this->CekHarga());
			if($this->form_validation->run())
			{
				$config['upload_path'] = './assets/img/'; //path folder
				$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
				$config['max_size'] = '2048'; //maksimum besar file 2M
				$config['max_width']  = '2000'; //lebar maksimum 1288 px
				$config['max_height']  = '2000'; //tinggi maksimu 768 px
				$config['file_name'] = "file_".time(); //nama yang terupload nantinya
				$this->upload->initialize($config);
				if($_FILES['gambar']['name'])
				{
					if ($this->upload->do_upload('gambar'))
					{
						$gbr = $this->upload->data();
						$DataHewan['foto']=$gbr['file_name'];
						$this->PetModel->insertHewan($DataHewan);
					}
					else{
						$this->session->set_flashdata('message', 'Gagal upload gambar');
					}
				}
			}
			else {
				echo validation_errors();
			}
		}
		else
		{
			echo validation_errors();
		}
	}

}
