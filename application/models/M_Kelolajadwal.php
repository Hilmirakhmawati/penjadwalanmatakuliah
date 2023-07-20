<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kelolajadwal extends CI_Model
{
    public function get_jadwal()
    {
        $query = $this->db->get('tb_kelolajadwal');
        return $query;
    }

    public function get_dosen()
    {
        $query = $this->db->get('tb_dosen');
        return $query;
    }

    public function get_kelas()
    {
        $query = $this->db->get('tb_kelas');
        return $query;
    }

    public function get_matkul()
    {
        $query = $this->db->get('tb_matkul');
        return $query;
    }

    public function get_prodi()
    {
        $query = $this->db->get('tb_prodi');
        return $query;
    }

    public function get_waktu()
    {
        $query = $this->db->get('tb_rangewaktu');
        return $query;
    }

    public function get_waktuHari()
    {
        $this->db->select('hari');
        $query = $this->db->get('tb_rangewaktu');
        return $query;
    }

    public function getDetail($id_kelolajadwal)
    {
        $this->db->where('id_kelolajadwal', $id_kelolajadwal);
        $query = $this->db->get('tb_kelolajadwal');
        return $query;
    }

    public function insertKelolajadwal()
        {
            $insert = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'hari' => $this->input->post('hari'),
            'kode_kelas' => $this->input->post('kode_kelas'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_selesai' => $this->input->post('waktu_selesai'),
            );
            $result = $this->db->insert('tb_kelolajadwal', $insert);
            return $result;
        }
    public function editKelolajadwal($id_kelolajadwal)
    {
        $edit = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'hari' => $this->input->post('hari'),
            'kode_kelas' => $this->input->post('kode_kelas'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_selesai' => $this->input->post('waktu_selesai'),
        );
        $this->db->where('id_kelolajadwal', $id_kelolajadwal);
        $result = $this->db->update('tb_kelolajadwal', $edit);
        return $result;
    }


    public function deleteKelolajadwal($id_kelolajadwal)
    {
        $this->db->where('id_kelolajadwal', $id_kelolajadwal);
        $result = $this->db->delete('tb_kelolajadwal');
        return $result;
    }
        public function validation()
    {
        return [
            [
                'field' => 'nama_dosen',
                'label' => 'Nama Dosen',
                'rules' => 'required|max_length[100]'
            ],
            [
                'field' => 'kode_kelas',
                'label' => 'Kode Kelas',
                'rules' => 'required|max_length[60]'
            ],
            [
                'field' => 'nama_prodi',
                'label' => 'Nama Prodi',
                'rules' => 'required|max_length[60]'
            ],
            [
                'field' => 'nama_matkul',
                'label' => 'Nama Matkul',
                'rules' => 'required|max_length[60]'
            ],
            [
                'field' => 'hari',
                'label' => 'Hari',
                'rules' => 'required|max_length[60]'
            ],
            [
                'field' => 'waktu_mulai',
                'label' => 'Waktu Mulai',
                'rules' => 'required|max_length[60]'
            ],
            [
                'field' => 'waktu_selesai',
                'label' => 'waktu_selesai',
                'rules' => 'required|max_length[60]'
            ],
        ];
    }
}

