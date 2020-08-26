 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

	
	public function index()
	{ 
		$this->form_validation->set_rules('username',' Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[3]');
		
		if($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('data');
			if($this->data->getUsers($data))
			{
				$this->session->set_flashdata('msg2',"<h6><i>CONT Acceptat</i><h6>");
			}			
			else
			{
				$this->session->set_flashdata('msg2','Reincearca');

			}
			return redirect('home page');

		}

		else
		{
			
			$this->load->view('header');
			$this->load->view('signup');
		}
	}
}