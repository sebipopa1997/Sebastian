<?php
Class data extends CI_Model
{
	
	public function getUsers($data)
	{
		return $this->db->insert('tbl_users',$data);
	}	

	public function getPosts()
	{
		$query=$this->db->get('tbl_posts');
		if($query->num_rows()>0){
			return $query->result();
		}
		
	}

	public function getPostss()
	{
		$query=$this->db->get('game_posts');
		if($query->num_rows()>0){
			return $query->result();
		}
		
	}
	
	public function addPost($data)
	{
		return $this->db->insert('tbl_posts', $data);
	}

	public function getSinglePosts($id)
	{
		$query=$this->db->get_where('tbl_posts',array('id'=>$id));
		if($query->num_rows()>0)
		{
			return $query->row();
		}
	}

	public function updatePost($data,$id)
	{
		$this->db->where('id',$id)
		->update('tbl_posts',$data);
	}

	public function deletePost($id)
	{
		return $this->db->delete('tbl_posts',['id'=>$id]);
	}

	public function __construct()
	{
		parent::__construct(); 
	}

	public function can_login($username, $password)
	{

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get('tbl_users');
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('tbl_users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}
}
?>