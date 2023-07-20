<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kelas');
    }

    public function index()
    {
        $data['kelas'] = $this->M_Kelas->getKelas();
        $this->load->view('template/header');
        $this->load->view('Halaman_kelas', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_kelas');
        $this->load->view('template/footer');
       

    }

    public function add()
    {
        $rules = $this->M_Kelas->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tambah_kelas');
        } else {

            $this->M_Kelas->insertKelas();
            redirect('C_Kelas');
        }
    }

    public function ubah($id)
    {
        $data['kelas'] = $this->M_Kelas->getDetailKelas($id);
        $this->load->view('template/header');
        $this->load->view('edit_kelas', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_Kelas->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['kelas'] = $this->M_Kelas->getDetailKelas($id);
            $this->load->view('template/header');
            $this->load->view('edit_kelas', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_Kelas->editKelas();
            redirect('C_Kelas');
        }
    }

    public function delete($id)
    {
        $this->M_Kelas->deleteKelas($id);
        redirect('C_Kelas');
    }
}
    
  

/* End of file C_Kelas.php and path \application\controllers\C_Kelas.php */