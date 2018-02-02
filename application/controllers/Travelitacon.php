<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelitacon extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->cek_sessiontrue();
		$data['sesi'] = $this->cek_session();
		$this->load->view('home');
	}
	public function login(){
		$this->cek_sessiontrue();
		$data['sesi'] = $this->cek_session();
		$this->load->view('login');
	}
	public function signin(){
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE)),
			);

		$hasil = $this->model->GetData($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['fullname'] = $sess->fullname;
				$sess_data['email'] = $sess->email;
				$sess_data['level'] = $sess->level;
				$sess_data['status'] = 'login';
			}
			$this->session->set_userdata($sess_data);
				redirect(base_url().'Travelitacon/dashboard');
		}
		else {
			$info='<div style="color:red">PERIKSA KEMBALI NIK DAN PASSWORD ANDA!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'Travelitacon/login');

		}
	}
	public function dashboard(){
		$this->cek_sessionfalse();
		$trute = $this->model->tot_rute()->result_array();
		$tuser = $this->model->tot_user()->result_array();
		$data = array(
			'tot_rute'=> $trute[0]['tot_rute'],
			'tot_user'=> $tuser[0]['tot_user'],
		);
		$this->load->view('dashboard',$data);
	}
	public function daftar(){
		$this->cek_sessiontrue();
		$data['sesi'] = $this->cek_session();
		$this->load->view('daftar');
	}
	public function rute(){
		$this->cek_sessionfalse();
		$data = array(
			'data_rute' => $this->model->getrute("order by id_rute asc")->result_array()
		);
		$this->load->view('rute/rute', $data);
	}
	public function tambahrute(){
		$this->load->view('rute/tambahrute');
	}
	function saverute(){
		$data = array(
			'depart_at' => $this->input->post('depart_at'),
			'rute_form' =>($this->input->post('rute_form')),
			'rute_to' => $this->input->post('rute_to'),
			'price' => $this->input->post('price'),
			'transportationid' => $this->input->post('transportationid'),
			);
		$result = $this->model->Simpan('rute', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'travelitacon/rute');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'travelitacon/tambahrute');
		}
	}
	public function editrute($kode = 0){
		$data_rute = $this->model->getrute("where id_rute ='$kode'")->result_array();

		$data = array(
			'id_rute' => $data_rute[0]['id_rute'],
			'depart_at' => $data_rute[0]['depart_at'],
			'rute_form' => $data_rute[0]['rute_form'],
			'rute_to' => $data_rute[0]['rute_to'],
			'price' => $data_rute[0]['price'],
			'transportationid' => $data_rute[0]['transportationid'],
			);
		$this->load->view('rute/editrute', $data);
	}
	public function saveEdit()
	{
		$this->cek_sessionfalse();
		$depart_at = $this->input->post('depart_at');
		$rute_form = $this->input->post('rute_form');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportationid = $this->input->post('transportationid');
		$id_rute = $this->input->post('id_rute');
		
		$data = array(
			'depart_at' => $depart_at,
			'rute_form' => $rute_form,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportationid' => $transportationid,
		);
		$where = array(
			'id_rute' => $id_rute
		);
		$simpan = $this->model->update_data($where,$data,'rute');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'travelitacon/rute');
	}

	public function hapususer($kode = 1){
		$result = $this->model->Hapus('user', array('id_user' => $kode));
		header('location:'.base_url().'Travelitacon/user');
	}
	public function hapusrute($kode = 1){
		$result = $this->model->Hapus('rute', array('id_rute' => $kode));
		header('location:'.base_url().'Travelitacon/rute');
	}
	function savedata(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' =>md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
			);
		$result = $this->model->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url());
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url());
		}
	}
	public function user(){
		$this->cek_sessionfalse();
		$data = array(
			'data_user' => $this->model->getuser("order by id_user asc")->result_array()
		);
		$this->load->view('user/datauser' ,$data);
	}
	public function saveuser(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' =>md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level'),
			);
		$result = $this->model->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'travelitacon/user');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'travelitacon/tambahuser');
		}
	}
	public function tambahuser(){
		$this->cek_sessionfalse();
		$this->load->view('user/tambahuser');
	}
	public function edituser($kode = 0){
		$data_rute = $this->model->getuser("where id_user ='$kode'")->result_array();

		$data = array(
			'id_user' => $data_rute[0]['id_user'],
			'username' => $data_rute[0]['username'],
			'password' => $data_rute[0]['password'],
			'fullname' => $data_rute[0]['fullname'],
			'email' => $data_rute[0]['email'],
			'level' => $data_rute[0]['level'],
			);
		$this->load->view('user/edituser', $data);
	}
	public function saveedituser()
	{
		$this->cek_sessionfalse();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$id_user = $this->input->post('id_user');
		
		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'email' => $email,
			'level' => $level,
		);
		$where = array(
			'id_user' => $id_user
		);
		$simpan = $this->model->update_data($where,$data,'user');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'travelitacon/user');
	}
	public function profile(){
		$this->cek_sessionfalse();
		$this->load->view('profile');
	}
	public function cek_sessiontrue(){
    	$sesion = $this->session->status;
    	if(!empty($sesion)){ 
    	  	redirect(base_url().'Travelitacon/dashboard');
    	}
    }
    public function cek_session(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
    	  	return 0;
    	}else{
    		return 1;
    	}
  	}
    public function cek_sessionfalse(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
      		redirect(base_url().'Travelitacon/index');
         }
     }
    public function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url().'Travelitacon/index');
     }
}