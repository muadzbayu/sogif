<?php
    class daftarAnimasi extends CI_MODEL
    {
        function data($number,$offset){
            return $query = $this->db->get('dftr_animasi',$number,$offset)->result();
        }
        function jumlahData(){
            return $this->db->get('dftr_animasi')->num_rows();
        }
        function cari($data){
            $this->db->like('nama_animasi',$data,'both');
            $query = $this->db->get('dftr_animasi');
            return $query;
        }
    }
?>