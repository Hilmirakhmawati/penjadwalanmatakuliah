<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Prodi');
    }

    public function index()
    {
        $data['prodi'] = $this->M_Prodi->getProdi();
        $this->load->view('template/header');
        $this->load->view('Halaman_prodi', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_prodi');
        $this->load->view('template/footer');
    }

    public function add()
    {
        $rules = $this->M_Prodi->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('tambah_prodi');
            $this->load->view('template/footer');
        } else {

            $this->M_Prodi->insertProdi();
            redirect('C_Prodi');
        }
    }

    public function ubah($id)
    {
        $data['prodi'] = $this->M_Prodi->getDetailProdi($id);
        $this->load->view('template/header');
        $this->load->view('edit_prodi', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_Prodi->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['tb_prodi'] = $this->M_Prodi->getDetailProdi($id);
            $this->load->view('template/header');
            $this->load->view('edit_prodi', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_Prodi->editProdi();
            redirect('C_Prodi');
        }
    }

    public function delete($id)
    {
        $this->M_Prodi->deleteProdi($id);
        redirect('C_Prodi');
    }
}

/* End of file C_Dosen.php and path \application\controllers\C_Dosen.php */