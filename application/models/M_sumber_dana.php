<?php
class M_sumber_dana extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from sumber_dana");
        return $query->result();
    }

  function lihat_sumber_dana($id)
    {
        $query=$this->db->query("SELECT * from sumber_dana where id_sumber_dana='$id'");
        return $query->result();
    }

  function tambah()
    {
      $nama_sumber = $this->input->post('nama_sumber');


      $data = array(
          'nama_sumber'=>$nama_sumber


      );
      $cek=$this->db->insert('sumber_dana',$data);
      return $cek;
    }
     function edit($id)
    {
      $nama_sumber = $this->input->post('nama_sumber');
       $data = array(
           'nama_sumber'=>$nama_sumber
      
       );
      
      $this->db->where('id_sumber_dana',$id);
      $cek=$this->db->update('sumber_dana',$data);
      return $cek;

    }
    function proses_hapus_sumber($id)
    {
         $query=$this->db->where('id_sumber_dana', $id);
          $cek=$this->db->delete('sumber_dana');
            return $cek;
    }
}
