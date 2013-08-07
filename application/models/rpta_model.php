<?php  
  
class rpta_model extends CI_MODEL {  
  
  function getSubDomain($subdomain_name){

    $this->db->where('subdomain_name', $subdomain_name);
  
    $query = $this->db->get('subdomain_tbl');
    
    if($query->num_rows() > 0) { return $query->row(); }
    else{ return false; }

  }

} 