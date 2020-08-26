<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class POSTSF extends CI_Controller {

	
	public function index(){
		$this->load->view('header');
		$this->load->model('data');
		$posts=$this->data->getPostss();
		$this->load->view('home page',["posts"=>$posts]]);
		$this->load->view('footer');
		
		
	}

	
	
}