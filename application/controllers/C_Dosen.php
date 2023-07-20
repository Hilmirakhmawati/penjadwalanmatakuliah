<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Dosen');
    }

    public function index()
    {
        $data['dosen'] = $this->M_Dosen->getDosen();
        $this->load->view('template/header');
        $this->load->view('Halaman_dosen', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_dosen');
        $this->load->view('template/footer');
    }

    public function add()
    {
        $rules = $this->M_Dosen->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('tambah_dosen');
            $this->load->view('template/footer');
        } else {

            $this->M_Dosen->insertDosen();
            redirect('C_Dosen');
        }
    }

    public function ubah($id)
    {
        $data['dosen'] = $this->M_Dosen->getDetailDosen($id);
        $this->load->view('template/header');
        $this->load->view('edit_dosen', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_Dosen->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['tb_dosen'] = $this->M_Dosen->getDetailDosen($id);
            $this->load->view('template/header');
            $this->load->view('edit_dosen', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_Dosen->editDosen();
            redirect('C_Dosen');
        }
    }

    public function delete($id)
    {
        $this->M_Dosen->deleteDosen($id);
        redirect('C_Dosen');
    }
}

/* End of file C_Dosen.php and path \application\controllers\C_Dosen.php */