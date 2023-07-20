<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
	}

	public function index()
    {
        $this->load->view('login');
    }

    public function set_login()
    {
        $username= $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->get_where('tb_user',array('username'=>$username));
        $user = $query->row();
        $level = $user->level;
            if($password == $user->password) {
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('is_login',TRUE);

                if($level == 'admin'){
                    redirect('C_Dosen');
                }
                elseif($level == 'dosen'){
                    redirect('C_Kelas');
                }
                else{
                    redirect('C_Login');
                }
            } else {
                $this->session->set_flashdata('error','Username / Password Tidak Sesuai');
                redirect('C_Login');
            }
    }

    public function logout()
    {                                
        session_destroy();
        redirect('C_Login');
    }

}

/* End of file C_Login.php */
/* Location: ./application/controllers/C_Login.php */