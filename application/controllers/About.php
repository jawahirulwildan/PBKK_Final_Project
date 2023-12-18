<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        // Load your view_about.php file here
        $this->load->view('view_about');
    }
}