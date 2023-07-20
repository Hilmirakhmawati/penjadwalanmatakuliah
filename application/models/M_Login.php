<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Login extends CI_Model {

	public function cek_login()
	{
		if(empty($this->session->userdata('is_login')))
		{
			redirect('C_Login');
		}
	}

}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */