<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('dashboard_v');
		$this->load->view('template/footer');
	}
}
/* End of file Dashboard.php */
