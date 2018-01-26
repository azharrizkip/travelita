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
		$data['cek'] = $this->cek_session();
		$this->load->view('home');
	}
	public function login(){
		$this->cek_sessiontrue();
		$this->load->view('login');
	}
	public function daftar(){
		$this->cek_sessiontrue();
		$this->load->view('daftar');
	}
	public function view(){
		$this->cek_sessiontrue();
		$this->load->view('view');
	}
	public function home(){
		$this->cek_sessionfalse();
		$this->load->view('berhasil');
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

	public function signin(){
		$username =$this->input->post('username');
		$password =$this->input->post('password');
		$where = array('username' => $username, 
					    'password' => md5($password)
					);

		$cek_user = $this->model->getUserByUsername($where,'user');

		if($cek_user==true){
			$dataarray=array(
				"name"=>$username,
				"status"=>"login"
			);
			$this->session->set_userdata($dataarray);
			redirect(base_url().'Travelitacon/home');
		}else
		{ 
			echo '<script type="text/javascript">';
        	echo 'alert("Username Atau Password Salah!")';
        	echo '</script>';
		}
	}
	public function cek_sessiontrue(){
    	$sesion = $this->session->status;
    	if(!empty($sesion)){ 
    	  	redirect(base_url().'Travelitacon/home');
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