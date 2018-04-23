<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailNewsController extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
				$this->load->Model('PetModel');
        $this->load->library('form_validation');
        $this->load->helper('text');
        $this->load->library('session');
        $this->load->library('pagination');
  }


  public function index()
  {
		$this->load->view('DetailNewsView');
  }
}
