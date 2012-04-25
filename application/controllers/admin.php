<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	 
	 function index()
	{
		$data = array();
		$this->load->model('admin_model');
		
		$data['main_content'] = 'admin/admin';
		$data['page_title'] = 'Accueil ';
		$data['titlepage'] = 'accueil';
		
		$this->load->view('includes/templateAdmin', $data);	
		
	}
	
	
	function news()
	{
		$data = array();
		$this->load->model('admin_model');
		$this->load->helper('new_helper');
		$nbr = $this->admin_model->count_news();
		
		$per_page = 4;
		$offset = $this->uri->segment(3);
		
		$data['news'] = $this->admin_model->get_news_page($per_page,$offset );
			// pagination
	
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin/news/';
		$config['total_rows'] = $nbr;
		$config['per_page'] = $per_page;
		$config['anchor_class'] = 'class="btn"';
		
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		
		$data['main_content'] = 'admin/news';
		$data['page_title'] = 'Liste news';
		$data['titlepage'] = 'news';
		
		$this->load->view('includes/templateAdmin', $data);	
		
	}
	
	
	function ajouterNews()
   {
   
      $data = array();
   	  $this->load->model('admin_model');  

		$data['main_content'] = 'admin/ajouterNews';
		$data['page_title'] = 'Ajouter news';
		$data['titlepage'] = 'news';
		
		$this->load->view('includes/templateAdmin', $data);	
   }
   
   function addNews()
   {
      	$this->load->library('form_validation');
   		$this->form_validation->set_rules('titre', 'Titre', 'required|trim');	
   		$this->form_validation->set_rules('dateNews', 'Date news', 'required');	
   		$this->form_validation->set_rules('texte', 'Texte', 'required|trim');					
		 
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->session->set_flashdata('message_type', 'error');
       		$this->session->set_flashdata('message', 'Erreur');
			$path = '/admin/ajouterNews/';
			redirect($path, 'refresh');	
		}
		else // passed validation proceed to post success logic
		{
		
   		$titre = $this->input->post('titre');
		$dateNews = $this->input->post('dateNews');
		$texte = $this->input->post('texte');
		
    			$data = array(
   					'titre' => $titre,
   					'dateNews' => $dateNews,
					'texte' => $texte
				);
				
				if($this->db->insert('news', $data) == TRUE) 
       			 {
					$this->session->set_flashdata('message_type', 'success');
       			    $this->session->set_flashdata('message', 'Success');
       				$path = '/admin/news/' ;
					redirect($path);		
       			 } 
   	    }
   }
   
   
   //// editer
   
   	function editerNews()
   {
   
      $data = array();
      $id = $this->uri->segment(3);
   	  $this->load->model('admin_model');  
   	  
   	  $data['news'] = $this->admin_model->get_news($id);

		$data['main_content'] = 'admin/editerNews';
		$data['page_title'] = 'Ajouter news';
		$data['titlepage'] = 'news';
		
		$this->load->view('includes/templateAdmin', $data);	
   }
   
   function editNews()
   {
      	$this->load->library('form_validation');
   		$this->form_validation->set_rules('titre', 'Titre', 'required|trim');	
   		$this->form_validation->set_rules('dateNews', 'Date news', 'required');	
   		$this->form_validation->set_rules('texte', 'Texte', 'required|trim');					
		 
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->session->set_flashdata('message_type', 'error');
       		$this->session->set_flashdata('message', 'Erreur');
			$path = '/admin/editerNews/';
			redirect($path, 'refresh');	
		}
		else // passed validation proceed to post success logic
		{
		
		$id = $this->input->post('id');
   		$titre = $this->input->post('titre');
		$dateNews = $this->input->post('dateNews');
		$texte = $this->input->post('texte');
		
    			$data = array(
   					'titre' => $titre,
   					'dateNews' => $dateNews,
					'texte' => $texte
				);
				
				$this->db->where('id', $id);

				if($this->db->update('news', $data) == TRUE) 
       			 {
					$this->session->set_flashdata('message_type', 'success');
       			    $this->session->set_flashdata('message', 'Success');
       				$path = '/admin/news/' ;
					redirect($path);		
       			 } 	 
       			 
   	    }
   }
   ///////
	
	
	function deleteNews()
	{
		$id = $this->uri->segment(3);
        $this->db->where('id', $id);
		
		if ($this->db->delete('news') == TRUE)
		{
			$path = '/admin/news/';
		    redirect($path); 
		}
			
	}
	
	
/////// liens

	function liens()
	{
		$data = array();
		$this->load->model('admin_model');
		$nbr = $this->admin_model->count_liens();
		
		$per_page = 4;
		$offset = $this->uri->segment(3);
		
		$data['liens'] = $this->admin_model->get_liens_page($per_page,$offset );
			// pagination
	
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin/liens/';
		$config['total_rows'] = $nbr;
		$config['per_page'] = $per_page;
		$config['anchor_class'] = 'class="btn"';
		
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		
		$data['main_content'] = 'admin/liens';
		$data['page_title'] = 'Liste liens';
		$data['titlepage'] = 'liens';
		
		$this->load->view('includes/templateAdmin', $data);	
		
	}	
	
   function ajouterLien()
   {
   
      $data = array();
   	  $this->load->model('admin_model');  

		$data['main_content'] = 'admin/ajouterLien';
		$data['page_title'] = 'Ajouter lien';
		$data['titlepage'] = 'liens';
		
		$this->load->view('includes/templateAdmin', $data);	
   }
	
	
	function addLien()
		{
			
		$this->load->model('admin_model');  
		$nomLien = $this->input->post('nomLien');
		$lien = $this->input->post('lien');
		
		$this->load->library('image_lib');
		$file_element_name = 'logo';
		
		$config['upload_path'] = './images/liens/';
		$config['allowed_types'] = 'jpg|jpeg|png|';
		$config['max_width']  = '2024';
		$config['max_height']  = '1768';
		$config['max_size'] = '30240'; //in KB == 10MB
		$config['encrypt_name'] = TRUE;
		 
		// You can give video formats if you want to upload any video file.
		 
		$this->load->library('upload', $config); 
		 if ( ! $this->upload->do_upload($file_element_name))
		{	
			$this->session->set_flashdata('message_type', 'error');
			$this->session->set_flashdata('message', 'Erreur, l\'image est trop grande');
			$path =  './admin/ajouterLien/';
         	redirect($path);
		}
		else
		{
			
		$image_data = $this->upload->data();
		$image['image'] = $image_data['file_name'];	
		
					$config2['source_image'] = getcwd().'/images/liens/'.$image['image'];
					$config2['maintain_ratio'] = TRUE;
					$config2['width'] = 90;
					$config2['height'] = 60;
					$config['quality'] = '100%';
					$config2['image_library'] = 'gd2';
					$this->image_lib->initialize($config2);
					$this->image_lib->resize();
		
				if($this->admin_model->insertLien($nomLien,$lien, $image['image']) == TRUE)
				{	
								
					$this->session->set_flashdata('message_type', 'success');
					$this->session->set_flashdata('message', 'Success');
					$path = '/admin/liens/';
					redirect($path, 'refresh');	
			   }	   	 					
		 }
	}
	
	function editerLien()
   {
   
      $data = array();
   	  $this->load->model('admin_model');
   	  $id = $this->uri->segment(3);
   	  $data['liens'] = $this->admin_model->get_liens($id);  

		$data['main_content'] = 'admin/editerLien';
		$data['page_title'] = '&Eacute;diter lien';
		$data['titlepage'] = 'liens';
		
		$this->load->view('includes/templateAdmin', $data);	
   }
	
  function editLien()
	{
			
		$this->load->model('admin_model');  
		$id = $this->input->post('id');
		$nomLien = $this->input->post('nomLien');
		$lien = $this->input->post('lien');
		
		$this->load->library('image_lib');
		$file_element_name = 'logo';
		
		$config['upload_path'] = './images/liens/';
		$config['allowed_types'] = 'jpg|jpeg|png|';
		$config['max_width']  = '2024';
		$config['max_height']  = '1768';
		$config['max_size'] = '30240'; //in KB == 10MB
		$config['encrypt_name'] = TRUE;
		 
		$this->load->library('upload', $config);
		 
		if (!$this->upload->do_upload($file_element_name))
		{		
			$data = array(
               'nomLien' => $nomLien,
               'lien' => $lien
            );

			$this->db->where('id', $id);
			$this->db->update('liens', $data); 
								
			$this->session->set_flashdata('message_type', 'success');
			$this->session->set_flashdata('message', 'Success');
			$path = '/admin/liens/';
			redirect($path, 'refresh');	
		}
		else
		{
			
		$image_data = $this->upload->data();
		$image['image'] = $image_data['file_name'];	

					$config2['source_image'] = getcwd().'/images/liens/'.$image['image'];
					$config2['maintain_ratio'] = TRUE;
					$config2['width'] = 90;
					$config2['height'] = 60;
					$config['quality'] = '100%';
					$config2['image_library'] = 'gd2';
					$this->image_lib->initialize($config2);
					$this->image_lib->resize();
		
			$data = array(
               'nomLien' => $nomLien,
               'lien' => $lien,
               'logo' => $image['image']
               
            );

			$this->db->where('id', $id);
			$this->db->update('liens', $data); 
			
			$this->session->set_flashdata('message_type', 'success');
			$this->session->set_flashdata('message', 'Success');
			$path = '/admin/liens/';
			redirect($path, 'refresh');	
			      	 					
		 }
	}


	function deleteLien()
	{
		$id = $this->uri->segment(3);
        $this->db->where('id', $id);
		
		if ($this->db->delete('liens') == TRUE)
		{
			$path = '/admin/liens/';
		    redirect($path); 
		}
			
	}
	
	
/////// presentation

	function presentation()
	{
		$data = array();
		$this->load->model('admin_model');

		$data['presentation'] = $this->admin_model->get_list_presentation();
		
		$data['main_content'] = 'admin/presentation';
		$data['page_title'] = 'Page présentation';
		$data['titlepage'] = 'presentation';
		
		$this->load->view('includes/templateAdmin', $data);	
		
	}	
	
   function ajouterTexte()
   {
   
      $data = array();
   	  $this->load->model('admin_model');  

		$data['main_content'] = 'admin/ajouterTexte';
		$data['page_title'] = 'Ajouter section';
		$data['titlepage'] = 'presentation';
		
		$this->load->view('includes/templateAdmin', $data);	
   }
	
	
	function addTexte()
		{
			
		$this->load->library('form_validation');
   		$this->form_validation->set_rules('titre', 'Titre', 'required|trim');	
   		$this->form_validation->set_rules('texte', 'Texte', 'required|trim');					
		 
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->session->set_flashdata('message_type', 'error');
       		$this->session->set_flashdata('message', 'Erreur');
			$path = '/admin/ajouterTexte/';
			redirect($path, 'refresh');	
		}
		else // passed validation proceed to post success logic
		{
		
   		$titre = $this->input->post('titre');
		$texte = $this->input->post('texte');
		$pageAccueil = $this->input->post('pageAccueil');
		
    			$data = array(
   					'titre' => $titre,
					'texte' => $texte,
					'pageAccueil' => $pageAccueil
					 
				);
				
				if($this->db->insert('presentation', $data) == TRUE) 
       			 {
					$this->session->set_flashdata('message_type', 'success');
       			    $this->session->set_flashdata('message', 'Success');
       				$path = '/admin/presentation/' ;
					redirect($path);		
       			 } 
   	    }
	}
	
	function editerTexte()
   {
   
      $data = array();
      $id = $this->uri->segment(3);
   	  $this->load->model('admin_model');  
   	  
   	  $data['presentation'] = $this->admin_model->get_presentation($id);

		$data['main_content'] = 'admin/editerTexte';
		$data['page_title'] = 'Ajouter section présentation';
		$data['titlepage'] = 'presentation';
		
		$this->load->view('includes/templateAdmin', $data);	

   }
	
  function editTexte()
	{
			
		$this->load->library('form_validation');
   		$this->form_validation->set_rules('titre', 'Titre', 'required|trim');	
   		$this->form_validation->set_rules('texte', 'Texte', 'required|trim');					
		 
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->session->set_flashdata('message_type', 'error');
       		$this->session->set_flashdata('message', 'Erreur');
			$path = '/admin/editerTexte/';
			redirect($path, 'refresh');	
		}
		else // passed validation proceed to post success logic
		{
		
		$id = $this->input->post('id');
   		$titre = $this->input->post('titre');
		$texte = $this->input->post('texte');
		$pageAccueil = $this->input->post('pageAccueil');
		
    			$data = array(
   					'titre' => $titre,
					'texte' => $texte,
					'pageAccueil' => $pageAccueil
				);
				
				$this->db->where('id', $id);

				if($this->db->update('presentation', $data) == TRUE) 
       			 {
					$this->session->set_flashdata('message_type', 'success');
       			    $this->session->set_flashdata('message', 'Success');
       				$path = '/admin/presentation/' ;
					redirect($path);		
       			 } 	 
       			 
   	    }
	}


	function deleteTexte()
	{
		$id = $this->uri->segment(3);
        $this->db->where('id', $id);
		
		if ($this->db->delete('presentation') == TRUE)
		{
			$path = '/admin/presentation/';
		    redirect($path); 
		}
			
	}
	
///////////////////////////////////////////////////
///////////////////////////////////////////////////
		
}

