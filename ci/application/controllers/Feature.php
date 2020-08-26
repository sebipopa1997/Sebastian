<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends CI_Controller {
	
	public function index(){
		$this->load->view('header');
		$this->load->view('Feature');
		$this->load->view('footer');
		
	}	
}
