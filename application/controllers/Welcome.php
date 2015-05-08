<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('page1');
	}
	public function datainfo()
	{
		
		
		
		
		$this->load->view('login');
	}
}
