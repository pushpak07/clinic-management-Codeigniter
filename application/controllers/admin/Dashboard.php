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
		$user_type = $this->session->userdata('user_type'); 

	    $session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
		$user_type = $this->session->userdata('user_type'); 
        if($user_type!=1){
         redirect('logout');
        }

	    $this->load->model('admin/Overview_model','overview_model');
	    $this->load->model('admin/Doctor_model','doctor_model');
	    $this->load->model('admin/Appointment_model','appointment_model');
	    $this->load->model('admin/Prescription_model','prescription_model');

	}

#------------------------------------------------
#       view home page form
#------------------------------------------------
	public function index()
	{
		$user_type = $this->session->userdata('user_type');

		if($user_type==1){

		 $data['last_30'] = $this->overview_model->last_30(); 
		 $data['last_15'] = $this->overview_model->last_15(); 
		 $data['last_7'] = $this->overview_model->last_7(); 

		 //patient
		 $data['patient_30_day'] = $this->overview_model->patient_30_day();
		 $data['patient_15_day'] = $this->overview_model->patient_15_day();
		 $data['patient_7_day'] = $this->overview_model->patient_7_day();
		 
		 // patient
		 $data['today_patient'] = $this->overview_model->today_patient();
		 $data['total_patient'] = $this->overview_model->total_patient();
		#appointment
		 $data['total_appointment'] = $this->appointment_model->get_appointment_list();
		 $data['today_appointment'] = $this->overview_model->today_appointment();
		 $data['to_day_get_appointment'] = $this->overview_model->to_day_get_appointment();
		
		# prescription
		$data['today_prescription'] = $this->overview_model->today_prescription();
		$data['total_prescription'] = $this->prescription_model->prescription_list();


		$data['doctor'] = $this->doctor_model->get_all_doctor();
		
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_left_sideber');
		$this->load->view('admin/_deshboard');
		$this->load->view('admin/_footer');

		} else {
			redirect('admin/doctor/Dashboard');
		}
	}

}