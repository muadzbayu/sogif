<?php
    class home extends CI_CONTROLLER{
        function __construct(){
            parent::__construct();
            $this->load->model('daftarAnimasi');
        }
        
        function index(){
            //Jumlah data animasi yang ditampilkan per page
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $jumlahData = $this->daftarAnimasi->cari($cari)->num_rows();
                $data['animasi'] = $this->daftarAnimasi->cari($cari)->result();
            }else{
                $jumlahData = $this->daftarAnimasi->jumlahData();//HASIL 16
                $data['animasi'] = $this->daftarAnimasi->data(8,$this->uri->segment(3));
            }
           
            $config['base_url'] = base_url().'home/index/';
            $config['total_rows'] = $jumlahData;
            $config['per_page'] = 8;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = '>';
            $config['prev_link']        = '<';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item" style="cursor:pointer"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active" style="cursor:pointer;"><span class="page-link" style="padding:6.5px 13.5px">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item" style="cursor:pointer"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item" style="cursor:pointer"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item" style="cursor:pointer"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item" style="cursor:pointer"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $this->pagination->initialize($config);
            $this->load->view('headerView.php');
            $this->load->view('homeView.php',$data);
            $this->load->view('footerView.php');
        }

        
    }

?>