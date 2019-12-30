<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->isNotAdmin();
	}

	public function index(){
		$this->data['query'] = $this->Mysql->read('admin', null, 'id', 'ASC', null, null);
		$temp_data['content'] = $this->load->view('atur_mulai', $this->data, true);
		$this->load->view('layout_admin', $temp_data, false);
	}

	public function lihat_tim(){
		$this->data['query'] = $this->Mysql->read('tim', null, 'no_tim', 'ASC', null, null);
		$temp_data['content'] = $this->load->view('list_tim', $this->data, true);
		$this->load->view('layout_admin', $temp_data, false);
	}

	public function atur_mulai(){
		$mulai = $this->input->post('mulai');
		$id = $this->session->userdata('id');
		$update = $this->Mysql->update(array('id'=>$id), 'admin', array('mulai'=>$mulai));
		redirect(site_url('admin'));
	}

	public function lihat_soal(){
		/*$show_tim = $this->Mysql->read('tim', null, 'no_tim', 'ASC', null, null);
		$show_soal = $this->Mysql->read('soal', null, 'no_soal', 'ASC', null, null);*/

		$this->data['query'] = $this->Mysql->read('soal', null, 'no_soal', 'ASC', null, null);
		$temp_data['content'] = $this->load->view('list_soal', $this->data, true);
		$this->load->view('layout_admin', $temp_data, false);
	}
	
}