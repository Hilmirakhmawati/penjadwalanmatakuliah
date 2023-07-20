<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kelas extends CI_Model
{

    public function getKelas()
    {
        $result = $this->db->get('tb_kelas');
        return $result;
    }


    public function insertKelas()
    {
        $insert = array(
            'id_kelas' => $this->input->post('id_kelas'),
            'kode_kelas' => $this->input->post('kode_kelas'),
            'nama_ruangan' => $this->input->post('nama_ruangan'),
        );
        $result = $this->db->insert('tb_kelas', $insert);
        return $result;
    }

    public function getDetailKelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $result = $this->db->get('tb_kelas');
        return $result;
    }
    public function editKelas()
    {
        $edit = array(
            'id_kelas' => $this->input->post('id_kelas'),
            'kode_kelas' => $this->input->post('kode_kelas'),
            'nama_ruangan' => $this->input->post('nama_ruangan'),
        );
        $this->db->where('id_kelas', $this->input->post('id_kelas'));
        $result = $this->db->update('tb_kelas', $edit);
        return $result;
    }


    public function deleteKelas($id)
    {
        $this->db->where('id_kelas', $id);
        $result = $this->db->delete('tb_kelas');
        return $result;
    }
    public function validation()
    {
        return [
            [
                'field' => 'kode_kelas',
                'label' => 'kode_kelas',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'nama_ruangan',
                'label' => 'nama_ruangan',
                'rules' => 'required'
            ],
        ];
    }
}

