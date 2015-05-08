<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->datainfo();
	}
	public function datainfo()
	{
		
		
		
		
		$this->load->view('page1');
	}
}
