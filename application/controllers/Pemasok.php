<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemasok extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Pemasok';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('pemasok/pemasok_v');
		$this->load->view('template/footer');
	}
}

/* End of file Pemasok.php */
