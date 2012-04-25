<?php

class Site_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    function get_list_news()
    {  
        $this->db->from('news');
		$query = $this->db->get();
        return $query->result();
    }
    
      function get_list_liens()
    {  
        $this->db->from('liens');
		$query = $this->db->get();
        return $query->result();
    }
    
     function get_list_presentation()
    {  
        $this->db->from('presentation');
		$query = $this->db->get();
        return $query->result();
    }
       
	
/*
	function get_entrie($id)
    {
    
        $this->db->from('projets');
		$this->db->where('projets.id', $id);
		$query = $this->db->get();
        return $query->result();
    }
*/
    
			

}