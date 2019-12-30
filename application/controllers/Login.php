<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->isTim();
		$this->isAdmin();
		$temp_data['content'] = $this->load->view('login', null, true);
		$this->load->view('layout_login', $temp_data, false);
	}

	public function loginProcess(){
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$query_admin = $this->Mysql->read('admin', array('email'=>$email, 'password'=>$password), null, null, null, null);
		$query_tim = $this->Mysql->read('tim', array('email'=>$email, 'password'=>$password), null, null, null, null);
		if($query_admin->num_rows()>0){
			foreach($query_admin->result() as $result){
				$email = $result->email;
				$id = $result->id;
			}
			$this->session->set_userdata('id', $id);
			redirect(site_url('admin'), 'refresh');
		}elseif ($query_tim->num_rows()>0) {
			foreach($query_tim->result() as $result){
				$no_tim = $result->no_tim;
				$email = $result->email;
				$sekolah = $result->sekolah;
				$anggota1 = $result->anggota1;
				$anggota2 = $result->anggota2;
				$anggota3 = $result->anggota3;
				$telepon = $result->telepon;
			}
			$this->session->set_userdata('no_tim', $no_tim);
			$this->session->set_userdata('email', $email);
			$this->session->set_userdata('sekolah', $sekolah);
			$this->session->set_userdata('anggota1', $anggota1);
			$this->session->set_userdata('anggota2', $anggota2);
			$this->session->set_userdata('anggota3', $anggota3);
			$this->session->set_userdata('telepon', $telepon);
			$update = $this->Mysql->update(array('no_tim'=>$no_tim), 'tim', array('login'=>1));
			redirect(site_url('tim'), 'refresh');
		}else{
			redirect(site_url('login/index').'?balasan=1');
		}
	}

	public function logoutProcess(){
		$update = $this->Mysql->update(array('no_tim'=>$no_tim), 'tim', array('login'=>0));
		session_destroy();
		redirect(site_url('login'), 'refresh');
	}
}