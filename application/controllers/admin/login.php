<?php
	//user : muadzbayu, pass : 490333 
	class login extends CI_CONTROLLER{
		function __construct(){
			parent::__construct();
			$this->load->model('adminModel');
		}

		function index(){
			$data['title'] = "Login Admin | Sogif";
			$this->load->view('admin/loginView.php',$data);
		}

		function cekLogin(){
			$user = $this->input->post('username');
			$pass = md5($this->input->post('password'));
			$data = $this->adminModel->cekLogin($user,$pass);
			if($data->num_rows() > 0){
				$this->load->view('admin/dashboard.php',$data);
			}else{
				echo "data tidak ditemukan";
			}
		}
	}
?>