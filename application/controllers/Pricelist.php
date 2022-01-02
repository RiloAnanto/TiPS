<?php

class Pricelist extends CI_Controller {
    // ini gak dipake karena database udah di aktifin di autoload.php -> library
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();        
    // }

    // kalau mau dipake di satu class buat fungsi dibawah ini
    public function __construct(){
        parent::__construct();
        $this->load->model('Pricelist_model');
    }

    public function index(){

       

        $data['judul_head'] = 'Daftar Harga';

        $data['pricelist'] = $this->Pricelist_model->getAllPricelist();

        $this->load->view('templates/header', $data);
        $this->load->view('pricelist/index', $data);
        $this->load->view('templates/footer');
        
    }
}

?>