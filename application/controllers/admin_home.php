<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class admin_home extends CI_Controller{
	
		public function index($place = null)
		{

			$this->load->view('admin_home');		
		}

	}