<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->isNotTim();
	}

	public function index(){
		$no_tim = $this->session->userdata('no_tim');
		$this->data['query'] = $this->Mysql->read('soal', null, 'no_soal', 'ASC', null, null);
		$this->data['mulai'] = $this->Mysql->read('admin', null, 'id', 'ASC', null, null);
		$this->data['kerja'] = $this->Mysql->read('tim', array('no_tim'=>$no_tim), null, null, null, null);
		$temp_data['content'] = $this->load->view('tim', $this->data, true);
		$this->load->view('layout_tim', $temp_data, false);
	}

	public function gantiPassword(){
		$pwd_skrg = $this->input->post('pwd_skrg');
		$new_password = $this->input->post('pwd1');
		$confirm_password = $this->input->post('pwd2');
		$no_tim = $this->session->userdata('no_tim');

		$query = $this->Mysql->read('tim', array('no_tim'=>$no_tim), null, null, null, null)->row_array();
		$sandi_lama = $query['password'];

		if (md5($pwd_skrg)==$sandi_lama) {
			$update = $this->Mysql->update(array('no_tim'=>$no_tim), 'tim', array('password'=>md5($new_password)));
			if ($update) {
      			echo '<script>alert("Berhasil ganti password");window.location = "../tim";</script>';
			}else{
				redirect(site_url('tim?report=-1'));
			}
		}else{
				redirect(site_url('tim?report=-1'));
		}		
	}

	public function kerja(){
		$mulai = date("Y-m-d H:i:s");
		$no_tim=$this->session->userdata('no_tim');
		$update = $this->Mysql->update(array('no_tim'=>$no_tim), 'tim', array('kerja'=>1));
		$update = $this->Mysql->update(array('no_tim'=>$no_tim), 'tim', array('mulai'=>$mulai));
		$this->data['query'] = $this->Mysql->read('soal', null, 'no_soal', 'ASC', 100, 0);
		$temp_data['content'] = $this->load->view('kerja', $this->data, true);
		$this->load->view('layout_kerja', $temp_data, false);
	}

	public function kumpul(){
		/*$mulai = date("Y-m-d H:i:s");
		$no_tim=$this->session->userdata('no_tim');
		$update = $this->Mysql->update(array('$no_tim'=>$no_tim), 'tim', array('mulai'=>$mulai));
		$update1 = $this->Mysql->update(array('$no_tim'=>$no_tim), 'tim', array('kerja'=>1));
		$this->data['query'] = $this->Mysql->read('soal', null, 'no_soal', 'ASC', null, null);
		redirect(site_url('tim'));*/
		$no_tim=$this->session->userdata('no_tim');
		$soal = $this->input->post('soal');
		foreach ($soal as $key => $value) {
			$query = $this->Mysql->read('soal', array('no_soal'=>$value), 'no_soal', 'ASC', null, null)->row_array();
			if ($query['jawaban_benar']==$this->input->post('jawaban_'.$value)) {
				$isBenar = 1;
			}else{
				$isBenar = 0;
			}
			$data = array(
					'no_tim'=>$this->session->userdata('no_tim'),
					'no_soal'=>$value,
					'jawab'=>$this->input->post('jawaban_'.$value),
					'is_benar'=>$isBenar
				);
			$update = $this->Mysql->create('ljk',$data);
		}
		redirect(site_url('tim'), 'refresh');
	}
}