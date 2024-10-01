<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactUs extends CI_Controller
{

	public function index()
	{
		$this->views();
	}
	private function views()
	{

		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/contact_page');
		$this->load->view('includes/contact_footer');
		// $this->load->view('includes/contact');
	}
	public function submitForm()
	{
		// Yung input na galing kay google pag nag submit ka ng captcha
		$input = $this->compileInputs();

		// Comment out mo nalang to pag nag ttest ka
		$result = $this->verifyCaptcha($input['g-recaptcha-response']); //Return neto 1 or 0
		if ($result == 0 || $result == false) {
			$this->session->set_flashdata('submitmessage', 'Captcha Verification Failed');
			redirect(base_url().'index.php/ContactUs');
			return;
		} else {
			$this->mailtest($input);
			$this->session->set_flashdata('submitmessage', 'Inquiry Submitted!');
			redirect(base_url().'index.php/ContactUs');
		}
	
	}
	private function compileInputs()
	{
		$inputdata = [];
		$inputdata['interest'] = $this->input->post('interest');
		$inputdata['email_to'] = $this->input->post('email_to');
		$inputdata['fname'] = $this->input->post('fname');
		$inputdata['lname'] = $this->input->post('lname');
		$inputdata['company'] = $this->input->post('company');
		$inputdata['email_from'] = $this->input->post('email_from');
		$inputdata['joblvl'] = $this->input->post('joblvl');
		$inputdata['industry'] = $this->input->post('industry');
		$inputdata['country'] = $this->input->post('country');
		$inputdata['phone'] = $this->input->post('phone');
		$inputdata['message'] = $this->input->post('message');

		// Important
		$inputdata['g-recaptcha-response'] = $this->input->post('g-recaptcha-response');

		return $inputdata;
	}

	public function mailtest($input)
	{
		$this->load->library('email');

		// smtp setup natin
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'mail.eteleconnectinc.com';
		$config['smtp_user'] = 'mailer@eteleconnectinc.com';
		$config['smtp_pass'] = 'BetaDelta2022!';
		$config['mailtype'] = 'html';
		$config['smtp_port'] = 26;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('mailer@eteleconnectinc.com');
		$this->email->to($input['email_to']);
		$this->email->cc('bd@eteleconnectinc.com');
		// $this->email->to('gerarddilla@gmail.com');
		// $this->email->bcc('them@their-example.com');
		$this->email->subject('Email Test');

        $message = '  
		            <b>I am interested in</b>  : '.$input['interest'].' <br><br>
		            <b>Firtsname</b>           : '.$input['fname'].' <br><br>
					<b>Lastname</b>            : '.$input['lname'].' <br><br>
					<b>Company</b>             : '.$input['company'].' <br><br>
					<b>Business Email</b>      : '.$input['email_from'].' <br><br>
					<b>Job Level</b>           : '.$input['joblvl'].' <br><br>
					<b>Industry</b>            : '.$input['industry'].' <br><br>
					<b>Country</b>             : '.$input['country'].' <br><br>
					<b>Phone</b>               : '.$input['phone'].' <br><br>
					<b>Message</b>            : '.$input['message'].' <br><br>
					  
		            ';

	
		$this->email->message($message);
		$this->email->send(FALSE);
		// echo $this->email->print_debugger(array('headers'));
	}

	public function verifyCaptcha($captchaInput = '')
	{

		$secretKey = '6LebLn8jAAAAAMRveh5p9TukC1IxqhiLgHS5k1Y-';
		// create curl resource
		$ch = curl_init();

		// set url
		curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt(
			$ch,
			CURLOPT_POSTFIELDS,
			"secret=" . $secretKey . "&response=" . $captchaInput
		);

		//return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// $output contains the output string
		$output = curl_exec($ch);

		// close curl resource to free up system resources
		curl_close($ch);

		// Parse yung json na nakuha kay google
		$result = json_decode($output);
		return $result->success;
	}
}
