<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Serverside extends CI_Controller
{

	public function index()
	{
		$data['judul'] = "load serverside";
		$this->load->view('mahasiswa/v_serverside', $data);
	}
	function json()
	{
		$this->load->library('datatables');
		$this->datatables->select('*');
		$this->datatables->from('tampil_mhs');
		return print_r($this->datatables->generate());
	}
}

/* End of file Serverside.php */
