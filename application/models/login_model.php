<?php

Class Login_model extends CI_Model{

	function validate($data){

		$subdomain_id = $this->session->userdata('subdomain_id');

		$sql = "SELECT * from users_tbl where username = ? and password = ? and  subdomain_id_fk = ?";
   		$query = $this->db->query($sql, array($data['username'], $data['password'], $subdomain_id));

		if($query->num_rows() > 0){
			return true;
		}

		return false;

	}
	
}

?>