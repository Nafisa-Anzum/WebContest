<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->datainfo();
	}
	public function datainfo()
	{
		$this->load->model('ModelDatabase');
		$data['title'] = 'contest title';
		$data['pageTitle']= 'Database test';
		$data['names'] = $this->ModelDatabase->getUsers();
		
		
		
		
		$this->load->view('welcome_message',$data);
	}
}
