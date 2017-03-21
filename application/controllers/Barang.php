<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

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
 			$this->load->library('stok');
 			$this->load->database();
 			$this->load->model('M_satuan_barang');
 			$this->load->model('M_tipe_barang');
 			$this->load->model('M_barang');
 			$this->load->model('M_faktur');


 			$admin=$this->session->userdata('admin');
 			$super_admin=$this->session->userdata('super_admin');
 				 if( empty($admin)==1 && empty($super_admin)==1){

 					redirect("login/logout");
 				 }

   }
	public function index()
	{
		//$this->load->library('Stok');
		$data['satuan_barang'] = $this->M_satuan_barang->lihat();
		$data['tipe_barang'] = $this->M_tipe_barang->lihat();
		$data['data_barang'] = $this->M_barang->lihat();
		$this->load->view('tambah/tambah_barang',$data);
	}

	public function data_barang_persedian()
	{
		$data['satuan_barang'] = $this->M_satuan_barang->lihat();
		$data['tipe_barang'] = $this->M_tipe_barang->lihat();
		$data['data_barang'] = $this->M_barang->lihat();
		$this->load->view('data_barang_persediaan',$data);
	}

	public function tambah_stok_barang()
	{

		$id=$_GET['id'];
		$data['data_faktur'] = $this->M_faktur->lihat_perfaktur($id);
		$data['data_barang_faktur'] = $this->M_barang->data_barang_faktur($id);
		$data['auto_barang_stok'] = $this->M_barang->lihat();
		$this->load->view('tambah/tambah_stok_barang',$data);
	}

	public function tambah_stok_barang2()
	{

		$id_faktur=$_GET['id_faktur'];
		$id= $this->input->post('id');
		$kode_barang;
		$data['data_barang'] = $this->M_barang->lihat_barang($id);

			foreach($data['data_barang'] as $data3){
				$kode_barang=$data3->id_barang;
			}
		if(empty($kode_barang)){
			$data2="document.getElementById('barang').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_stok_barang?id=$id_faktur");
		}else{
			$cek;
			$data['cek']= $this->M_barang->cek_barang_dibarang_masuk($id_faktur,$id);

			foreach($data['cek'] as $nilai){
				$cek=$nilai->id_barang;
			}

				if(empty($nilai)){
					$this->load->view('tambah/tambah_barang2',$data);

				}else{
					$data2="document.getElementById('barang_sudah_ada').click();";
					$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
					redirect("tambah_stok_barang?id=$id_faktur");

				}
		}

	}
	public function proses_tambah_barang()
	{
		$cek= $this->M_barang->tambah();

		if($cek){
			$data="document.getElementById('berhasil').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('tambah_barang');
		}else{
			$data="document.getElementById('gagal').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('tambah_barang');
		}
	}

	public function proses_tambah_stok_barang()
	{
		$id=$_GET['id'];
		$id_faktur=$_GET['id_faktur'];
		$cek= $this->M_barang->tambah_stok_barang($id);

		if($cek){
			$data2="document.getElementById('berhasil').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_stok_barang?id=$id_faktur");
		}else{
			$data2="document.getElementById('gagal').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data2.'"');
			redirect("tambah_stok_barang?id=$id_faktur");
		}
	}



	public function edit_data_barang()
	{

		$id=$_GET ['id'];
		$data['lihat'] = $this->M_barang->lihat_barang($id);
		$data['satuan_barang'] = $this->M_satuan_barang->lihat();
		$data['tipe_barang'] = $this->M_tipe_barang->lihat();
		$this->load->view('edit/edit_data_barang',$data);
	}

	public function edit_data_barang_faktur()
	{

		$id=$_GET ['id'];
		$data['lihat'] = $this->M_barang->lihat_barang($id);
		$data['satuan_barang'] = $this->M_satuan_barang->lihat();
		$data['tipe_barang'] = $this->M_tipe_barang->lihat();
		$this->load->view('edit/edit_data_barang_faktur',$data);
	}

	public function proses_edit_barang()
	{
		$id=$_GET ['id'];
		$cek= $this->M_barang->edit($id);

		if($cek){
			$data="document.getElementById('berhasil_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('tambah_barang');
		}else{
			$data="document.getElementById('gagal_edit').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('tambah_barang');
		}

	}

public function proses_hapus_barang($id)
	{
		echo $id=$_GET ['id'];
		$cek= $this->M_barang->proses_hapus_barang($id);

		if($cek){
			$data="document.getElementById('berhasil_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('tambah_barang');
		}else{
			$data="document.getElementById('gagal_hapus').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('tambah_barang');
		}

	}

	public function search()
		{
			// tangkap variabel keyword dari URL
			$keyword = $this->uri->segment(3);

			// cari di database
			$data = $this->db->from('barang')->like('id_barang',$keyword)->get();
			//print_r($data);
			// format keluaran di dalam array


			foreach($data->result() as $row)
			{
				$arr['query'] = $keyword;

				$arr['suggestions'][] = array(
					'value'	=>$row->id_barang,
					'nim'	=>$row->nama_barang,
					'jurusan'	=>$row->nama_barang


				);
			}
			// minimal PHP 5.2
			echo json_encode($arr);
		}



}
