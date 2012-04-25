<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	 
	 function index()
	{
		$data = array();
		$this->load->model('site_model');
		
		$this->load->library('googlemaps');
		$config['center'] = '46.995709, 6.931829';
		$config['zoom'] = 'auto';
		$config['map_height'] = '210px';
		$config['map_width'] = '95.5%';
		
		$this->googlemaps->initialize($config);
		
		$data['map'] = $this->googlemaps->create_map();
		
		$data['presentation'] = $this->site_model->get_list_presentation();
		
		$data['main_content'] = 'site';
		$data['page_title'] = 'Accueil';
		$data['titlepage'] = 'accueil';
		
		$this->load->view('includes/template', $data);	
		
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
		$config['base_url'] = base_url().'index.php/site/news/';
		$config['total_rows'] = $nbr;
		$config['per_page'] = $per_page;
		$config['anchor_class'] = 'class="btn"';
		
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		
		$data['main_content'] = 'news';
		$data['page_title'] = 'News';
		$data['titlepage'] = 'news';
		
		$this->load->view('includes/template', $data);	
		
	}
	

	
	function presentation()
	{
		$data = array();
		$this->load->model('site_model');
		
		$data['presentation'] = $this->site_model->get_list_presentation();
		
		$data['main_content'] = 'presentation';
		$data['page_title'] = 'Présentation AREN';
		$data['titlepage'] = 'presentation';
		
		$this->load->view('includes/template', $data);	
		
	}
	
		
	function liens()
	{
		$data = array();
		$this->load->helper('new_helper');
		$this->load->model('site_model');
		
		$data['liens'] = $this->site_model->get_list_liens();
		
		$data['main_content'] = 'liens';
		$data['page_title'] = 'Liens utiles';
		$data['titlepage'] = 'liens';
		
		$this->load->view('includes/template', $data);	
		
	}

	function contact()
	{
		$data = array();
		$this->load->library('googlemaps');
		$this->load->model('site_model');
		$this->googlemaps->initialize();
		$data['map'] = $this->googlemaps->create_map();
		
		$data['main_content'] = 'contact';
		$data['page_title'] = 'Contact';
		$data['titlepage'] = 'contact';
		$data['slogan'] = 'Contactez-nous';
		
		$this->load->view('includes/template', $data);	
		
	}
	

function send() 
	{	
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		// field name, error message, validation rules
		$this->form_validation->set_rules('nom', 'Nom', 'trim|required');
		$this->form_validation->set_rules('telephone', 'Telephone', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'required');


		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'contact';
			$data['page_title'] = 'Contact';
			$data['titlepage'] = 'contact';
			$data['slogan'] = 'Contactez-nous';
			$this->load->view('includes/template', $data);	
		}
		else
		{
			// validation has passed. Now send the email
			$societe = $this->input->post('societe');
			$nom = $this->input->post('nom');
			$telephone = $this->input->post('telephone');
			$email = $this->input->post('email');
			$message = nl2br ( $this->input->post('message') );
			$catalogue = $this->input->post('catalogue');
			
			if ($catalogue == 'oui')
				{$veutCatalogue = 'Souhaite recevoir le catalogue';}
			else
				{$veutCatalogue = 'Ne souhaite pas recevoir le catalogue';}
			
			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('contact@jano-hair.com', 'JanoHair');
			
			$this->email->to('contact@janohair.ch'); 
			$this->email->bcc('pruntrut@yahoo.fr'); 
			
			$this->email->subject('Message depuis www.janohair.ch');	
			$this->email->message('<h2>Demande de renseignements</h2>
			<h3>Informations de contact</h3>
			<div>
			<p><strong style="display:block; width:240px;">Société:</strong>'.$societe.'</p>
			<p><strong style="display:block; width:240px;">Nom et Prénom:</strong>'.$nom.'</p>
			<p><strong style="display:block; width:240px;">Téléphone:</strong>'.$telephone.' </p>
			<p><strong style="display:block; width:240px;">Email: </strong>'.$email.' </p>
			<p><strong style="display:block; width:240px;">Catalogue: </strong>'.$veutCatalogue.' </p>
			</div>
			<div>
				<h3>Message:</h3>
				<p>'.$message.'</p>
			</div>');

			if($this->email->send())
			{
				$data['main_content'] = 'contact';
				$data['page_title'] = 'Contact';
				$data['titlepage'] = 'contact';
				$data['slogan'] = 'Contactez-nous';
				$data['notice'] = 'Merci pour votre message, nous vous répondrons au plus vite.';
				$this->load->view('includes/template', $data);	
			}

			else
			{
				show_error($this->email->print_debugger());
			}			
		}
	}

///////////////////////////////////////////////////
///////////////////////////////////////////////////
		
}

