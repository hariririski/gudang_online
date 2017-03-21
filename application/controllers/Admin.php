<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
			 $this->load->model('M_admin');
			 $admin=$this->session->userdata('admin');
			 $super_admin=$this->session->userdata('super_admin');
				 if(empty($super_admin)==1){

					redirect("login/logout");
				 }
			 }

	public function index()
	{
		$data['lihat'] = $this->M_admin->lihat();
		$this->load->view('tambah/tambah_admin',$data);
	}

	public function proses_tambah_admin()
	{

		$cek= $this->M_admin->tambah();

		if($cek){
			$data="document.getElementById('berhasil').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}else{
			$data="document.getElementById('gagal').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}

	}

	public function reset()
	{
		$id=$_GET['id'];
		$cek= $this->M_admin->reset($id);

		if($cek){
			$data="document.getElementById('berhasil').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}else{
			$data="document.getElementById('gagal').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}

	}

	public function hidupkan()
	{
		$id=$_GET['id'];
		$cek= $this->M_admin->hidupkan($id);

		if($cek){
			$data="document.getElementById('berhasil_hidup').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}else{
			$data="document.getElementById('gagal_hidup').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}

	}

	public function matikan()
	{
		$id=$_GET['id'];
		$cek= $this->M_admin->matikan($id);

		if($cek){
			$data="document.getElementById('berhasil_matikan').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}else{
			$data="document.getElementById('gagal_matikan').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('admin');
		}

	}
	public function proses_edit_profil()
	{     
		$id=$_GET ['id'];
		$cek= $this->M_admin->edit($id);
		
		if($cek){
			$data="document.getElementById('berhasil_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('data_profil');
		}else{
			$data="document.getElementById('gagal_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('data_profil');
		}

	}

	public function proses_edit_password()
	{     
		$id_admin;
		$password_database=null;
		$id=$_GET ['id'];
		 $admin=$this->session->userdata('admin');
			 $super_admin=$this->session->userdata('super_admin');
				 if( empty($admin)==1 ){

					$id_admin=$admin;
				 }else {
				 	$id_admin=$super_admin;
				 }
			 
		$cek['data']= $this->M_admin->lihat_profil($id_admin);
		foreach ($cek['data'] as $nilai) {
			echo $password_database=$nilai->password;
		}
		
	  $password_lama = md5($this->input->post('password_lama'));
      $password_baru = $this->input->post('password_baru');
      $ulangi_password = md5($this->input->post('ulangi_password'));
      if ($password_database==$password_lama) {
      	echo"sama";
      }else {
      	echo"tidak sama";
      }
		
		// if($cek){
		// 	$data="document.getElementById('berhasil_edit').click();";
		// 	$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
		// 	redirect('data_profil');
		// }else{
		// 	$data="document.getElementById('gagal_edit').click();";
		// 	$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
		// 	redirect('data_profil');
		// }

	}


}
