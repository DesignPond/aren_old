<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestation extends CI_Controller {

	 
	 function index()
	{
		$data = array();
		
		$this->load->model('prestation_model');
		
		$this->load->library('googlemaps');
		$config['center'] = '46.995709, 6.931829';
		$config['zoom'] = 'auto';
		$config['map_height'] = '400px';
		$config['map_width'] = '96.6%';
		
		$this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();
		
		$data['main_content'] = 'prestation';
		$data['page_title'] = 'Prestations';
		$data['titlepage'] = 'prestation';
		
		$this->load->view('includes/template', $data);	
		
	}
	

///////////////////////////////////////////////////
///////////////////////////////////////////////////
		
}

