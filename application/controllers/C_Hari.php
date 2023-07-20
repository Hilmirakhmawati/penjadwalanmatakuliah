<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Hari extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Hari');
    }

    public function index()
    {
        $data['hari'] = $this->M_Hari->getHari();
        $this->load->view('template/header');
        $this->load->view('Halaman_hari', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_hari');
        $this->load->view('template/footer');
    }

    public function add()
    {
        $rules = $this->M_Hari->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('tambah_hari');
            $this->load->view('template/footer');
        } else {

            $this->M_Hari->insertHari();
            redirect('C_Hari');
        }
    }

    public function ubah($id)
    {
        $data['hari'] = $this->M_Hari->getDetailHari($id);
        $this->load->view('template/header');
        $this->load->view('edit_hari', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_Hari->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['tb_hari'] = $this->M_Hari->getDetailHari($id);
            $this->load->view('template/header');
            $this->load->view('edit_hari', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_Hari->editHari();
            redirect('C_Hari');
        }
    }

    public function delete($id)
    {
        $this->M_Hari->deleteHari($id);
        redirect('C_Hari');
    }
}
