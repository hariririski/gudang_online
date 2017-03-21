<?php
class M_detail_penerima_barang extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from data_detail_penerima_barang");
        return $query->result();
    }
    function select_penerima_barang($id)
    {
        $query=$this->db->query("SELECT data_detail_penerima_barang.nama_data_detail_penerima_barang, detail_penerima_barang.id_detail_penerima_barang FROM `data_detail_penerima_barang` left join detail_penerima_barang on detail_penerima_barang.id_data_detail_penerima_barang=data_detail_penerima_barang.id_data_detail_penerima_barang WHERE detail_penerima_barang.id_penerima_barang='$id'");
        return $query->result();
    }

     function lihat_bidang($id)
    {
        $query=$this->db->query("SELECT * from data_detail_penerima_barang where id_data_detail_penerima_barang='$id'");
        return $query->result();
    }

 // function lihat_penerima($id)
 //    {
 //        $query=$this->db->query("SELECT * from penerima_barang  left join Jenis_penerima on jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima where penerima_barang.id_penerima_barang='$id'");
 //        return $query->result();
 //    }
 //
 //    function select_penerima_barang($id)
 //       {
 //           $query=$this->db->query("SELECT * from penerima_barang  left join Jenis_penerima on jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima where jenis_penerima.id_jenis_penerima='$id'");
 //           return $query->result();
 //       }
 //
    function tambah()
    {
      $nama_data_detail_penerima = $this->input->post('nama_data_detail_penerima');



      $data = array(
          'nama_data_detail_penerima_barang'=>$nama_data_detail_penerima



      );
      $cek=$this->db->insert('data_detail_penerima_barang',$data);
      return $cek;
    }
 
    function edit($id)
    {
      $nama_data_detail_penerima = $this->input->post('nama_bidang_penerima');
      
      $data = array(
           'nama_data_detail_penerima_barang'=>$nama_data_detail_penerima
      
       );
      
      $this->db->where('id_data_detail_penerima_barang',$id);
      $cek=$this->db->update('data_detail_penerima_barang',$data);
      return $cek;

    }
    function proses_hapus_bidang($id)
    {
         $query=$this->db->where('id_data_detail_penerima_barang', $id);
          $cek=$this->db->delete('data_detail_penerima_barang');
            return $cek;
    }
}
