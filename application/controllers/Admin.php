<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("m_admin");
		$this->load->model("Model_login");
		$this->load->helper("url_helper");
		if($this->session->userdata('level') <> '1')
		{
			redirect('login');
		}
	}

	public function index(){
		$d['title'] = 'Login';
		$d['judul'] = 'Masukkan Username dan Password';
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'admin';
		$d['user'] = $this->m_admin->getData();
		$d['group'] = $this->m_admin->getData_group();
		$this->load->view('v_dashboard-admin', $d);
	}
	public function add(){
		$data['op'] = 'tambah';
		
		$this->load->view('v_dashboard-admin',$data);
	}

	public function simpan(){
		$op = $this->input->post('op');
		$nik = $this->input->post('nik');
		$member_group = $this->input->post('member_group');
		$level = $this->input->post('level');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass_encrypt = md5($password);
		$data = array(
			'nik' => $nik,
			'level' => $level,
			'username' => $username,
			'password' => $pass_encrypt,
			'id_group' => $member_group,
			);
		$data_update = array(
			'username' => $username,
			'level' => $level,
			);

		if($op=="tambah"){
			$this->m_admin->simpan($data);
		}
		else{
			$this->m_admin->update($nik,$data_update);
		}
		redirect('admin');
	}
	public function hapus($nik){
		$this->m_admin->hapus($nik);
		redirect('admin');

	}
	public function edit($nik){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_admin->edit($nik);

		$this->load->view('formedit-admin',$data);
	}
}