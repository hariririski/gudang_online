<?php
class M_tipe_faktur extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from tipe_faktur");
        return $query->result();
    }

     function lihat_tipe_faktur($id)
    {
        $query=$this->db->query("SELECT * from tipe_faktur where id_tipe_faktur='$id'");
        return $query->result();
    }

    function tambah()
    {
      $nama_tipe_faktur = $this->input->post('nama_tipe_faktur');


      $data = array(
          'nama_faktur'=>$nama_tipe_faktur


      );
      $cek=$this->db->insert('tipe_faktur',$data);
      return $cek;
    }

    function edit($id)
    {
      $nama_tipe_faktur = $this->input->post('nama_faktur');
       $data = array(
           'nama_faktur'=>$nama_tipe_faktur
      
       );
      
      $this->db->where('id_tipe_faktur',$id);
      $cek=$this->db->update('tipe_faktur',$data);
      return $cek;

    }

    function proses_hapus_tifak($id)
    {
         $query=$this->db->where('id_tipe_faktur', $id);
          $cek=$this->db->delete('tipe_faktur');
            return $cek;
    }
}
