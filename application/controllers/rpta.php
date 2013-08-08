<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class rpta extends CI_Controller{
	
		public function index($place = null)
		{

			if($place != null){

				$header['title'] = "RPTA > Login > Welcome";	
				$header['scripts'] = array('jquery.min','bootstrap.min');	
				$header['styles'] = array('bootstrap.min','bootstrap-responsive.min');
				$this->load->view('templates/head',$header);

				$this->session->unset_userdata('subdomain_name');

				if($place == "admin"){ #changable depends on admin wants

					$session_data['subdomain_name'] = "admin"; #store admin as subdomain name
					$this->session->set_userdata($session_data); #add to session
					$this->load->view('admin_loginview'); #load admin login view

				}else{

					$this->load->library('session'); #start the session
					$subdomain_name = $this->uri->segment(2); #get the value from 2nd slash

					$this->load->model('rpta_model'); #load model
					$query = $this->rpta_model->getSubDomain($subdomain_name); #check if subdomain is existing
					
					if(!empty($query)){
						$session_data['subdomain_id'] = $query->subdomain_id; #store subdomain id to array
						$session_data['subdomain_name'] = $query->subdomain_name; #store subdomain name to array
						$this->session->set_userdata($session_data); #add to session

						$data['subdomain_data'] = $query; #pass data to array
						$this->load->view('loginview', $data); #output view and pass data[array] to view

					}else{
						#error page
					}
				}

			}else{
				show_error(); #show error if subdomain value is empty
			}			
		}

	}