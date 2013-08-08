<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class user_validate extends CI_Controller{
	
		public function index()
		{
					
		}

		function user_validate_credentials(){

			$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
			);
				
			$this->load->model('login_model');
			$query = $this->login_model->user_validate($data);
			
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

		function admin_validate_credentials(){

			$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
			);
				
			$this->load->model('login_model');
			$query = $this->login_model->admin_validate($data);
			
			if($query){ // validate true
				$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
				);
				
				$this->session->set_userdata($data);
				redirect('admin_home');
			}else{
				#redirect to previous page
				$subdomain_name = $this->session->userdata('subdomain_name');
				redirect('rpta/'.$subdomain_name);
			} 
			
		}
	}