<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('login_m');
			$query = $this->login_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'user_id' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>alert('Login Berhasil!');
				window.location='" . base_url() . "';
				</script>";
			} else {
				echo "<script>alert('Login Gagal!');
				window.location='" . base_url('login') . "';</script>";
			}
		}
	}
}

/* End of file Login.php */
