<?php
class M_jenis_penerima extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from jenis_penerima");
        return $query->result();
    }

     function lihat_jenis_penerima($id)
    {
        $query=$this->db->query("SELECT * from jenis_penerima where id_jenis_penerima='$id'");
        return $query->result();
    }
    

    function tambah()
    {
      $nama_jenis_penerima = $this->input->post('nama_jenis_penerima');

      $data = array(
          'nama_jenis_penerima'=>$nama_jenis_penerima


      );
      $cek=$this->db->insert('jenis_penerima',$data);
      return $cek;
    }

    function edit($id)
    {
      $nama_jenis_penerima = $this->input->post('nama_penerima');
       $data = array(
           'nama_jenis_penerima'=>$nama_jenis_penerima
      
       );
      
      $this->db->where('id_jenis_penerima',$id);
      $cek=$this->db->update('jenis_penerima',$data);
      return $cek;

    } 

    function proses_hapus_jenis($id)
    {
         $query=$this->db->where('id_jenis_penerima', $id);
          $cek=$this->db->delete('jenis_penerima');
            return $cek;
    }
}
