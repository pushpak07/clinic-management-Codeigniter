<?php defined('BASEPATH') OR exit('No direct script access allowed');

class History_controller extends CI_Controller {

/*
|-----------------------------------------------
|	 Constructor funcion
|-----------------------------------------------
*/
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');	
		$session_id = $this->session->userdata('session_id');	
	    
	    if($session_id == NULL ) {
	     redirect('logout');
	    }
	}
	
/*
|-----------------------------------------------
|	 patient_history funcion
|-----------------------------------------------
*/	
	public function patient_history($patient_id)
	{
		
		$data['p_info'] = $this->db->select('*')
		->from('patient_tbl')
		->where('patient_id',$patient_id)
		->get()
		->row();

		 $this->db->select("prescription_data.*,
             doctor_tbl.*");
         $this->db->from("prescription_data");
         $this->db->join('doctor_tbl', 'doctor_tbl.doctor_id = prescription_data.doctor_id '); 
         $this->db->where('prescription_data.patient_id',$patient_id);
         $this->db->order_by('prescription_data.prescription_id','DESC');
         $query = $this->db->get();
         $result = $query->result();
    	 $data['app_info'] = $result;
		 $this->load->view('public/view_patient_history',$data);

	}

	
	public function patient_medical_info($patient_id=NULL){

		$data['info'] = $this->db->select('patient_medical_info.*,patient_tbl.*')
		->from('patient_medical_info')
		->join('patient_tbl','patient_tbl.patient_id=patient_medical_info.patient_id')
		->where('patient_medical_info.patient_id',$patient_id)
		->get()
		->row();
		$this->load->view('public/patient_medical_info',$data);
	}



}

