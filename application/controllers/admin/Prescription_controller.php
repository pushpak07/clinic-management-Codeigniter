<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prescription_controller extends CI_Controller {

#-----------------------------------------------
#    prescription_list
#----------------------------------------------
	public function __construct() 
	{
		parent::__construct();
	    $this->load->library('session');
		$log_id = $this->session->userdata('log_id');	
		$session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
		

        $this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->model('admin/Prescription_model','prescription_model');	 	
        $this->load->model('admin/Doctor_model','doctor_model');	 	
        $this->load->model('admin/Overview_model','overview_model');	 	
	 	
	 	$result = $this->db->select('*')->from('web_pages_tbl')->where('name','timezone')->get()->row();		
		date_default_timezone_set(@$result->details);
	}


#-----------------------------------------------
#    prescription_list
#---------------------------------------------- 
	public function prescription_list()
	{
	 	$data['Prescription'] = $this->prescription_model->prescription_list();
	 	
	 	$this->load->view('admin/_header',$data);
		$this->load->view('admin/_left_sideber');
		$this->load->view('admin/view_prescription_list');
		$this->load->view('admin/_footer');
	 
	}


#-----------------------------------------------
#    prescription_list
#---------------------------------------------- 
	public function today_prescription_list()
	{
		$data['title'] = "Today Prescription List";
	 	$data['Prescription'] = $this->overview_model->today_prescription();
	 	$this->load->view('admin/_header',$data);
		$this->load->view('admin/_left_sideber');
		$this->load->view('admin/view_today_prescription_list');
		$this->load->view('admin/_footer');	 
	}



#-------------------------------------------
#		view prescription
#-------------------------------------------		 

	public function prescription()
	{
		$result = $this->db->select('*')->from('prescription_data')->where('prescription_id',$prescription_id)->get()->row();
	    return $result;
	}

#--------------------------------------------
#		veiw my_prescription
#--------------------------------------------
	public function my_prescription($appointment_id=NULL)
	{

		$prescription = $p_data = $this->db->select('*')->from('prescription_data')->where('appointment_id',$appointment_id)->get()->row();
	    $pres_data['prescription'] = $prescription;
	 	$pres_data['doctor'] = $this->doctor_model->get_doctor_by_id($this->session->userdata('doctor_id'));
	 	
	 	$pres_data['patient'] = $this->db->select('*')->from('patient_tbl')->where('patient_id',$prescription->patient_id)->get()->row();
	 	
	 		$pres_data['pattern'] = $this->db->select('*')
			->from('print_pattern')
			->get()
			->row();

	 		if($pres_data['pattern']!==NULL){
				$pres_data['others'] = $this->load->view('pattern/'.$pres_data['pattern']->pattern_no.'',$pres_data,true);
			}

			$pres_data['default'] = $this->load->view('pattern/default2',$pres_data,true); 
			$this->load->view('pattern/prescription',$pres_data);  

	}
	

}
