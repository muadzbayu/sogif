<?php
    class sound extends CI_CONTROLLER{
        
        function __construct(){
            parent::__construct();
            $this->load->model('soundModel');
        }

        function index(){
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $jumlahData = $this->soundModel->cari($cari)->num_rows();
                $data['sound'] = $this->soundModel->cari($cari)->result();
            }else{
                $jumlahData = $this->soundModel->jumlahData();
                $from = $this->uri->segment(3);
                $data['sound'] = $this->soundModel->data(8,$from);
            }
            $config['base_url'] = base_url().'sound/index/';
            $config['total_rows'] = $jumlahData;
            $config['per_page'] = 8;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = '>';
            $config['prev_link']        = '<';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $this->pagination->initialize($config);
            $this->load->view('headerView.php',$data);
            $this->load->view('soundView.php',$data);
            $this->load->view('footerView.php',$data);
        }
    }
?>