<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
	 		$id;
			$admin=$this->session->userdata('admin');
			$super_admin=$this->session->userdata('super_admin');
				 if( empty($admin)==1 && empty($super_admin)==1){

					redirect("login/logout");
				 }


   }
	public function index()
	{
		$id;
		$admin=$this->session->userdata('admin');
			$super_admin=$this->session->userdata('super_admin');
		if (empty($admin)==0){
			$id=$admin;
		} else if(empty($super_admin)==0){
			$id=$super_admin;
		}
		$data['data_profil']= $this->M_admin->lihat_profil($id);
		$this->load->view('data_profil',$data);

	}

}
