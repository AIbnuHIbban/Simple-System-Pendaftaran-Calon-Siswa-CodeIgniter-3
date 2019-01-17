<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function keHalamanDaftar(){
		$this->load->view('daftar');
	}
	public function prosesdaftar(){
		$data = array(
			'username'	=> $this->input->post('username'),
			'password'	=> md5($this->input->post('password')),
		);

		$this->M_Welcome->daftarkan($data);
		redirect(base_url());
	}

	public function login(){
		$data = array(
			'username'	=> $this->input->post('username'),
			'password'	=> md5($this->input->post('password')),
		);

		$cek = $this->M_Welcome->cekData($data)->num_rows();
		$data = $this->M_Welcome->cekData($data)->row();

		if($cek > 0){
			$sess = array(
				'user_id'	=> $data->id,
				'status'	=> 'login'
			);

			$this->session->set_userdata($sess);

			redirect('admin');
		}else{
			redirect(base_url());
		}

	}

	public function keHalamanAdmin(){
		$this->load->view('admin');
	}

	public function keInputData(){
		$id = $this->session->userdata('user_id');
		$data['data'] = $this->M_Welcome->ambil_data_diri($id)->row();

		$this->load->view('input_data', $data);
	}

	public function inputData(){
		$data = array(
			'nama'				=> $this->input->post('nama'),
			'tanggal_lahir'		=> $this->input->post('date'),
			'jk'				=> $this->input->post('jk'),
		);

		$this->M_Welcome->inputDataDiri($data);

		redirect('admin');
	}

	public function logout(){
		session_destroy();

		redirect(base_url());
	}
}

