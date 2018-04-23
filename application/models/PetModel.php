<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PetModel extends CI_Model
{
	public $table = 'tbl_hewan';
	public $table2 = 'tbl_pengguna';
	public $order = 'ASC';

	public function __construct() {
		parent::__construct();
	}

	//PetsView
	function getPetAll($number,$offset){
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$query = $this->db->get('',$number,$offset);
		return $query->result();
	}

	function getCountPet()
	{
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$num_rows = $this->db->count_all_results('');
		return $num_rows;
	}

	//SmallPetsView

	function getSmallPetAll($number,$offset){
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Small pet');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$query = $this->db->get('',$number,$offset);
		return $query->result();
	}

	function getCountSmallPet()
	{
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Small pet');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$num_rows = $this->db->count_all_results('');
		return $num_rows;
	}

	//DogPetsView

	function getDogPetAll($number,$offset){
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Anjing');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$query = $this->db->get('',$number,$offset);
		return $query->result();
	}

	function getCountDogPet()
	{
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Anjing');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$num_rows = $this->db->count_all_results('');
		return $num_rows;
	}

	//CatPetsView
	function getCatPetAll($number,$offset){
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Kucing');
		$this->db->where('verifikasi','ya');
		$this->db->not_like('status','terjual');
		$query = $this->db->get('',$number,$offset);
		return $query->result();
	}

	function getCountCatPet()
	{
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Kucing');
		$this->db->not_like('status','terjual');
		$num_rows = $this->db->count_all_results('');
		return $num_rows;
	}

	//MyProfile
	function getMyPetAll($id_pengguna){
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('id_pengguna',$id_pengguna);
		$this->db->not_like('status','terjual');
		$query = $this->db->get('');
		return $query->result();
	}

	function updateHewan($DataHewan)
	{
		$this->db->where('id_hewan', $DataHewan['id_hewan']);
		$this->db->update('tbl_hewan',$DataHewan);
	}

	//HomeView

	function getHomeSmallPet()
	{
		$this->db->limit(4);
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Small pet');
		$this->db->not_like('status','terjual');
		$query=$this->db->get();
    return $query->result();
	}

	function getHomeDogPet()
	{
		$this->db->limit(4);
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Anjing');
		$this->db->not_like('status','terjual');
		$query=$this->db->get();
    return $query->result();
	}

	function getHomeCatPet()
	{
		$this->db->limit(4);
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('kategori_hewan','Kucing');
		$this->db->not_like('status','terjual');
		$query=$this->db->get();
    return $query->result();
	}

	function insertHewan($DataHewan)
	{
		$this->db->insert('tbl_hewan',$DataHewan);
	}

	function getDataPet($id_hewan)
	{
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->where('id_hewan',$id_hewan);
		$this->db->not_like('status','terjual');
		$data= $this->db->get('')->row();
		return $data;
	}

	public function cari($cari)
	{
		$cek=true;
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->like("judul",$cari);
		$num_rows=$this->db->count_all_results('');
		if($num_rows==0)
		{
		  $cek=false;
		}
		return $cek;
	}

	public function hasilcari($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_hewan');
		$this->db->like("judul",$cari);
		$query = $this->db->get('');

		return $query->result();
	}
	
	public function hasilcari2($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_aksesoris');
		$this->db->like("judul",$cari);
		$query = $this->db->get('');

		return $query->result();
	}
}
