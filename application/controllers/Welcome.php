<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->view('page1');
	}
    public function registration(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('newAccount');
    }
	public function addUser()
	{
         $this->load->model('CISModel');
        $data['name']=$this->input->post('inputName');
        $data['address']=$this->input->post('inputAddress');

        $data['balance']=$this->input->post('inputBalance');
        $data['phoneNumber']=$this->input->post('inputPhone');

        //echo $data['name'];die();
        $id=$this->CISModel->addUser($data);
        $data['id']=$id;

        //$this->load->view('');

    }

    public function searchRes()
    {
        //echo "fasdf";die();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['a_id']=$this->input->post('inputPAN');
        $this->load->model('CISModel');
        $data['users']=$this->CISModel->getUser($data);

        $this->load->view('searchRes',$data);
    }
}
