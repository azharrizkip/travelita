<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}
	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}
	public function getUserByUsername($where,$tabel){
		$query = $this->db->get_where($tabel,$where);
		$result= $query->num_rows();
		if ($result==1){
			return true;
		}else{
			return false;
		}
	}
	public function get_user($where=" "){
		return $this->db->query("select * as get_user from user " .$where);
	}
	function GetData($data) {
        $query = $this->db->get_where('user', $data);
        return $query;
    }
	public function getuser($where=" "){
		$data =$this->db->query('select * from user ' .$where);
		return $data;
	}
	public function gettrans($where=" "){
		$data =$this->db->query('select * from transportation ' .$where);
		return $data;
	}
	public function getkota($where=" "){
		$data =$this->db->query('select * from kota ' .$where);
		return $data;
	}
	public function getfullname($where=" "){
		$data =$this->db->query('select fullname from user ' .$where);
		return $data;
	}
	public function getrute($where=" "){
		$data =$this->db->query('select * from rute ' .$where);
		return $data;
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->update($table,$data);
		return $query;
	}
	public function Hapus($table,$where){
		return $this->db->delete($table,$where);
	}
	function tot_rute(){
		return $this->db->query("select count(*) as tot_rute from rute");
	}
	function tot_user(){
		return $this->db->query("select count(*) as tot_user from user");
	}
	function tot_trans(){
		return $this->db->query("select count(*) as tot_trans from transportation");
	}
}