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
}

