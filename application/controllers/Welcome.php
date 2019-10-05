<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('dashboard/dashboard.php');
		$this->load->view('layouts/footer.php');
	}
}
