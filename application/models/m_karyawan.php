<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_karyawan extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	function data($number, $offset){
		return $query = $this->db->get('tbl_penyerapan',$number,$offset)->result();
	}

	function jumlah_data(){
		return $this->db->get('tbl_penyerapan')->num_rows();
	}

	public function simpan($data){
		$this->db->insert('tbl_penyerapan',$data);
	}

	public function update($id_penyerapan,$data_update){
		$this->db->where("id_penyerapan",$id_penyerapan);
		$this->db->update('tbl_penyerapan',$data_update);
		$this->load->database();
	}

	public function getData_project(){
		$query = $this->db->get('tbl_project');
		return $query->result_array();
	}

	public function getData_penyerapan($id_project,$triwulan){
		$query = $this->db->query("SELECT triwulan = $triwulan and id_project = $id_project;");
		return $query->result_array();
	}

	public function getData_anggaran(){
		$query = $this->db->get('tbl_anggaran');
		return $query->result_array();
	}

	public function triwulan($id_project,$triwulan){
		$query = $this->db->query("SELECT sum(jumlah) as jumlahtriwulan FROM `tbl_anggaran` WHERE triwulan = $triwulan and id_project = $id_project;");
		return $query->result_array();
	}

	public function hapus($id_penyerapan){
		$this->db->where("id_penyerapan", $id_penyerapan);
		$this->db->delete('tbl_penyerapan');
	}
	public function edit($id_penyerapan){
		$this->db->where("id_penyerapan",$id_penyerapan);
		return $this->db->get('tbl_penyerapan');
	}
	public function getAll() {
		$this->db->select('*');
		$this->db->from('tbl_penyerapan');
		$query = $this->db->get();
		return $query->result();
	}
	public function cari($cari){
		$cari=$this->db->query("select * from tbl_penyerapan where nama like '%$cari%' ");
		return $cari->result();
	}
}
?>