<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Dosen extends CI_Model
{

    public function getDosen()
    {
        $result = $this->db->get('tb_dosen');
        return $result;
    }


    public function insertDosen()
    {
        $insert = array(
            'id_dosen' => $this->input->post('id_dosen'),
            'nip' => $this->input->post('nip'),
            'nidn' => $this->input->post('nidn'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $result = $this->db->insert('tb_dosen', $insert);
        return $result;
    }

    public function getDetailDosen($id_dosen)
    {
        $this->db->where('id_dosen', $id_dosen);
        $result = $this->db->get('tb_dosen');
        return $result;
    }
    public function editDosen()
    {
        $edit = array(
            'id_dosen' => $this->input->post('id_dosen'),
            'nip' => $this->input->post('nip'),
            'nidn' => $this->input->post('nidn'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $this->db->where('id_dosen', $this->input->post('id_dosen'));
        $result = $this->db->update('tb_dosen', $edit);
        return $result;
    }


    public function deleteDosen($id)
    {
        $this->db->where('id_dosen', $id);
        $result = $this->db->delete('tb_dosen');
        return $result;
    }
    public function validation()
    {
        return [
            [
                'field' => 'nip',
                'label' => 'Nip',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'nidn',
                'label' => 'Nidn',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'nama_dosen',
                'label' => 'Nama Dosen',
                'rules' => 'required|max_length[50]'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'telepon',
                'label' => 'Telepon',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_length[32]'
            ],
        ];
    }
}

