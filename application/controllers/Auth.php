<?php

class Auth extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
        $this->load->library('form_validation');
		
	}

	public function index()
	{
		show_404();
	}

	public function login()
	{
	
		$rules = $this->Auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('login');
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->Auth_model->login($email, $password)){
			redirect('/');
		} else {
			$this->session->set_flashdata('error','Email atau Password salah');
			redirect('login');
		}

		$this->load->view('login');
	}

	public function logout()
	{
		
		$this->Auth_model->logout();
		redirect(site_url());
	}

    public function register() {
       
		$rules = $this->Auth_model->rules();
		$this->form_validation->set_rules($rules);

        if ($this->form_validation->run()) {
            // Register Aksi
            $this->Auth_model->save();
            // Set pesan berhasil
            
            redirect('login');
        }

        $this->load->view("register");
    }
}