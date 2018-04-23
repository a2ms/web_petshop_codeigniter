<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cekLogin($DataLogin)
    {
        $this->db->select('*');
        $this->db->from('tbl_pengguna');
        $this->db->where('email',$DataLogin["email"]);
        $this->db->where('katasandi',$DataLogin["katasandi"]);
        $num_rows = $this->db->count_all_results('');
        if($num_rows==0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    function cekEmail($email)
    {
      $this->db->select('status');
      $this->db->from('tbl_pengguna');
      $this->db->where('email',$email);
      $status=$this->db->get()->row()->status;
      if($status=='aktif')
        return true;
      else
        return false;
    }

    function getDataPengguna($DataLogin)
    {
      $this->db->select('*');
      $this->db->from('tbl_pengguna');
      $this->db->where('email',$DataLogin["email"]);
      $this->db->where('katasandi',$DataLogin["katasandi"]);
      $data= $this->db->get('')->row();
      return $data;
    }

    function getDataLogin($DataLogin)
    {
      return $this->db->get_where("tbl_pengguna",$DataLogin);
    }
}
