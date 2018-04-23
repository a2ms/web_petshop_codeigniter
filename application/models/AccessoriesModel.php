<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AccessoriesModel extends CI_Model
{
	public $table = 'tbl_hewan';
	public $table2 = 'tbl_pengguna';
	public $order = 'ASC';

	public function __construct() {
		parent::__construct();
	}

	function getPetAccessoriesAll($number,$offset){
		$this->db->select('*');
		$this->db->from('tbl_aksesoris');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$query = $this->db->get('',$number,$offset);
		return $query->result();
	}

	function getCountPetAccessories()
	{
		$this->db->select('*');
		$this->db->from('tbl_aksesoris');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$num_rows = $this->db->count_all_results('');
		return $num_rows;
	}

	//HomeView

	function getHomePetAccessories()
	{
		$this->db->limit(4);
		$this->db->select('*');
		$this->db->from('tbl_aksesoris');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$query=$this->db->get();
    return $query->result();
	}

	////MyProfil
	function getMyPetAccessories($id_pengguna)
	{
		$this->db->select('*');
		$this->db->from('tbl_aksesoris');
		$this->db->where('id_pengguna',$id_pengguna);
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$query = $this->db->get('');
		return $query->result();
	}

}
