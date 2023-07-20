<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Rangewaktu extends CI_Model
{

    public function getRangewaktu()
    {
        $result = $this->db->get('tb_rangewaktu');
        return $result;
    }


    public function insertWaktu()
    {
        $insert = array(
            'id_waktu' => $this->input->post('id_waktu'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_selesai' => $this->input->post('waktu_selesai'),
        );
        $result = $this->db->insert('tb_rangewaktu', $insert);
        return $result;
    }

    public function getDetailWaktu($id_waktu)
    {
        $this->db->where('id_waktu', $id_waktu);
        $result = $this->db->get('tb_rangewaktu');
        return $result;
    }
    public function editRangewaktu()
    {
        $edit = array(
            'id_waktu' => $this->input->post('id_waktu'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_selesai' => $this->input->post('waktu_selesai'),
        );
        $this->db->where('id_waktu', $this->input->post('id_waktu'));
        $result = $this->db->update('tb_rangewaktu', $edit);
        return $result;
    }


    public function deleteRangewaktu($id)
    {
        $this->db->where('id_waktu', $id);
        $result = $this->db->delete('tb_rangewaktu');
        return $result;
    }
    public function validation()
    {
        return [
            [
                'field' => 'id_waktu',
                'label' => 'Id Waktu',
                'rules' => 'required|max_length[32]'
            ],
            [
                'field' => 'waktu_mulai',
                'label' => 'Waktu Mulai',
                'rules' => 'required|max_length[50]'
            ],
            [
                'field' => 'waktu_selesai',
                'label' => 'Waktu Selesai',
                'rules' => 'required|max_length[32]'
            ],
        ];
    }
}

