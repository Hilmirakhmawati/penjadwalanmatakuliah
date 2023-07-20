<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Kelolajadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Kelolajadwal');
        $this->load->library('pdf');
	}

	public function index()
	{
		$data['jadwal'] = $this->M_Kelolajadwal->get_jadwal();
		$this->load->view('template/header');
		$this->load->view('Halaman_kelolajadwal', $data);
        $this->load->view('template/footer');
	}
	public function tambah()
    {
    	$this->load->model('M_Kelolajadwal');
        $this->load->view('template/header');
        $data['dosen'] = $this->M_Kelolajadwal->get_dosen();
        $data['kelas'] = $this->M_Kelolajadwal->get_kelas();
        $data['prodi'] = $this->M_Kelolajadwal->get_prodi();
        $data['matkul'] = $this->M_Kelolajadwal->get_matkul();
        $data['waktu'] = $this->M_Kelolajadwal->get_waktu();
        $data['waktuHari'] = $this->M_Kelolajadwal->get_waktuHari();
        $this->load->view('tambah_kelolajadwal',$data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $rules = $this->M_Kelolajadwal->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {

            $this->M_Kelolajadwal->insertKelolajadwal();
            redirect('C_Kelolajadwal');

        }
    }
  
    public function ubah($id_kelolajadwal)
    {
        $data['jadwal'] = $this->M_Kelolajadwal->getDetail($id_kelolajadwal);
        $data['dosen'] = $this->M_Kelolajadwal->get_dosen();
        $data['kelas'] = $this->M_Kelolajadwal->get_kelas();
        $data['prodi'] = $this->M_Kelolajadwal->get_prodi();
        $data['matkul'] = $this->M_Kelolajadwal->get_matkul();
        $data['waktu'] = $this->M_Kelolajadwal->get_waktu();
        $data['waktuHari'] = $this->M_Kelolajadwal->get_waktuHari();
        $this->load->view('template/header');
        $this->load->view('edit_kelolajadwal', $data);
        $this->load->view('template/footer');
    }

    public function edit($id_kelolajadwal)
    {
        $rules = $this->M_Kelolajadwal->validation();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->ubah($id_kelolajadwal);
        } else {
            $this->M_Kelolajadwal->editKelolajadwal($id_kelolajadwal);
            redirect('C_Kelolajadwal');
        }
    }

    public function delete($id_kelolajadwal)
    {
        $this->M_Kelolajadwal->deleteKelolajadwal($id_kelolajadwal);
        redirect('C_Kelolajadwal');
    }

    public function printJadwal()
    {
        $query = $this->db->get('tb_kelolajadwal');
        $data = $query->result_array();
                               
        

        $pdf = new FPDF('l','mm','legal');
        $pdf->AddPage();
        $start_x=$pdf->GetX();
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $cell_width = 40; 
        $cell_height= 7;   

        $pdf->SetFont('Arial','B',8);
        $pdf->MultiCell(15,$cell_height,'No Urut',1);
        $current_x+=15;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(75,$cell_height,'Dosen',1);
        $current_x+=75;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(40,$cell_height,'Hari dan Waktu',1);
        $current_x+=40;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(75,$cell_height,'Mata Kuliah',1);
        $current_x+=75;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell($cell_width,$cell_height,'Kode Kelas',1);
        $current_x+=$cell_width;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(75,$cell_height,'Prodi',1);
        $current_x+=75;
        $pdf->SetXY($current_x, $current_y);
        
        $pdf->SetFont('Arial','',8);
        
        $no=1;
        foreach ($data as $key){
        $pdf->Ln();
        $current_x=$start_x;                       
        $current_y+=$cell_height;                  
        
        $pdf->SetXY($current_x, $current_y);
        
        $pdf->MultiCell(15,$cell_height,$no,1);
        $current_x+=15;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(75,$cell_height,$key['nama_dosen'],1);
        $current_x+=75;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(40,$cell_height,$key['hari'].' '. $key['waktu_mulai'].'-'.$key['waktu_selesai'],1);
        $current_x+=40;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(75,$cell_height,$key['nama_matkul'],1);
        $current_x+=75;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell($cell_width,$cell_height,$key['kode_kelas'],1);
        $current_x+=$cell_width;
        $pdf->SetXY($current_x, $current_y);

        $pdf->MultiCell(75,$cell_height,$key['nama_prodi'],1);
        $current_x+=75;
        $pdf->SetXY($current_x, $current_y);
        
        $no++;
        }
        $fileName = 'Jadwal -'. date("Y/m/d"). '.pdf';
        $pdf->Output($fileName,'D');
    }
}
