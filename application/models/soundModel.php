<?php
    class soundModel extends CI_MODEL{
         function jumlahData(){
             return $this->db->get('dftr_sound')->num_rows();
         }
         function data($limit,$offset){
             //$limit : jumlah data yg ditampilkan per page
             //$offset : id data 
             return $this->db->get('dftr_sound',$limit,$offset)->result(); 
         }

         function cari($data){
            $this->db->like('nama_sound',$data,'both');
            $query = $this->db->get('dftr_sound');
            return $query;
         }
    }
?>