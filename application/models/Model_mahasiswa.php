<?php
Class Model_mahasiswa extends CI_Model
{
  function Jum_mahasiswa_perjurusan()
    {
        $this->db->group_by('jurusan');
        $this->db->select('jurusan');
        $this->db->select("count(*) as total");
        return $this->db->from('mahasiswa')
          ->get()
          ->result();
    }

   
}
?>