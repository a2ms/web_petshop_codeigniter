<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->model('PetModel');
		$this->load->model('AccessoriesModel');
		$this->load->library('session');
		$this->load->helper('text');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		$data=array(
			'HomeSmallPet'=>$this->PetModel->getHomeSmallPet(),
			'HomeDogPet'=>$this->PetModel->getHomeDogPet(),
			'HomeCatPet'=>$this->PetModel->getHomeCatPet(),
			'HomePetAccessories'=>$this->AccessoriesModel->getHomePetAccessories()
		);
		$this->load->view('HomeView',$data);
	}

	public function CekLogin()
	{
		$DataLogin=array(
			'email'=>$this->input->post('email'),
			'katasandi'=>md5($this->input->post('katasandi'))
		);
		if($this->LoginModel->cekLogin($DataLogin))
		return true;
		else
		return false;
	}

	public function CekEmail()
	{
		$email=$this->input->post('email');
		if($this->LoginModel->CekEmail($email))
		return true;
		else
		return false;
	}

	public function Login()
	{
		$DataLogin=array(
			'email'=>$this->input->post('email'),
			'katasandi'=>md5($this->input->post('katasandi'))
		);

		////////////////Form Validation/////////////////////
		$CekRequired = array(
			array(
				'field'=>'email',
				'label','email',
				'rules'=>'trim|required',
				'errors'=>array(
					'required'=>'email tidak boleh kosong'
				)
			),
			array(
				'field'=>'katasandi',
				'label'=>'katasandi',
				'rules'=>'trim|required',
				'errors'=>array(
					'required'=>'kata sandi tidak boleh kosong'
				)
			)
		);

		$CekLogin=array(
			array(
				'field'=>'katasandi',
				'label'=>'katasandi',
				'rules'=>'callback_CekLogin',
				'errors'=>array(
					'CekLogin'=>'email atau kata sandi salah'
				)
			)
		);

		$CekStatusEmail=array(
			array(
				'field'=>'email',
				'label'=>'email',
				'rules'=>'callback_CekEmail',
				'errors'=>array(
					'CekEmail'=>'status anda belum aktif, konfirmasi <a href="http://mail.google.com">di sini</a>'
					)
				)
			);

			////////////////Form Validation/////////////////////

			$this->form_validation->set_rules($CekRequired);

			if($this->form_validation->run())
			{
				$this->form_validation->set_rules($CekLogin);
				if($this->form_validation->run())
				{
					$this->form_validation->set_rules($CekStatusEmail);
					if($this->form_validation->run())
					{
						$DataUser=$this->LoginModel->cekLogin($DataLogin);

						$data = $this->LoginModel->getDataPengguna($DataLogin);

						$datasession= array(
							'id_pengguna'=>$data->id_pengguna,
							'email' => $data->email,
							'nama_lengkap'=>$data->nama_lengkap,
							'katasandi'=>md5($data->katasandi),
							'alamat'=>$data->alamat,
							'peran'=>$data->peran,
							'foto'=>$data->foto
						);
						$this->session->set_userdata($datasession);
						$this->session->set_userdata('status','login');
					}
					else
					{
						echo validation_errors();
					}
				}
				else
				{
					echo validation_errors();
				}
			}
			else
			{
				echo validation_errors();
			}
		}

		public function Logout()
		{
			$this->session->unset_userdata('status');
			redirect('LoginController','refresh');
		}
	}
