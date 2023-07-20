<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Penjadwalan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard_utama');
        $this->load->view('template/footer');
    }
    
}


/* End of file C_Penjadwalan.php and path \application\controllers\C_Penjadwalan.php */