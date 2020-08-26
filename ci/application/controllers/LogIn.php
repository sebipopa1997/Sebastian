<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogIn extends CI_Controller {

public function index(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		
	}	
	
	public function login1(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('header');
				$this->load->view('signup', $data);
				$this->load->view('footer');
				print('nothing');
			} else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));
				print('verify');
				// Login user
				$user_id = $this->data->login($username, $password);

				if($user_id){
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					header('Location: http://localhost/ci/index.php/Welcome?status=success');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					header('Location: http://localhost/ci/index.php/LogIn?error=error');
				}		
			}
		}
}