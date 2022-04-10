<?php
    class adminModel extends CI_MODEL{
        function cekLogin($user, $pass){
            $this->db->where(array('username'=>$user,
                                    'password'=>$pass));
            return $this->db->get('login_admin');
        }
    }
?>