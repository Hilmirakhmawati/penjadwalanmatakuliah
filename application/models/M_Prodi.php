<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Prodi extends CI_Model
{

    public function getProdi()
    {
        $result = $this->db->get('tb_prodi');
        return $result;
    }


    public function insertProdi()
    {
        $insert = array(
            'id_prodi' => $this->input->post('id_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
        );
        $result = $this->db->insert('tb_prodi', $insert);
        return $result;
    }

    public function getDetailProdi($id_prodi)
    {
        $this->db->where('id_prodi', $id_prodi);
        $result = $this->db->get('tb_prodi');
        return $result;
    }
    public function editProdi()
    {
        $edit = array(
            'id_prodi' => $this->input->post('id_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
        );
        $this->db->where('id_prodi', $this->input->post('id_prodi'));
        $result = $this->db->update('tb_prodi', $edit);
        return $result;
    }


    public function deleteProdi($id)
    {
        $this->db->where('id_prodi', $id);
        $result = $this->db->delete('tb_prodi');
        return $result;
    }
    public function validation()
    {
        return [
            [
                'field' => 'nama_prodi',
                'label' => 'nama_prodi',
                'rules' => 'required'
            ],
        ];
    }
}

