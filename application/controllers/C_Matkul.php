<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Matkul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Matkul');
    }

    public function index()
    {
        $data['matkul'] = $this->M_Matkul->getMatkul();
        $this->load->view('template/header');
        $this->load->view('Halaman_matkul', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_matkul');
        $this->load->view('template/footer');
    }

    public function add()
    {
        $rules = $this->M_Matkul->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('tambah_matkul');
            $this->load->view('template/footer');
        } else {

            $this->M_Matkul->insertMatkul();
            redirect('C_Matkul');
        }
    }

    public function ubah($id)
    {
        $data['matkul'] = $this->M_Matkul->getDetailMatkul($id);
        $this->load->view('template/header');
        $this->load->view('edit_matkul', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_Matkul->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['matkul'] = $this->M_Matkul->getDetailMatkul($id);
            $this->load->view('template/header');
            $this->load->view('edit_matkul', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_Matkul->editMatkul();
            redirect('C_Matkul');
        }
    }

    public function delete($id)
    {
        $this->M_Matkul->deleteMatkul($id);
        redirect('C_Matkul');
    }
}

/* End of file C_Dosen.php and path \application\controllers\C_Dosen.php */