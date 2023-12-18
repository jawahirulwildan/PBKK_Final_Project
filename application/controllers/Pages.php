<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('model_bicycle');
        $this->load->model('model_manufacturer');
        $this->load->model('model_bicycle_model');
	}

	public function index()
	{	
		// $data['bicycles'] = $this->model_bicycle->getAll();
		$data['bicycles'] = $this->model_bicycle->getLatest();
		$data['featured'] = $this->model_bicycle->getFeatured();
		$data['manufacturers'] = $this->model_manufacturer->getAllManufacturers();
		$data['models'] = $this->model_bicycle_model->getAllModels();
		
		$this->parser->parse('public/view_index', $data);   

        // $this->load->view('public/view_index');
	}

	public function show($bicycle_id)
	{
		$data['bicycle'] = $this->model_bicycle->getById($bicycle_id);
		
		$this->parser->parse('public/view_single.php', $data);
	}



}