<?php
class M_tipe_barang extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from tipe_barang");
        return $query->result();
    }

    function lihat_pertipe($id)
    {
        $query=$this->db->query("SELECT * from tipe_barang where id_tipe_barang='$id'");
        return $query->result();
    }

    function tambah()
    {
      $nama_tipe_barang = $this->input->post('nama_tipe_barang');


      $data = array(
          'nama_tipe'=>$nama_tipe_barang


      );
      $cek=$this->db->insert('tipe_barang',$data);
      return $cek;
    }

    function edit($id)
    {
      $nama_tipe = $this->input->post('nama_tipe_barang');
       $data = array(
           'nama_tipe'=>$nama_tipe
      
       );
      
      $this->db->where('id_tipe_barang',$id);
      $cek=$this->db->update('tipe_barang',$data);
      return $cek;

    }

    function proses_hapus_tipe($id)
    {
         $query=$this->db->where('id_tipe_barang', $id);
          $cek=$this->db->delete('tipe_barang');
            return $cek;
    }
}
