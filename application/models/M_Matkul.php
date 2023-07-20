<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Matkul extends CI_Model
{

    public function getMatkul()
    {
        $result = $this->db->get('tb_matkul');
        return $result;
    }


    public function insertMatkul()
    {
        $insert = array(
            'id_matkul' => $this->input->post('id_matkul'),
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
        );
        $result = $this->db->insert('tb_matkul', $insert);
        return $result;
    }

    public function getDetailMatkul($id_matkul)
    {
        $this->db->where('id_matkul', $id_matkul);
        $result = $this->db->get('tb_matkul');
        return $result;
    }
    public function editMatkul()
    {
        $edit = array(
            'id_matkul' => $this->input->post('id_matkul'),
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
        );
        $this->db->where('id_matkul', $this->input->post('id_matkul'));
        $result = $this->db->update('tb_matkul', $edit);
        return $result;
    }


    public function deleteMatkul($id)
    {
        $this->db->where('id_matkul', $id);
        $result = $this->db->delete('tb_matkul');
        return $result;
    }
    public function validation()
    {
        return [
            [
                'field' => 'kode_matkul',
                'label' => 'kode_matkul',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'nama_matkul',
                'label' => 'nama_matkul',
                'rules' => 'required|max_length[60]'
            ],
        ];
    }
}

