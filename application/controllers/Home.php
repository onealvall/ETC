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
		$this->load->view('includes/contact');
	}
}
