<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_penerima extends CI_Controller {

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
			 $this->load->model('M_jenis_penerima');
			 $admin=$this->session->userdata('admin');
			 $super_admin=$this->session->userdata('super_admin');
					if( empty($admin)==1 && empty($super_admin)==1){

					 redirect("login/logout");
					}
   }
	public function index()
	{
		$data['lihat'] = $this->M_jenis_penerima->lihat();
		$this->load->view('tambah/tambah_jenis_penerima',$data);
	}

	public function tambah()
	{
		$cek= $this->M_jenis_penerima->tambah();

		if($cek){
			$data="document.getElementById('berhasil').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('Jenis_penerima');
		}else{
			$data="document.getElementById('gagal').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('Jenis_penerima');
		}

	}
	public function edit_jenis_penerima()
	{
		 $id=$_GET ['id'];
		$data['lihat'] = $this->M_jenis_penerima->lihat_jenis_penerima($id);
		$this->load->view('edit/edit_jenis_penerima',$data);
	}

	public function proses_edit_jenis()
	{     
		$id=$_GET ['id'];
		$cek= $this->M_jenis_penerima->edit($id);
		
		if($cek){
			$data="document.getElementById('berhasil_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('Jenis_penerima');
		}else{
			$data="document.getElementById('gagal_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('Jenis_penerima');
		}

	}

	public function proses_hapus_jenis($id)
	{     
		$id=$_GET ['id'];
		$cek= $this->M_jenis_penerima->proses_hapus_jenis($id);
		
		if($cek){
			$data="document.getElementById('berhasil_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('Jenis_penerima');
		}else{
			$data="document.getElementById('gagal_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('Jenis_penerima');
		}

	}

}
