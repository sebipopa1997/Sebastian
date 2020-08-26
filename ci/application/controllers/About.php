<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index(){
		$this->load->view('header');
		$this->load->model('data');
		$table=$this->data->getPosts();
		$this->load->view('about',["table"=>$table]);
		$this->load->view('footer');
		
		
	}

	
	
}
