<?php
class M_faktur extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT *, faktur.tanggal_create as tanggal_faktur FROM `faktur` left join admin on admin.id_admin=faktur.id_admin LEFT JOIN sumber_dana on sumber_dana.id_sumber_dana=faktur.id_sumber_dana LEFT JOIN tipe_faktur on tipe_faktur.id_tipe_faktur=faktur.id_tipe_faktur order by faktur.tanggal_create DESC");
        return $query->result();
    }

    function belum_finalisasi()
    {
        $query=$this->db->query("SELECT * FROM `faktur` WHERE status_faktur='0'");
        return $query->result();
    }
    function finalisasi_faktur($id)
    {
        $date=date("Y-m-d H:i:s");
        $query=$this->db->query("UPDATE `faktur` SET `status_faktur`='1', tanggal_finalisasi='$date' WHERE id_faktur='$id'");
        $query1=$this->db->query("UPDATE `barang_masuk` SET `status_barang_masuk`='1' WHERE id_faktur='$id'");
        if($query==true&&$query1==true){
          return true;
        }else{
          return false;
        }

    }
    function lihat_perfaktur($id)
    {
        $query=$this->db->query("SELECT *, faktur.tanggal_create as tanggal_faktur  FROM `faktur`  left join admin on admin.id_admin=faktur.id_admin LEFT JOIN sumber_dana on sumber_dana.id_sumber_dana=faktur.id_sumber_dana LEFT JOIN tipe_faktur on tipe_faktur.id_tipe_faktur=faktur.id_tipe_faktur where id_faktur='$id'");
        return $query->result();
    }

    function jumlah_faktur()
    {
        $query=$this->db->query(" SELECT COUNT(id_faktur) as jumlah_faktur FROM `faktur`");
        return $query->result();
    }

    function tambah()
    {
      $tipe_faktur= $this->input->post('tipe_faktur');
      $no_faktur= $this->input->post('no_faktur');
      $bast= $this->input->post('bast');
      $mak= $this->input->post('mak');
      $pelaksana= $this->input->post('pelaksana');
      $nominal= $this->input->post('nominal');
      $tahun_anggaran= $this->input->post('tahun_anggaran');
      $sumber_dana= $this->input->post('sumber_dana');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }


      $data = array(
          'nomor_faktur'=>$no_faktur,
          'bast'=>$bast,
          'mak'=>$mak,
          'pelaksana'=>$pelaksana,
          'tahun_anggaran'=>$tahun_anggaran,
          'nominal'=>$nominal,
          'id_admin'=>$username,
          'id_tipe_faktur'=>$tipe_faktur,
          'id_sumber_dana'=>$sumber_dana


      );
      $cek=$this->db->insert('faktur',$data);
      return $cek;
    }

    function edit($id)
    {
      $tipe_faktur= $this->input->post('tipe_faktur');
      $no_faktur= $this->input->post('no_faktur');
      $bast= $this->input->post('bast');
      $mak= $this->input->post('mak');
      $pelaksana= $this->input->post('pelaksana');
      $nominal= $this->input->post('nominal');
      $tahun_anggaran= $this->input->post('tahun_anggaran');
      $sumber_dana= $this->input->post('sumber_dana');
      $username=null;
      $admin=$this->session->userdata('admin');
      $super_admin=$this->session->userdata('super_admin');
      if( empty($admin)==0 ){
        $username=$admin;

      }else if(empty($super_admin)==0){
        $username=$super_admin;
      }


      $data = array(
          'nomor_faktur'=>$no_faktur,
          'bast'=>$bast,
          'mak'=>$mak,
          'pelaksana'=>$pelaksana,
          'tahun_anggaran'=>$tahun_anggaran,
          'nominal'=>$nominal,
          'id_admin'=>$username,
          'id_tipe_faktur'=>$tipe_faktur,
          'id_sumber_dana'=>$sumber_dana

      );

      $this->db->where('id_faktur',$id);
      $cek=$this->db->update('faktur',$data);
      return $cek;

    }

     function proses_hapus_faktur($id)
    {
          $query=$this->db->where('id_faktur', $id);
          $cek=$this->db->delete('faktur');
          $qwerty=$this->db->where('id_faktur', $id);
          $cek1=$this->db->delete('barang_masuk');
          if ($cek==true && $cek1==true){
            return true;

          }else{
            return false;
          }
    }
}
