<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->views();
	}

	public function views()
	{

		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('sections/front');
		$this->load->view('sections/services-rework');
		// $this->load->view('sections/services');
		$this->load->view('sections/our_competitive_advantage');
		$this->load->view('sections/whoweare');
		$this->load->view('sections/mission_vission');
		// $this->load->view('sections/portfolio');
		$this->load->view('sections/team');
		$this->load->view('sections/careers');
		$this->load->view('sections/facilities');
		// $this->load->view('sections/headquarters');
		// $this->load->view('sections/clients');
		// $this->load->view('sections/contact');
		// $this->load->view('includes/footer');
		$this->load->view('includes/contact');
	}
}
