<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('RegisterModel');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('text','form','session');
	}

	public function index()
	{
		$this->load->view('HomeView');
	}


	public function Register()
	{
		$CekRegister = array(
			array(
				'field'=>'email',
				'label','email',
				'rules'=>'trim|required|valid_email|is_unique[tbl_pengguna.email]',
				'errors'=>array(
					'required'=>'email tidak boleh kosong',
					'valid_email'=>'email tidak valid',
					'is_unique'=>'email sudah dipakai, gunakan email lain'
				)
			),
			array(
				'field'=>'katasandi',
				'label'=>'katasandi',
				'rules'=>'trim|required|min_length[8]',
				'errors'=>array(
					'required'=>'kata sandi tidak boleh kosong',
					'min_length'=>'kata sandi minimal 8 karakter'
				)
			),
			array(
				'field'=>'konfirmasikatasandi',
				'label'=>'konfirmasikatasandi',
				'rules'=>'trim|matches[katasandi]',
				'errors'=>array(
					'matches'=>'kata sandi dan konfirmasi kata sandi tidak sama'
				)
			),
			array(
				'field'=>'nama_lengkap',
				'label'=>'nama_lengkap',
				'rules'=>'required',
				'errors'=>array(
					'required'=>'nama lengkap tidak boleh kosong'
				)
			),
			array(
				'field'=>'alamat',
				'label'=>'alamat',
				'rules'=>'required',
				'errors'=>array(
					'required'=>'alamat tidak boleh kosong'
				)
			)
		);


		$this->load->library('upload');
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time

		$email=$this->input->post('email');
		$KonfirmasiKatasandi=$this->input->post('konfirmasikatasandi');
		$Katasandi=$this->input->post('katasandi');
		$DataRegister=array(
			'email'=>$email,
			'katasandi'=>md5($this->input->post('katasandi')),
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$nmfile,
			'status'=>'tdk aktif',
			'peran'=>'pengguna'
		);

		$message="";

		$this->form_validation->set_rules($CekRegister);

		if($this->form_validation->run())
		{
			$config['upload_path'] = './foto/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['max_size'] = '2048'; //maksimum besar file 2M
			$config['max_width']  = '2000'; //lebar maksimum 1288 px
			$config['max_height']  = '2000'; //tinggi maksimu 768 px
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
			$this->upload->initialize($config);
			if($_FILES['gambar']['name'])
			{
				if ($this->upload->do_upload('gambar'))
				{
					$gbr = $this->upload->data();
					$this->RegisterModel->register($DataRegister);

					$this->sendEmail($email);
				}
				else{
					$this->session->set_flashdata('message', 'Gagal upload gambar');
					redirect('RegisterController','refresh');
				}
			}
		}
		else
		{
			echo validation_errors();
		}
		

	}

	public function sendEmail($email)
	{
		$id=md5($this->RegisterModel->getIdPengguna($email));

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'epedspwl@gmail.com',
			'smtp_pass' => 'epeds12345678'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n"); /* for some reason it is needed */

		$this->email->from('epedspwl@gmail.com', 'Epeds Admin');
		$this->email->to($email);
		$this->email->subject('Konfirmasi Akun');
		$this->email->message('Silahkan klik di bawah ini untuk konfirmasi akun
		http://localhost/epeds_web/index.php/aktivasi?id='.$id);

		if($this->email->send())
		{

		}else {
			show_error($this->email->print_debugger());
		}
	}

	public function AktivasiEmail()
	{
		$id=md5($this->input->get('id'));
		$DataPengguna=array(
			'id_pengguna'=>$id,
			'status'=>'aktif'
		);

		$this->RegisterModel->updatePengguna($DataPengguna);

		redirect('LoginController');
	}
}
