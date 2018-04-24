<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		function data($number, $offset){
			return $query = $this->db->get('tbl_m_user',$number,$offset)->result();
		}

		function jumlah_data(){
			return $this->db->get('tbl_m_user')->num_rows();
		}

		public function simpan($data){
			$this->db->insert('tbl_m_user',$data);
		}

		public function update($nik,$data_update){
    		$this->db->where("nik",$nik);
    		$this->db->update('tbl_m_user',$data_update);
           	$this->load->database();
        }

		public function getData(){
			$query = $this->db->get('tbl_m_user');
			return $query->result_array();
		}

		public function getData_group(){
			$query = $this->db->get('tbl_group');
			return $query->result_array();
		}

		public function hapus($nik){
    		$this->db->where("nik", $nik);
    		$this->db->delete('tbl_m_user');
    }
 		public function edit($nik){
    		$this->db->where("nik",$nik);
    		return $this->db->get('tbl_m_user');
    }
    public function getAll() {
           $this->db->select('*');
           $this->db->from('tbl_m_user');
           $query = $this->db->get();
           return $query->result();
    }
}
?>