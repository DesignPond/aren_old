<?php

class Admin_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
 
 
//////////// Select ////////// 

//// counts

    function count_news()
 	{
 	   $query = $this->db->query('SELECT * FROM news');
	   return $query->num_rows(); 
	}
	
	 function count_liens()
 	{
 	   $query = $this->db->query('SELECT * FROM liens');
	   return $query->num_rows(); 
	}      
//// listes

	function get_list_news()
    {  
        $this->db->from('news');
		$query = $this->db->get();
        return $query->result();
    }
    
    
    function get_news_page($limit = NULL, $offset = NULL)
	{
  		$this->db->limit($limit, $offset);
  		$this->db->order_by("dateNews", "desc"); 
  		$query = $this->db->get('news');
  		return $query->result();
 	}
 	
    function get_liens_page($limit = NULL, $offset = NULL)
	{
  		$this->db->limit($limit, $offset);
  		$query = $this->db->get('liens');
  		return $query->result();
 	}

        
    function get_list_prestataires()
    {
        $this->db->from('prestataires');
		$query = $this->db->get();
        return $query->result();
    }
    
    function get_list_presentation()
    {
        $this->db->from('presentation');
        $this->db->order_by("pageAccueil", "desc"); 
		$query = $this->db->get();
        return $query->result();
    }
    
    function get_list_liens()
    {
        $this->db->from('liens');
		$query = $this->db->get();
        return $query->result();
    }
    
////////
 	
	function get_news($id)
    {
        $this->db->from('news');
		$this->db->where('news.id', $id);
		$query = $this->db->get();
        return $query->result();
    }
    
    function get_presentation($id)
    {
        $this->db->from('presentation');
		$this->db->where('presentation.id', $id);
		$query = $this->db->get();
        return $query->result();
    }
    
	function get_prestataires($id)
    {
        $this->db->from('prestataires');
		$this->db->where('prestataires.id', $id);
		$query = $this->db->get();
        return $query->result();
    }
			
	function get_liens($id)
    {
        $this->db->from('liens');
		$this->db->where('liens.id', $id);
		$query = $this->db->get();
        return $query->result();
    }
    
    
//////////// Create //////////   
   function insertLien($nomLien,$lien, $logo)
   {
      $data = array(
         'nomLien'     => $nomLien,
         'lien'        => $lien,
         'logo'  => $logo
      );
      	$this->db->insert('liens', $data);
      	return $this->db->insert_id();
   }  
   
   function updateLien($nomLien,$lien, $logo)
   {
      $data = array(
         'nomLien'     => $nomLien,
         'lien'        => $lien,
         'logo'  => $logo
      );
      
        $this->db->where('id', $id);
		$this->db->update('liens', $data); 
      	return $this->db->insert_id();
   }    
    

//////////////////////
}