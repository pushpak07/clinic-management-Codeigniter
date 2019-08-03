<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {

	#----------------------------------#
	#	constructor function
	#-----------------------------------#
		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->helper('form');

			$this->load->model('Auth_model','auth_model');
		}

	#----------------------------------#
	#	view login form 
	#----------------------------------#
		public function login()
		{
			$this->load->view('admin/login');
		}

	#---------------------------------#
	#  	authentication
	#---------------------------------#

	public function authentication()
	{
		#----------------------------------------------------#
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	    $this->form_validation->set_rules('type','Type','required');
	   
		#----------------------------------------------------#
		if ($this->form_validation->run()==true) {

			$email = $this->input->post('email',true);
			$password = $this->input->post('password',true);
			$type = $this->input->post('type',true);
			#------------------------------------------------#
			$acess_data = $this->auth_model->authenticet($email,$password,$type); 
			
			#------------------------------------------------#
			if($acess_data != false) {

				if($acess_data->user_type==1) {
					$session_data = array(
                    'log_id' => $acess_data->log_id,
                    'doctor_id' => $acess_data->doctor_id,
                    'doctor_name' => $acess_data->doctor_name,
                    'doctor_picture' => $acess_data->picture,
                    'email' => $acess_data->email,
                    'user_type' => $acess_data->user_type,
                    'session_id' => session_id(),
                    'logged_in' => TRUE
	                );
					$this->session->set_userdata($session_data);
					redirect('admin/Dashboard'); 

				} else if($acess_data->user_type==2){
					$session_data = array(
                    'log_id' => $acess_data->log_id,
                    'doctor_id' => $acess_data->doctor_id,
                    'doctor_name' => $acess_data->doctor_name,
                    'doctor_picture' => $acess_data->picture,
                    'email' => $acess_data->email,
                    'user_type' => $acess_data->user_type,
                    'session_id' => session_id(),
                    'logged_in' => TRUE
	                );
					$this->session->set_userdata($session_data);
					redirect('admin/doctor/Dashboard');

				}  else if($acess_data->user_type==3){

					$session_data = array(
                    'log_id' => $acess_data->log_id,
                    'user_id' => $acess_data->user_id,
                    'name' => $acess_data->full_name,
                    'picture' => $acess_data->picture,
                    'user_email' => $acess_data->user_email,
                    'user_type' => $acess_data->user_type,
                    'session_id' => session_id(),
                    'logged_in' => TRUE
	                );
	                
					$this->session->set_userdata($session_data);
					redirect('admin/user/Appointment_controller'); 
				}               

			} else {
	         	$this->session->set_flashdata('exception',display('login_msg'));
	            $this->load->view('admin/login');
			}
		#------------------------------------------------#
		} else {
			$this->load->view('admin/login');
		}
	}


	#----------------------------------------------#
	#	logout	
	#----------------------------------------------#	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	#-----------------------------------------------#	
}
