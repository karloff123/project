<?php

Class Login_model extends CI_Model{

	function user_validate($data){

		$subdomain_id = $this->session->userdata('subdomain_id');

		$sql = "SELECT * from users_tbl where username = ? and password = ? and  subdomain_id_fk = ?";
   		$query = $this->db->query($sql, array($data['username'], $data['password'], $subdomain_id));

		if($query->num_rows() > 0){
			return true;
		}

		return false;

	}

	function admin_validate($data){

		$sql = "SELECT * from admin_tbl where admin_username = ? and admin_password = ?";
   		$query = $this->db->query($sql, array($data['username'], $data['password']));

		if($query->num_rows() > 0){
			return true;
		}

		return false;

	}
	
}

?>