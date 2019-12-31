<?php
class Chart extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//load chart_model dari model
		$this->load->model('chart_model');
	}

	function index()
	{
		$x['judul'] = "Chart morris JS";
		$data = $this->chart_model->get_data()->result();
		$x['data'] = json_encode($data);
		$this->load->view('template/header', $x);
		$this->load->view('template/sidebar');
		$this->load->view('chart_view', $x);
		$this->load->view('template/footer', $x);
	}
}
