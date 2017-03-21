<?php
class M_satuan_barang extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from satuan_barang");
        return $query->result();
    }

   function lihat_persatuan($id)
    {
        $query=$this->db->query("SELECT * from satuan_barang where id_satuan_barang='$id'");
        return $query->result();
    }
    
    function tambah()
    {
      $satuan_barang = $this->input->post('satuan_barang');


      $data = array(
          'nama_satuan'=>$satuan_barang


      );
      $cek=$this->db->insert('satuan_barang',$data);
      return $cek;
    }

    function edit($id)
    {
      $nama_satuan = $this->input->post('nama_satuan_barang');
       $data = array(
           'nama_satuan'=>$nama_satuan
      
       );
      
      $this->db->where('id_satuan_barang',$id);
      $cek=$this->db->update('satuan_barang',$data);
      return $cek;

    }
    
     function proses_hapus_satuan($id)
    {
         $query=$this->db->where('id_satuan_barang', $id);
          $cek=$this->db->delete('satuan_barang');
            return $cek;
    }
}
