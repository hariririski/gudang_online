<?php
class M_ambil_barang extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `penerima_barang_keluar` LEFT JOIN detail_penerima_barang ON detail_penerima_barang.id_detail_penerima_barang=penerima_barang_keluar.id_detail_penerima_barang LEFT JOIN penerima_barang ON penerima_barang.id_penerima_barang=detail_penerima_barang.id_penerima_barang LEFT JOIN jenis_penerima ON jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima LEFT JOIN admin on admin.id_admin=penerima_barang_keluar.id_admin LEFT JOIN data_detail_penerima_barang on data_detail_penerima_barang.id_data_detail_penerima_barang=detail_penerima_barang.id_data_detail_penerima_barang order by penerima_barang_keluar.tanggal_create DESC");
        return $query->result();
    }

    function data_belum_finalisasi()
    {
        $query=$this->db->query("SELECT * FROM `penerima_barang_keluar` left JOIN penerima_barang on penerima_barang.id_penerima_barang=penerima_barang_keluar.id_detail_penerima_barang WHERE status_penerima_barang_keluar='0'");
        return $query->result();
    }

    function penerima_barang_keluar($id)
    {
        $query=$this->db->query("SELECT  *, penerima_barang_keluar.tanggal_finalisasi as tanggal_finalisasi  FROM `penerima_barang_keluar` LEFT JOIN detail_penerima_barang ON detail_penerima_barang.id_detail_penerima_barang=penerima_barang_keluar.id_detail_penerima_barang LEFT JOIN penerima_barang ON penerima_barang.id_penerima_barang=detail_penerima_barang.id_penerima_barang LEFT JOIN jenis_penerima ON jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima LEFT JOIN admin on admin.id_admin=penerima_barang_keluar.id_admin left join data_detail_penerima_barang on data_detail_penerima_barang.id_data_detail_penerima_barang=detail_penerima_barang.id_data_detail_penerima_barang where penerima_barang_keluar.id_penerima_barang_keluar='$id'");
        return $query->result();
    }
    function pengambilan_perpenerima($id)
    {
        $query=$this->db->query("SELECT * FROM `penerima_barang_keluar` left  join admin on admin.id_admin=penerima_barang_keluar.id_admin  left JOIN detail_penerima_barang on  detail_penerima_barang.id_detail_penerima_barang=penerima_barang_keluar.id_detail_penerima_barang LEFT JOIN  penerima_barang on penerima_barang.id_penerima_barang=detail_penerima_barang.id_penerima_barang LEFT JOIN data_detail_penerima_barang on  data_detail_penerima_barang.id_data_detail_penerima_barang=detail_penerima_barang.id_data_detail_penerima_barang WHERE penerima_barang.id_penerima_barang='$id' and penerima_barang_keluar.status_penerima_barang_keluar='1' ORDER by penerima_barang_keluar.tanggal_finalisasi DESC");
        return $query->result();
    }

    function belum_finalisasi()
    {
        $query=$this->db->query("SELECT count(status_penerima_barang_keluar)as status FROM `penerima_barang_keluar` WHERE status_penerima_barang_keluar='0'");
        return $query->result();
    }
    function finalisasi($id)
    {
        $date=date("Y-m-d H:i:s");
        $query1=$this->db->query("UPDATE `penerima_barang_keluar` SET `status_penerima_barang_keluar`='1',	tanggal_finalisasi='$date' WHERE id_penerima_barang_keluar='$id'");
        $query=$this->db->query("UPDATE `barang_keluar` SET `status_barang_keluar`='1' WHERE id_penerima_barang_keluar='$id'");
        if($query==true && $query1==true){
            return true;
        }

    }



    function tambah()
    {
      $detail_penerima_barang= $this->input->post('detail_penerima_barang');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }
      $tanggal_finalisasi=date("Y-m-d H:i:s");
      $data = array(
          'id_detail_penerima_barang'=>$detail_penerima_barang,
          'id_admin'=>$username
          //



      );
      $cek=$this->db->insert('penerima_barang_keluar',$data);
      return $cek;
    }

    function edit($id)
    {
      $detail_penerima_barang= $this->input->post('detail_penerima_barang');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }
      $tanggal_finalisasi=date("Y-m-d H:i:s");
      $data = array(
          'id_detail_penerima_barang'=>$detail_penerima_barang,
          'id_admin'=>$username

      );

      $this->db->where('id_penerima_barang_keluar',$id);
      $cek=$this->db->update('penerima_barang_keluar',$data);
      return $cek;
    }

     function proses_hapus_pengambilan($id)
    {
          $query=$this->db->where('id_penerima_barang_keluar', $id);
          $cek=$this->db->delete('penerima_barang_keluar');
          $qwerty=$this->db->where('id_penerima_barang_keluar', $id);
          $cek1=$this->db->delete('barang_keluar');
          if ($cek==true && $cek1==true){
            return true;

          }else{
            return false;
          }
    }


}
