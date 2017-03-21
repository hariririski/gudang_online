<?php
class M_admin extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * from admin");
        return $query->result();
    }

     function lihat_profil($id)
    {
        $query=$this->db->query("SELECT * from admin where id_admin ='$id'");
        return $query->result();
    }

    function reset($id)
   {
     $update= date("Y-m-d H:i:s");
     $password=md5(123456);
       $query=$this->db->query("UPDATE `admin` SET `password`='$password',`tanggal_update`='$update'  where id_admin ='$id'");
       return $query;
   }

    function tambah()
    {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $level = $this->input->post('level');

      $data = array(
          'nama_lengkap'=>$nama_lengkap,
          'username'=>$username,
          'password'=>$password,
          'level'=>$level

      );
      $cek=$this->db->insert('admin',$data);
      return $cek;
    }

    function hidupkan($id)
   {
     $update= date("Y-m-d H:i:s");
       $query=$this->db->query("UPDATE `admin` SET `status`='1',`tanggal_update`='$update'  where id_admin ='$id'");
       return $query;
   }

   function matikan($id)
   {
     $update= date("Y-m-d H:i:s");
       $query=$this->db->query("UPDATE `admin` SET `status`='0',`tanggal_update`='$update'  where id_admin ='$id'");
       return $query;
   }

    function edit($id)
    {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $level = $this->input->post('level');

      $data = array(
          'nama_lengkap'=>$nama_lengkap,
          'username'=>$username,
          'password'=>$password,
          'level'=>$level
      
       );
      
      $this->db->where('id_admin',$id);
      $cek=$this->db->update('admin',$data);
      return $cek;

    }

     function edit_password($id)
    {
      $password_lama = $this->input->post('password_lama');
      $password_baru = $this->input->post('password_baru');
      $ulangi_password = md5($this->input->post('ulangi_password'));
      $level = $this->input->post('level');

      $data = array(
          'nama_lengkap'=>$nama_lengkap,
          'username'=>$username,
          'password'=>$password,
          'level'=>$level
      
       );
      
      $this->db->where('id_admin',$id);
      $cek=$this->db->update('admin',$data);
      return $cek;

    }
}
