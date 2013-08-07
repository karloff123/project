<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class user_validate extends CI_Controller{
	
		public function index()
		{
					
		}

		function validate_credentials(){

			$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
			);
				
			$this->load->model('login_model');
			$query = $this->login_model->validate($data);
			
			if($query){ // validate true
				$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
				);
				
				$this->session->set_userdata($data);
				redirect('home');
			}else{
				#redirect to previous page
				$subdomain_name = $this->session->userdata('subdomain_name');
				redirect('rpta/'.$subdomain_name);
			} 
			
		}
	}