<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends CI_Controller {

	public function index()
	{
		$this->views();
	}



	public function views(){

		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('sections/facilities_page');
		$this->load->view('includes/contact');

	}


}

