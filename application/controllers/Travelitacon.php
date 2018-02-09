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
		$ttrans = $this->model->tot_trans()->result_array();
		$data = array(
			'tot_rute'=> $trute[0]['tot_rute'],
			'tot_user'=> $tuser[0]['tot_user'],
			'tot_trans'=> $ttrans[0]['tot_trans'],
		);
		$this->load->view('dashboard',$data);
	}
	public function daftar(){
		$this->cek_sessiontrue();
		$data['sesi'] = $this->cek_session();
		$this->load->view('daftar');
	}
//===========================================================
	public function rute(){
		$this->cek_sessionfalse();
		$data = array(
			'data_rute' => $this->model->getrute("order by id_rute asc")->result_array()
		);
		$this->load->view('rute/rute', $data);
	}
	public function tambahrute(){
		$this->cek_sessionfalse();
		$data = array(
			'data_trans' => $this->model->gettrans("order by transportationid asc")->result_array(),
			'data_kota' => $this->model->getkota("order by id_kota asc")->result_array(),
		);
		$this->load->view('rute/tambahrute' ,$data);
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
//===========================================================
	public function cari(){
		$this->cek_sessiontrue();
		$rute_form = $this->input->post('rute_form');
		$rute_to = $this->input->post('rute_to');
		$data = array(
			'data_rute' => $this->model->getrute("where rute_form LIKE '%$rute_form%' AND rute_to LIKE '%$rute_to%'")->result_array()
		);
		$this->load->view('cari', $data);
	}
	public function step1($kode = 0){
		$data_rute = $this->model->getrute("where id_rute ='$kode'")->result_array();

		$data = array(
			'id_rute' => $data_rute[0]['id_rute'],
			'depart_at' => $data_rute[0]['depart_at'],
			'rute_form' => $data_rute[0]['rute_form'],
			'rute_to' => $data_rute[0]['rute_to'],
			'price' => $data_rute[0]['price'],
			'transportationid' => $data_rute[0]['transportationid'],
			);
		$this->load->view('step1', $data);
	}
//===========================================================
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
	public function hapususer($kode = 1){
		$result = $this->model->Hapus('user', array('id_user' => $kode));
		header('location:'.base_url().'Travelitacon/user');
	}
//===========================================================
	public function profile(){
		$this->cek_sessionfalse();
		$this->load->view('profile');
	}
//===========================================================
	public function trans(){
		$this->cek_sessionfalse();
		$data = array(
			'data_trans' => $this->model->gettrans("order by transportationid asc")->result_array()
		);
		$this->load->view('trans/trans' ,$data);
	}
	public function hapustrans($kode = 1){
		$result = $this->model->Hapus('transportation', array('transportationid' => $kode));
		header('location:'.base_url().'Travelitacon/trans');
	}
	public function tambahtrans(){
		$this->cek_sessionfalse();
		$this->load->view('trans/tambahtrans');
	}
	public function savetrans(){
		$data = array(
			'code' => $this->input->post('code'),
			'description' =>$this->input->post('description'),
			'seat_qty' => $this->input->post('seat_qty'),
			);
		$result = $this->model->Simpan('transportation', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'travelitacon/trans');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'travelitacon/tambahtrans');
		}
	}
	public function edittrans($kode = 0){
		$data_rute = $this->model->gettrans("where transportationid ='$kode'")->result_array();

		$data = array(
			'transportationid' => $data_rute[0]['transportationid'],
			'code' => $data_rute[0]['code'],
			'description' => $data_rute[0]['description'],
			'seat_qty' => $data_rute[0]['seat_qty'],
			);
		$this->load->view('trans/edittrans', $data);
	}
	public function saveEdittrans()
	{
		$this->cek_sessionfalse();
		$transportationid = $this->input->post('transportationid');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		
		$data = array(
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
		);
		$where = array(
			'transportationid' => $transportationid
		);
		$simpan = $this->model->update_data($where,$data,'transportation');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'travelitacon/trans');
	}
//===========================================================
	public function kota(){
		$this->cek_sessionfalse();
		$data = array(
			'data_kota' => $this->model->getkota("order by id_kota asc")->result_array()
		);
		$this->load->view('kota/kota' ,$data);
	}
	public function savekota(){
		$data = array(
			'kota' => $this->input->post('kota'),
			'bandara' =>$this->input->post('bandara'),
			);
		$result = $this->model->Simpan('kota', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'travelitacon/kota');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'travelitacon/kota');
		}
	}
	public function hapuskota($kode = 1){
		$result = $this->model->Hapus('kota', array('id_kota' => $kode));
		header('location:'.base_url().'Travelitacon/kota');
	}
	public function editkota($kode = 0){
		$data_kota = $this->model->getkota("where id_kota ='$kode'")->result_array();

		$data = array(
			'id_kota' => $data_kota[0]['id_kota'],
			'kota' => $data_kota[0]['kota'],
			'bandara' => $data_kota[0]['bandara'],
			'data_kota' => $this->model->getkota("order by id_kota asc")->result_array()
			);
		$this->load->view('kota/editkota', $data);
	}
	public function saveeditkota()
	{
		$this->cek_sessionfalse();
		$id_kota = $this->input->post('id_kota');
		$kota = $this->input->post('kota');
		$bandara = $this->input->post('bandara');
		
		$data = array(
			'kota' => $kota,
			'bandara' => $bandara,
		);
		$where = array(
			'id_kota' => $id_kota
		);
		$simpan = $this->model->update_data($where,$data,'kota');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'travelitacon/kota');
	}
//===========================================================
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