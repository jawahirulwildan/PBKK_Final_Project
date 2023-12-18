<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bicycle_Model extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if ( ! $this->session->userdata('isLogin') || $this->session->userdata('type')!="admin") { 
            redirect('controller_login');
        }
		
		$this->load->database();
		$this->load->model('model_manufacturer');
		$this->load->model('model_bicycle_model');
	}


	public function index()
	{
		$data['manufacturers'] = $this->model_manufacturer->getAllManufacturers();
		$data['models'] = $this->model_bicycle_model->getAllModels();
		$this->parser->parse('admin/view_bicycle_model', $data);
	}

	public function addmodel()
	{	
		if(! $this->input->post('buttonSubmit')) {
			redirect(base_url('admin/bicycle_model'));
		}

		else {
			$model_name = $this->input->post('model_name');
			$manufacturer_id = $this->input->post('manufacturer_id');
			$description = $this->input->post('model_description');

			$this->model_bicycle_model->insertmodel($model_name, $manufacturer_id, $description);
			$this->session->set_flashdata('message','Model Created Successfully.');
			redirect(base_url('admin/bicycle_model'));
		}
	}

	public function deleteModel($cid)
	{	
        $this->model_bicycle_model->deleteModel($cid);
        $this->session->set_flashdata('message','Model Deleted Successfully.');
        redirect(base_url('admin/bicycle_model'));
	}
}