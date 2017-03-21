<?php
class M_ttd extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from ttd");
        return $query->result();
    }

    function lihat_ttd($id)
    {
        $query=$this->db->query("SELECT * from ttd where id_ttd='$id'");
        return $query->result();
    }

    function aktif()
    {
        $query=$this->db->query("SELECT *, sum(id_ttd) as jumlah from ttd where status='1'");
        return $query->result();
    }


   //  function reset($id)
   // {
   //   $update= date("Y-m-d H:i:s");
   //   $password=md5(123456);
   //     $query=$this->db->query("UPDATE `admin` SET `password`='$password',`tanggal_update`='$update'  where id_admin ='$id'");
   //     return $query;
   // }

    function tambah()
    {
      $nama = $this->input->post('nama');
      $nip = $this->input->post('nip');
      $jabatan =($this->input->post('jabatan'));

      $data = array(
          'nama'=>$nama,
          'nip'=>$nip,
          'jabatan'=>$jabatan

      );
      $cek=$this->db->insert('ttd',$data);
      return $cek;
    }

    function hidupkan($id)
   {
       $query1=$this->db->query("UPDATE `ttd` SET `status`='0'");
       $query=$this->db->query("UPDATE `ttd` SET `status`='1' where id_ttd ='$id'");
       return $query;
   }


    function edit($id)
    {
      $nama = $this->input->post('nama');
      $nip = $this->input->post('nip');
      $jabatan = $this->input->post('jabatan');
       $data = array(
          'nama'=>$nama,
          'nip'=>$nip,
          'jabatan'=>$jabatan

       );

      $this->db->where('id_ttd',$id);
      $cek=$this->db->update('ttd',$data);
      return $cek;

    }

    function proses_hapus_ttd($id)
    {
         $query=$this->db->where('id_ttd', $id);
          $cek=$this->db->delete('ttd');
            return $cek;
    }
}
