<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller {
    public function __construct()
	{
            
            parent::__construct();
            if($this->session->userdata('sess_ci_admin_islogged') != true ) {
                    redirect('admin/login', 'refresh');
            }
            //$this->load->model('client_model');
	}
	
	public function index()
	{  
	                  
            $this->load->view('layout/admin_header_internal');
            $this->load->view('admin/classes');
            $this->load->view('layout/admin_footer');
	}
	
	
	
	  
}