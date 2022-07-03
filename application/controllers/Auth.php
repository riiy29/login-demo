<?php

class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$this->load->model('Auth_model');
		$this->load->library('form_validation');

		$rules = $this->Auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('index');
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->Auth_model->login($email, $password)){
			redirect('admin');
		} else {
			$this->session->set_flashdata('error','Email atau Password salah');
			redirect('login');
		}

		$this->load->view('index');
	}

	public function logout()
	{
		$this->load->model('Auth_model');
		$this->Auth_model->logout();
		redirect(site_url());
	}
}