<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    const user_id = 'user_id';

	public function rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}
    // Login
	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('user');
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (md5($password) != ($user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::user_id => $user->user_id]);
		$this->_update_last_login($user->user_id);

		return $this->session->has_userdata(self::user_id);
	}

    // User Session
	public function current_user()
	{
		if (!$this->session->has_userdata(self::user_id)) {
			return null;
		}

		$user_id = $this->session->userdata(self::user_id);
		$query = $this->db->get_where('user', ['user_id' => $user_id]);
		return $query->row();
	}

    // logout
	public function logout()
	{
		$this->session->unset_userdata(self::user_id);
		return !$this->session->has_userdata(self::user_id);
	}

    // update last login
	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update('user', $data, ['user_id' => $id]);
	}

    // Register 
    public function save()
    {
        $config['upload_path']          = './assets/img/avatar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $config['file_name']            = md5($_FILES["thumbnail"]['name']);

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('thumbnail')) {
            $this->session->set_flashdata('error_upl', 'Gagal Upload Avatar, Silahkan daftar Ulang');
        } else {
            $post = $this->input->post();
            $this->email = $post["email"];
            $this->nama = $post["name"];
            $this->password = md5($post['password']);
            $this->tgl_dibuat = date('Y-m-d H:i:s');
            $this->avatar = base_url("assets/img/avatar/".$config['file_name']).'.'.pathinfo($_FILES["thumbnail"]['name'], PATHINFO_EXTENSION);
            return $this->db->insert('user', $this);
            $this->session->set_flashdata('success', 'Register Berhasil');
        }
        
    }

	// lupa password  
 
    public function updatePassword()
    {
		$email = $this->session->userdata('reset_email');
		$password = md5($this->input->post('password1'));
        $this->db->where('email', $email);
        $this->db->update('user', array('password' => $password));
      
    }

}

