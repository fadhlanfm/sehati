<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->driver('session');
		$this->load->helper('url');
		$this->load->model('Mysql_service', 'Mysql');
	}

	public function isAdmin(){
		if ($this->session->userdata('id')!=null) {
			redirect(site_url('admin'), 'refresh');
		}
	}

	public function isTim(){
		if ($this->session->userdata('no_tim')!=null) {
			redirect(site_url('tim'), 'refresh');
		}
	}

	public function isNotAdmin(){
		if($this->session->userdata('id')==null){
			redirect(site_url('login'), 'refresh');
		}
	}

	public function isNotTim(){
		if($this->session->userdata('no_tim')==null){
			redirect(site_url('login'), 'refresh');
		}
	}
}
?>