<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Cetakjadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('template/footer');
		
	}

}

/* End of file C_Cetakjadwal.php */
/* Location: ./application/controllers/C_Cetakjadwal.php */