<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email extends CI_Controller {

	public function index()
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'epedspwl@gmail.com',
			'smtp_pass' => 'epeds12345678'

		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n"); /* for some reason it is needed */

		$this->email->from('epedspwl@gmail.com', 'epeds admin');
		$this->email->to('aziz.ict7@gmail.com');
		$this->email->subject('epeds konfirmasi akun');
		$this->email->message('konfirmasi akunnya dab');

		if($this->email->send())
		{
			echo 'email sudah terkirim';
		}
		else
		{
			show_error($this->email->print_debugger());
		}
	}
}
