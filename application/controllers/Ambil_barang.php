<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambil_barang extends CI_Controller {

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
			 $this->load->model('M_ambil_barang');
			 $this->load->model('M_penerima_barang');
 			 $this->load->library('stok');
			 $this->load->model('M_barang');
			 $this->load->model('M_jenis_penerima');
			 $admin=$this->session->userdata('admin');
			 $super_admin=$this->session->userdata('super_admin');
			 if( empty($admin)==1 && empty($super_admin)==1){

				 redirect("login/logout");
				}
			 }

	public function index()
	{
		$data['auto_barang_stok'] = $this->M_barang->lihat();
		$data['select_jenis_penerima'] = $this->M_jenis_penerima->lihat();
		$data['data_pengambilan_barang'] = $this->M_ambil_barang->lihat();
		$data['belum_finalisasi'] = $this->M_ambil_barang->belum_finalisasi();
		$this->load->view('tambah/tambah_ambil_barang',$data);
	}

	public function ambil_stok_barang()
	{

		$id_penerima_barang_keluar=$_GET['id'];
		$id= $this->input->post('id');
		$kode_barang;
		$data['data_barang'] = $this->M_barang->lihat_barang($id);
			foreach($data['data_barang'] as $data3){
				$kode_barang=$data3->id_barang;
			}
		if(empty($kode_barang)){
			$data2="document.getElementById('barang').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_pengambilan_barang?id=$id_penerima_barang_keluar");
		}else{
			$cek;
			$data['cek']= $this->M_barang->cek_barang_dibarang_keluar($id_penerima_barang_keluar,$id);

			foreach($data['cek'] as $nilai){
				$cek=$nilai->id_barang;
			}

				if(empty($nilai)){
					$CI =& get_instance();
					$CI->load->library('stok');
					$data['stok']=$CI->stok->stok_barang($id);
					$this->load->view('tambah/ambil_barang2',$data);


				}else{
					$data2="document.getElementById('barang_sudah_ada').click();";
					$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
					redirect("tambah_pengambilan_barang?id=$id_penerima_barang_keluar");

				}




		}

	}

	function jenis_penerima($id) {
		$id=rawurldecode($id);
		$this->load->model('M_penerima_barang');
		$data=$this->M_penerima_barang->select_penerima_barang($id);
		$data1="";
		$data1.='<option value="">Silahkan Pilih</option>';
		foreach($data as $data2){
		$data1.='<option value="'.$data2->id_penerima_barang.'">'.$data2->nama_penerima.'</option>';
		}
		echo $data1;
	}

	function penerima_barang($id) {
		$id=rawurldecode($id);
		$this->load->model('M_detail_penerima_barang');
		$data=$this->M_detail_penerima_barang->select_penerima_barang($id);
		$data1="";
		$data1.='<option value="">Silahkan Pilih</option>';
		foreach($data as $data2){
		$data1.='<option value="'.$data2->id_detail_penerima_barang.'">'.$data2->nama_data_detail_penerima_barang.'</option>';
		}
		echo $data1;
	}

	public function data_pengambilan_barang()
	{

		$data['lihat'] = $this->M_penerima_barang->data_pengambilan_barang();
		$this->load->view('lihat/data_pengambilan_barang',$data);
	}
	public function pengambilan_perpenerima()
	{

		$id=$_GET['id'];
		$data['lihat'] = $this->M_ambil_barang->pengambilan_perpenerima($id);
		$this->load->view('lihat/data_pengambilan_perpenerima',$data);
	}

	public function tambah_pengambilan_barang()
	{
		$id=$_GET['id'];
		$data['auto_barang_stok'] = $this->M_barang->lihat();
		$data['lihat'] = $this->M_penerima_barang->lihat();
		$data['penerima_barang_keluar'] = $this->M_ambil_barang->penerima_barang_keluar($id);
		$data['data_barang_keluar'] = $this->M_barang->lihat_penerima_barang_keluar($id);
		$this->load->view('tambah/tambah_pengambilan_barang',$data);
	}

	// public function proses_tambah_admin()
	// {

	// 	$cek= $this->M_admin->tambah();

	// 	if($cek){
	// 		$data="document.getElementById('berhasil').click();";
	// 		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
	// 		redirect('admin');
	// 	}else{
	// 		$data="document.getElementById('gagal').click();";
	// 		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
	// 		redirect('admin');
	// 	}

	// }

	public function proses_ambil_stok_barang()
	{
		$id=$_GET['id'];
		$id_barang=$_GET['id_barang'];
		$cek= $this->M_barang->ambil_stok_barang($id_barang);

		if($cek){
			$data2="document.getElementById('berhasil').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_pengambilan_barang?id=$id");
		}else{
			$data2="document.getElementById('gagal').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_pengambilan_barang?id=$id");
		}
	}

	public function tambah_penerima_barang_keluar(){
		$hasil_cek;
		$data['cek'] = $this->M_ambil_barang->belum_finalisasi();
		foreach ($data['cek'] as $cek) {
			 $hasil_cek=$cek->status;

		}
		if($hasil_cek==0){
			$cek= $this->M_ambil_barang->tambah();

			if($cek){
				$data="document.getElementById('berhasil').click();";
				$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
				redirect('ambil_barang');
			}else{
				$data="document.getElementById('gagal').click();";
				$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
				redirect('ambil_barang');
			}
		}else {
			$data="document.getElementById('belum_finalisasi').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('ambil_barang');
		}
	}
	public function finalisasi_pengambilan_barang(){
		$id=$_GET['id'];
		$cek= $this->M_ambil_barang->finalisasi($id);

		if($cek){
			$data="document.getElementById('berhasil_finalisasi').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_pengambilan_barang?id=$id");
		}else{
			$data="document.getElementById('gagal_finalisasi').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_pengambilan_barang?id=$id");
		}

	}

	public function edit_pengambilan_barang()
	{

		$id=$_GET ['id'];
		//$data['lihat'] = $this->M_ambil_barang->lihat_pengambilan($id);
		//$data['detail_penerima_barang'] = $this->M_detail_penerima_barang->lihat();
		$data['penerima_barang_keluar'] = $this->M_ambil_barang->penerima_barang_keluar($id);
		$data['jenis_penerima'] = $this->M_jenis_penerima->lihat();
		$this->load->view('edit/edit_pengambilan_barang',$data);
	}

	public function proses_edit_pengambilan_barang()
	{
		$id=$_GET ['id'];
		$cek= $this->M_penerima_barang->edit($id);

		if($cek){
			$data="document.getElementById('berhasil_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_pengambilan_barang?id=$id");
		}else{
			$data="document.getElementById('gagal_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect("tambah_pengambilan_barang?id=$id");
		}

	}

	public function proses_hapus_pengambilan($id)
	{
		echo $id=$_GET ['id'];
		$cek= $this->M_ambil_barang->proses_hapus_pengambilan($id);

		if($cek){
			$data="document.getElementById('berhasil_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('ambil_barang');
		}else{
			$data="document.getElementById('gagal_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('ambil_barang');
		}

	}
}
