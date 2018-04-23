<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegisterModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function register($DataRegister)
    {
      $this->db->insert('tbl_pengguna',$DataRegister);
    }

    function getIdPengguna($email)
    {
      $this->db->select('id_pengguna');
      $this->db->from('tbl_pengguna');
      $this->db->where('email',$email);
      $data=$this->db->get('')->row();
      return $data->id_pengguna;
    }

    function updatePengguna($DataPengguna)
    {
        $this->db->update('tbl_pengguna',$DataPengguna);
    }
}
