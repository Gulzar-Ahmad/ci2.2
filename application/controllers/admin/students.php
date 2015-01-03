<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {
    public function __construct()
	{
            
            parent::__construct();
            if($this->session->userdata('sess_ci_admin_islogged') != true ) {
                    redirect('admin/login', 'refresh');
            }
			 $this->load->model('student');
			 $this->load->library("form_validation");
            //$this->load->model('client_model');
	}
	
	public function index()
	{    
	          
	        
	        $data=$this->student->student_show_record();
			$this->load->view('layout/admin_header_internal');
            $this->load->view('admin/student', array('data'=>$data));
            $this->load->view('layout/admin_footer');
		
	}
	public function add()
	{
		    $this->form_validation->set_rules("first_name","First Name","required|xss_clear");
            $this->form_validation->set_rules("last_name","Last Name");
            $this->form_validation->set_rules("email","Email Address", "required");
            
            if($this->form_validation->run()==FALSE)
            {
                $this->session->set_userdata(array(
						'sess_error_type' => "error",
						'sess_error_msges' => "Your data is not inserted successfull verify first!",
						
						 ));
						 
		    	 $this->session->set_userdata(array(
			
			    'first_name1'    => $this->input->post('first_name'),
				'last_name1'     => $this->input->post('last_name'),
				'email1'         => $this->input->post('email'),
				'mobile1'        => $this->input->post('mobile'),
				'address1'       => $this->input->post('address'),
				'last_activity1' => $this->input->post('last_activity'),
				'parent_id1' => $this->input->post('parent_id'),
				
				'creation_date1'    => $this->input->post('creation_date'),
			
			));
				
				
				 
				redirect('admin/students', 'refresh');
            }  
            else 
            {
				     $this->session->set_userdata(array(
						'sess_msges_type' => "success",
						'sess_msges' => "Your data inserted successfull....",
						 ));
				 $data = array(
				'first_name'    => $this->input->post('first_name'),
				'last_name'    => $this->input->post('last_name'),
				'email'         => $this->input->post('email'),
				'mobile'        => $this->input->post('mobile'),
				'address'       => $this->input->post('address'),
				'last_activity' => $this->input->post('last_activity'),
				'parent_id' => $this->input->post('parent_id'),
				'last_activity' => $this->input->post('last_activity'),
				'creation_date'    => $this->input->post('creation_date'),
				);
				
				$this->student->add_student($data);
				
				 $this->session->set_userdata(array(
			
			    'first_name1'    => '',
				'last_name1'     => '',
				'email1'         => '',
				'mobile1'        => '',
				'address1'       => '',
				'last_activity1' => '',
				'parent_id1' => '',
				
				'creation_date1'    => ''
			));
				
				redirect('admin/students', 'refresh');
                
            }   
		
	}
	public function update()
	{
		$this->session->set_userdata(array(
                    'sess_update_type' => "update",
					'sess_update' => "Your data updated successfully....",
				
			 ));
		    $id= $this->input->post('student_id');
		   	$data = array(
			'first_name'    => $this->input->post('first_name'),
			'email'         => $this->input->post('email'),
			'mobile'        => $this->input->post('mobile'),
			'address'       => $this->input->post('address'),
			'last_activity' => $this->input->post('last_activity')
			);
			
			$this->student->update_student($id,$data);
			 redirect('admin/students', 'refresh');
		
		  
	}
	public function delete()
    {
		$this->session->set_userdata(array(
                    'sess_delete_type' => "delete",
					'sess_delete' => "Your data deleted successfully....",
				
			   ));
                    $id=$this->input->post('student_id');
                    $this->student->delete_student($id);
               
                    redirect('admin/students', 'refresh');
                         
    }
	
	
	
	  
}