<?php

class contact extends CI_CONTROLLER{
    function index(){
        $this->load->view('headerView.php');
        $this->load->view('contactView.php');
        $this->load->view('footerView.php');
    }
}

?>