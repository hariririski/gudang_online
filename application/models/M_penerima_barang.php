<?php
class M_penerima_barang extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM penerima_barang LEFT JOIN detail_penerima_barang on detail_penerima_barang.id_penerima_barang=penerima_barang.id_penerima_barang LEFT JOIN data_detail_penerima_barang on data_detail_penerima_barang.id_data_detail_penerima_barang=detail_penerima_barang.id_data_detail_penerima_barang left JOIN jenis_penerima on jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima");
        return $query->result();
    }

    function data_pengambilan_barang()
    {
        $query=$this->db->query("SELECT  * FROM penerima_barang LEFT JOIN detail_penerima_barang on detail_penerima_barang.id_penerima_barang=penerima_barang.id_penerima_barang LEFT JOIN data_detail_penerima_barang on data_detail_penerima_barang.id_data_detail_penerima_barang=detail_penerima_barang.id_data_detail_penerima_barang left JOIN jenis_penerima on jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima");
        return $query->result();
    }

 function lihat_penerima($id)
    {
        $query=$this->db->query("SELECT * from penerima_barang  left join Jenis_penerima on jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima where penerima_barang.id_penerima_barang='$id'");
        return $query->result();
    }

    function select_penerima_barang($id)
       {
           $query=$this->db->query("SELECT * from penerima_barang  left join Jenis_penerima on jenis_penerima.id_jenis_penerima=penerima_barang.id_jenis_penerima where jenis_penerima.id_jenis_penerima='$id'");
           return $query->result();
       }

    function tambah()
    {

      $nama_penerima = $this->input->post('nama_penerima');
      $jenis_penerima = $this->input->post('jenis_penerima');
      $id_detail_penerima_barang = $this->input->post('detail_penerima_barang');
      $id_penerima_barang=$jenis_penerima.$id_detail_penerima_barang.date("His");

      $data = array(
          'nama_penerima'=>$nama_penerima,
          'id_jenis_penerima'=>$jenis_penerima,
          'id_penerima_barang'=>$id_penerima_barang




      );
      $cek=$this->db->insert('penerima_barang',$data);
      $data2 = array(

          'id_data_detail_penerima_barang'=>$id_detail_penerima_barang,
          'id_penerima_barang'=>$id_penerima_barang,




      );
      $cek=$this->db->insert('detail_penerima_barang',$data2);

      return $cek;
    }

    function edit($id)
    {
      $nama_penerima = $this->input->post('nama_penerima');
      $jenis_penerima = $this->input->post('jenis_penerima');

       $data = array(
           'nama_penerima'=>$nama_penerima,
           'id_jenis_penerima'=>$jenis_penerima

       );

      $this->db->where('id_penerima_barang',$id);
      $cek=$this->db->update('penerima_barang',$data);
      return $cek;

    }

    function proses_hapus_penerima($id)
    {
         $query=$this->db->where('id_penerima_barang', $id);
          $cek=$this->db->delete('penerima_barang');
            return $cek;
    }
}
