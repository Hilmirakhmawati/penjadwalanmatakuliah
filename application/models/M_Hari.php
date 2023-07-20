<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Hari extends CI_Model
{

    public function getHari()
    {
        $result = $this->db->get('tb_hari');
        return $result;
    }


    public function insertHari()
    {
        $insert = array(
            'id_hari' => $this->input->post('id_hari'),
            'nama_hari' => $this->input->post('nama_hari'),
        );
        $result = $this->db->insert('tb_hari', $insert);
        return $result;
    }

    public function getDetailHari($id_hari)
    {
        $this->db->where('id_hari', $id_hari);
        $result = $this->db->get('tb_hari');
        return $result;
    }
    public function editHari()
    {
        $edit = array(
            'id_hari' => $this->input->post('id_hari'),
            'nama_hari' => $this->input->post('nama_hari'),
        );
        $this->db->where('id_hari', $this->input->post('id_hari'));
        $result = $this->db->update('tb_hari', $edit);
        return $result;
    }


    public function deleteHari($id)
    {
        $this->db->where('id_hari', $id);
        $result = $this->db->delete('tb_hari');
        return $result;
    }
    public function validation()
    {
        return [
            [
                'field' => 'nama_hari',
                'label' => 'Nama Hari',
                'rules' => 'required|max_length[150]'
            ],
        ];
    }
}

