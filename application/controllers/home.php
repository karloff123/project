<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class home extends CI_Controller{
	
		public function index($place = null)
		{
			//echo $place;
			$header['title'] = "HOME";
			
			$header['scripts'] = array('jquery.min','bootstrap.min');
			
			$header['styles'] = array('bootstrap.min','bootstrap-responsive.min');
		
			$this->load->view('templates/head',$header);

			$subdomain_name = $this->uri->segment(2); #get the value from 2nd slash

			$this->load->view('home');
			
						
		}

	}