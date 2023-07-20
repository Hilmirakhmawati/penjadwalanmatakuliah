<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Rangewaktu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Rangewaktu');
    }

    public function index()
    {
        $data['waktu'] = $this->M_Rangewaktu->getRangewaktu();
        $this->load->view('template/header');
        $this->load->view('Halaman_rangewaktu', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_rangewaktu');
        $this->load->view('template/footer');
    }

    public function add()
    {
        $rules = $this->M_Rangewaktu->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('tambah_rangewaktu');
            $this->load->view('template/footer');
        } else {

            $this->M_Rangewaktu->insertWaktu();
            redirect('C_Rangewaktu');
        }
    }

    public function ubah($id)
    {
        $data['waktu'] = $this->M_Rangewaktu->getDetailWaktu($id);
        $this->load->view('template/header');
        $this->load->view('edit_rangewaktu', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $rules = $this->M_Rangewaktu->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['tb_rangewaktu'] = $this->M_Rangewaktu->getDetailWaktu($id);
            $this->load->view('template/header');
            $this->load->view('edit_waktu', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_Rangewaktu->editRangewaktu();
            redirect('C_Rangewaktu');
        }
    }

    public function delete($id)
    {
        $this->M_Rangewaktu->deleteRangewaktu($id);
        redirect('C_Rangewaktu');
    }
}

/* End of file C_Dosen.php and path \application\controllers\C_Dosen.php */