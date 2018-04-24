<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("m_karyawan");
		$this->load->model("Model_login");
		$this->load->helper("url_helper");
		if($this->session->userdata('level') <> '0')
		{
			redirect('login');
		}
	}

	public function index(){
		$data['op'] = 'tambah';
		$d['title'] = 'Login';
		$d['judul'] = 'Masukkan Username dan Password';
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'karyawan';
		$d['kegiatan'] = $this->m_karyawan->getData_penyerapan();
		$d['project'] = $this->m_karyawan->getData_project();
		$d['anggaran'] = $this->m_karyawan->getData_anggaran();
		$id_project = 0;
		$triwulan = 0;
		$d['triwulan'] = $this->m_karyawan->triwulan($id_project,$triwulan);
		$this->load->view('v_dashboard-karyawan', $d, $data);
	}

	public function add(){
		$data['op'] = 'tambah';
		
		$this->load->view('v_dashboard-karyawan',$data);
	}

	public function simpan(){
		$op = $this->input->post('op');
		$id_project = $this->input->post('id_project');
		$id_penyerapan = $this->input->post('id_penyerapan');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$jenis_kegiatan = $this->input->post('jenis_kegiatan');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
		$jumlah = $this->input->post('jumlah');
		$submited = $this->session->userdata('username');
		$tanggal_submit = date("Y.m.d");
		$data = array(
			'id_penyerapan' => '',
			'id_project' => $id_project,
			'nama_kegiatan' => $nama_kegiatan,
			'jenis_kegiatan' => $jenis_kegiatan,
			'tanggal' => $tanggal,	
			'status' => $status,
			'jumlah' => $jumlah,
			'submited' => $submited,
			'tanggal_submit' => $tanggal_submit,
			);
		$data_update = array(
			'nama_kegiatan' => $nama_kegiatan,
			'jenis_kegiatan' => $jenis_kegiatan,
			'tanggal' => $tanggal,	
			'status' => $status,
			'jumlah' => $jumlah,
			'tanggal_submit' => $tanggal_submit,
			);

		if($op=="tambah"){
			$this->m_karyawan->simpan($data);
		}
		else{
			$this->m_karyawan->update($id_penyerapan,$data_update);
		}
		redirect('karyawan');
	}
	public function hapus($id_penyerapan){
		$this->m_karyawan->hapus($id_penyerapan);
		redirect('karyawan');

	}
	public function edit($id_penyerapan){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_karyawan->edit($id_penyerapan);

		$this->load->view('formedit',$data);
	}

	public function export_excel(){
		$data = array( 
			'tbl_penyerapan' => $this->m_karyawan->getAll());

		$this->load->view('v_excel_export.php',$data);
	}
	public function export_cari(){
		$cari=$this->input->get('cari');
		$beda['cari']=$this->msiswa->cariSiswa($cari);
		$this->load->view('cari_laporan_excel',$beda);
	}
	public function cariData(){
		$cari=$this->input->get('cari');
		$beda['cari']=$this->tbl_penyerapan->cari($cari);
		$this->load->view('v_cari',$beda);
}

}