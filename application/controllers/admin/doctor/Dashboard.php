<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

#------------------------------------------------
#       constructor function
#------------------------------------------------
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
    	$user_type = $this->session->userdata('user_type'); 
        if($user_type!=2){
         redirect('logout');
        }
	    $this->load->model('admin/doctor/Overview_model','overview_model');
	    $this->load->model('admin/doctor/Appointment_model','appointment_model');
	    $this->load->model('admin/doctor/Patient_model','patient_model');
	}


#------------------------------------------------
#       view home page form
#------------------------------------------------
	public function index()
	{

		$data['last_30'] = $this->overview_model->last_30(); 
		$data['last_15'] = $this->overview_model->last_15(); 
		$data['last_7'] = $this->overview_model->last_7(); 

		 //patient
		 $data['patient_30_day'] = $this->overview_model->patient_30_day();
		 $data['patient_15_day'] = $this->overview_model->patient_15_day();
		 $data['patient_7_day'] = $this->overview_model->patient_7_day();
		 

		#patient
		$data['total_patient'] = $this->patient_model->get_all_patient();
		#appointment
		$data['to_day_get_appointment'] = $this->overview_model->to_day_get_appointment();
		$data['today_appointment'] = $this->overview_model->today_appointment();		
		$data['total_appointment'] = $this->appointment_model->get_appointment_list();	
		
		$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/_deshboard');
		$this->load->view('admin/doctor/_footer');
	}

}