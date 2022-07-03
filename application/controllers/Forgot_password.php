<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_password extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
        $this->load->library('form_validation');
		
	}
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
         
            $this->load->view('forgot_password');
        } else {
            $email = $this->input->post('email');
      
            $userInfo = $this->db->get_where('user', ['email' => $email])->row_array();

            if (!$userInfo) {
                $this->session->set_flashdata('sukses', 'Email anda belum terdaftar, silakan coba lagi.');
                redirect(site_url('forgotpassword'), 'refresh');
            }

            //build token   

            $token = base64_encode(random_bytes(32));
            $user_token = array(
                'token' => $token,
                'email' => $email,
                'dibuat_tgl' => date('Y-m-d H:i:s'),
            );
            $this->db->insert('tokens', $user_token);
         
            $url = base_url() . 'Forgot_password/reset_password?email=' . $this->input->post('email') . '&token=' . urlencode($token) ;
            $link = '<a href=' . $url .'> klik ini</a>';

            $message = '';
            $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong> <br> <br> ';
            $message .= '<strong>Silakan klik link ini:</strong><br>' . $link;
            $message .= '<span> </br> </br> Harusnya melalui Email namun perlu API valid email jadi yang penting linknya terbuat</span>';

            // Harusnya melalui Email dikirim namun perlu API valid email yang penting linknya terbuat
            echo $message; //send this through mail  
            exit;
        }
    }

    public function reset_password()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tokens', ['token' => $token])->row_array();

        if ($user) {
            $this->session->set_userdata('reset_email', $email);
            $this->change_password();
        } else {
            $this->session->set_flashdata('sukses', 'token salah');
        }
    }


    public function change_password() {

        if (!$this->session->userdata('reset_email')) {
            redirect('login');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|matches[password1]');
 
        if ($this->form_validation->run() == FALSE) {
         
            $this->load->view('v_updatepassword');
        } else {
            $this->Auth_model->updatePassword();

            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('sukses', 'Password Berhasil diganti, silahkan login.');
            redirect('login');
        }    
    }
}