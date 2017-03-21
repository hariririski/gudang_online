<?php
class M_barang extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT *, barang.tanggal_create as tanggal_masuk_barang FROM `barang` left JOIN admin on admin.id_admin=barang.id_admin LEFT JOIN tipe_barang on tipe_barang.id_tipe_barang=barang.id_tipe_barang LEFT JOIN satuan_barang on satuan_barang.id_satuan_barang=barang.id_satuan_barang");
        return $query->result();
    }
    function jumlah_barang()
    {
        $query=$this->db->query("SELECT COUNT(id_barang) as jumlah_barang from barang");
        return $query->result();
    }
    function cek_barang_dibarang_masuk($id_faktur,$id_barang)
    {
        $query=$this->db->query(" SELECT * from barang_masuk where barang_masuk.id_faktur='$id_faktur' and barang_masuk.id_barang='$id_barang'");
        return $query->result();
    }

    function cek_barang_dibarang_keluar($id_penerima_barang_keluar,$id_barang)
    {
        $query=$this->db->query(" SELECT * from barang_keluar where barang_keluar.id_penerima_barang_keluar='$id_penerima_barang_keluar' and barang_keluar.id_barang='$id_barang'");
        return $query->result();
    }
    function barang_masuk($id)
    {
        $query=$this->db->query("SELECT SUM(barang_masuk.jumlah_masuk) as barang_masuk from barang_masuk where barang_masuk.id_barang='$id' and barang_masuk.status_barang_masuk=1");
        return $query->result();
    }
    function barang_keluar($id)
    {
        $query=$this->db->query("SELECT SUM(barang_keluar.jumlah_keluar) as barang_keluar from barang_keluar where barang_keluar.id_barang='$id' and barang_keluar.status_barang_keluar=1");
        return $query->result();
    }

    function lihat_barang($id)
    {
         $query=$this->db->query("SELECT * FROM `barang` left JOIN admin on admin.id_admin=barang.id_admin LEFT JOIN tipe_barang on tipe_barang.id_tipe_barang=barang.id_tipe_barang LEFT JOIN satuan_barang on satuan_barang.id_satuan_barang=barang.id_satuan_barang where barang.id_barang='$id'");
        return $query->result();
      }

      function lihat_barang_faktur($id)
      {
           $query=$this->db->query("SELECT *,SUM(barang_masuk.jumlah_masuk) as total_barang, SUM(barang_masuk.harga_satuan) as total_harga_satuan, barang_masuk.tanggal_create as barang_masuk FROM `barang` left JOIN admin on admin.id_admin=barang.id_admin LEFT JOIN tipe_barang on tipe_barang.id_tipe_barang=barang.id_tipe_barang LEFT JOIN satuan_barang on satuan_barang.id_satuan_barang=barang.id_satuan_barang left join barang_masuk on barang_masuk.id_barang=barang.id_barang where barang_masuk.id_faktur='$id'");
          return $query->result();
        }

        function lihat_penerima_barang_keluar($id)
        {
             $query=$this->db->query("SELECT *, barang_keluar.tanggal_create as tangggal_dibuat FROM  barang INNER JOIN barang_keluar on barang_keluar.id_barang=barang.id_barang INNER join penerima_barang_keluar on  penerima_barang_keluar.id_penerima_barang_keluar=barang_keluar.id_penerima_barang_keluar left join tipe_barang on barang.id_tipe_barang=tipe_barang.id_tipe_barang left JOIN satuan_barang on satuan_barang.id_satuan_barang=barang.id_satuan_barang left join admin on admin.id_admin=barang_keluar.id_admin where barang_keluar.id_penerima_barang_keluar='$id'");
            return $query->result();
          }
        function data_barang_faktur($id)
        {
             $query=$this->db->query("SELECT *, barang_masuk.tanggal_create as barang_masuk FROM `barang` left JOIN admin on admin.id_admin=barang.id_admin LEFT JOIN tipe_barang on tipe_barang.id_tipe_barang=barang.id_tipe_barang LEFT JOIN satuan_barang on satuan_barang.id_satuan_barang=barang.id_satuan_barang left join barang_masuk on barang_masuk.id_barang=barang.id_barang where barang_masuk.id_faktur='$id'");
            return $query->result();
          }

    function tambah()
    {
      $kode_barang= $this->input->post('kode_barang');
      $nama_barang= $this->input->post('nama_barang');
      $merek= $this->input->post('merek');
      $volume= $this->input->post('volume');
      $satuan_barang= $this->input->post('satuan_barang');
      $tipe_barang= $this->input->post('tipe_barang');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }

      $data = array(
          'id_barang'=>$kode_barang,
          'nama_barang'=>$nama_barang,
          'merek'=>$merek,
          'volume'=>$volume,
          'id_satuan_barang'=>$satuan_barang,
          'id_tipe_barang'=>$tipe_barang,
          'id_admin'=>$username


      );
      $cek=$this->db->insert('barang',$data);
      return $cek;
    }


    function tambah_stok_barang($id)
    {
      $id_faktur=$_GET['id_faktur'];
      $jumlah= $this->input->post('jumlah');
      $satuan= $this->input->post('satuan');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }

      $data = array(
          'id_barang'=>$id,
          'id_admin'=>$username,
          'jumlah_masuk'=>$jumlah,
          'harga_satuan'=>$satuan,
          'id_faktur'=>$id_faktur




      );
      $cek=$this->db->insert('barang_masuk',$data);
      return $cek;
    }

    function ambil_stok_barang($id)
    {
      $id_penerima_barang_keluar=$_GET['id'];
      $jumlah= $this->input->post('jumlah');
      $satuan= $this->input->post('satuan');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }

      $data = array(
          'id_barang'=>$id,
          'id_admin'=>$username,
          'jumlah_keluar'=>$jumlah,
          'id_penerima_barang_keluar'=>$id_penerima_barang_keluar




      );
      $cek=$this->db->insert('barang_keluar',$data);
      return $cek;
    }

    function edit($id)
    {
      $kode_barang= $this->input->post('kode_barang');
      $nama_barang= $this->input->post('nama_barang');
      $merek= $this->input->post('merek');
      $volume= $this->input->post('volume');
      $satuan_barang= $this->input->post('satuan_barang');
      $tipe_barang= $this->input->post('tipe_barang');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }

      $data = array(
          'id_barang'=>$kode_barang,
          'nama_barang'=>$nama_barang,
          'merek'=>$merek,
          'volume'=>$volume,
          'id_satuan_barang'=>$satuan_barang,
          'id_tipe_barang'=>$tipe_barang,
          'id_admin'=>$username


      );


      $this->db->where('id_barang',$id);
      $cek=$this->db->update('barang',$data);
      return $cek;

    }

   function proses_hapus_barang($id)
    {
         $query=$this->db->where('id_barang', $id);
          $cek=$this->db->delete('barang');
            return $cek;
    }
}
