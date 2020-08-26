<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCreate extends CI_Controller {
    function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['studentid'] = $session_data['studentid'];
            $this->load->view('v_display', $data);
        } else {
        //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
    }

    function getGrades() {
     $data['query'] = $this->m_login->result_getGrades(); 
     $this->load->view('v_display', $data);
 }

 function logout() {
         //remove all session data
   $this->session->unset_userdata('logged_in');
   $this->session->sess_destroy();
   redirect('c_login', 'refresh');
}