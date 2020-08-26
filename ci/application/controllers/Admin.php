<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index(){
		$this->load->model('data');
		$table=$this->data->getPosts();
		$this->load->view('header');
		$this->load->view('Admin',["table"=>$table]);
		
	}

	public function create(){
		$this->load->view('create');

	}		
}