<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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


   function __construct() {
       parent::__construct();
			 $this->load->helper('url');
			 $this->load->library('session');
			 $this->load->database();
			 $this->load->model('M_login');
			 $admin=$this->session->userdata('admin');
 			 $super_admin=$this->session->userdata('super_admin');

   }

	public function index()
	{
		$admin=$this->session->userdata('admin');
		$super_admin=$this->session->userdata('super_admin');



		if( empty($admin)==0 || empty($super_admin)==0){

		 redirect("home");
		}
		$this->load->view('login');
	}

	public function logout() {
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('super_admin');
		$this->session->sess_destroy();
		redirect('login');
	}

	public function proses_login() {

	$cek=$this->M_login->login();
	if($cek==true){
	$level= $cek[0]->level;
	$username= $cek[0]->id_admin;
	$status= $cek[0]->status;
	if($status==1){
			if($level==1){
					session_save_path();
					$this->session->set_userdata('admin',$username);

					redirect('home');
			}else if($level==2){
					session_save_path();
					$this->session->set_userdata('super_admin',$username);
					redirect('home');
			}else{

				$data="document.getElementById('exampleTopFullWidth').click();";
				$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
				redirect('login');
			}
}else{
	$data="document.getElementById('exampleTopFullWidth').click();";
	$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
	redirect('login');
}
}else{
	$data="document.getElementById('exampleTopFullWidth').click();";
	$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
	redirect('login');
}
	/*
		if(isset($cek)){
			$username = $this->input->post('username');
			echo $cek['level'];
			$this->session->set_userdata('admin',$username);
		redirect('home');
		}else{
			$this->session->set_flashdata('login', '
					<div class="alert alert-danger alert-dismissable fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>OPPSS!</strong> Maaf Username Atau Password Anda Salah!.
						</div>');

		}*/
}

}
