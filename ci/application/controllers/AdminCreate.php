<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCreate extends CI_Controller {

	
	public function index(){
		$this->load->model('data');
		$posts=$this->data->getPosts();
		$this->load->view('AdminCreate',['posts=>$posts']);
		
	}
	public function create(){
		$this->load->view('create');

	}
	public function update($id)
	{
		$this->load->model('data');
		$post=$this->data->getSinglePosts($id);
		$this->load->view('update',['post'=>$post]);
	}

	public function save()
	{
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		
		if ($this->form_validation->run())
		{
			$data=$this->input->post();
			$today=date('Y-m-d');
			$data['date_created'] = $today;
			unset($data['submit']);
			unset($data['optionsRadios']);
			$this->load->model('data');
			if($this->data->addPost($data))
			{
				$this->session->set_flashdata('msg','Postare Salvata!');
			}
			else
			{
				$this->session->set_flashdata('msg','Eroare!');
			}

			return redirect('Admin');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function change($id)
	{

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		
		if ($this->form_validation->run())
		{
			$data=$this->input->post();
			$today=date('Y-m-d');
			$data['date_created'] = $today;
			unset($data['submit']);
			unset($data['optionsRadios']);
			$this->load->model('data');
			if($this->data->updatePost($data,$id))
			{
				$this->session->set_flashdata;
			}
			
			return redirect('Admin');
		}
		else
		{
			$this->load->view('create');
		}
	}
	
	public function view($id)
	{
		$this->load->model('data');
		$post=$this->data->getSinglePosts($id);
		$this->load->view('viewt',['post'=>$post]);
	}
	
	public function delete($id)
	{
		$this->load->model('data');
		if($this->data->deletePost($id))
		{
			$this->session->set_flashdata('msg','Postare Stearsa!');
		}
		else
		{
			$this->session->set_flashdata('msg','Eroare!');
		}
		return redirect('Admin');
	}
}
