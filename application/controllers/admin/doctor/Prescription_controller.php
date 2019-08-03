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
    $user_type = $this->session->userdata('user_type'); 
        if($user_type!=2){
         redirect('logout');
        }

        $this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->model('admin/doctor/Prescription_model','prescription_model');
	 	$this->load->model('admin/doctor/Overview_model','overview_model');
	 	$this->load->model('admin/doctor/Doctor_model','doctor_model');
	 	$this->load->model('admin/Setup_model','setup_model');

	 	$result = $this->db->select('*')->from('web_pages_tbl')->where('name','timezone')->get()->row();		
		date_default_timezone_set(@$result->details);
	}


#-----------------------------------------------
#    prescription_list
#---------------------------------------------- 
	public function prescription_list()
	{
	 	$data['Prescription'] = $this->prescription_model->prescription_list();
	 	
	 	$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/view_prescription_list');
		$this->load->view('admin/doctor/_footer');	 
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

#-----------------------------------------
#			create new prescription 
#-----------------------------------------
	public function create_prescription($appointmaent_id = NULL)
	{

		
		$data['patient_info'] = $this->prescription_model->patient_info($appointmaent_id);
		$data['lang'] = $this->setup_model->get_language();
		$data['section'] = $this->setup_model->get_section();
	
	 	$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/create_prescription');
		$this->load->view('admin/doctor/_footer'); 	
	}

#-----------------------------------------
#       Save Prescription
#-----------------------------------------	
	public function save_prescription()
	{	

	 	$pdata['patient_id'] = $this->input->post('patient_id');
	 	$pdata['appointment_id'] = $this->input->post('appointment_id');
	 	$pdata['doctor_id'] = $this->session->userdata('doctor_id');
	 	$pdata['create_date_time'] = date("Y-m-d h:i:s");
	 	
	 	$data['chief_complain'] = $this->input->post('chief_complain');

	 	$t['medicine'] = $this->input->post('medicine');
	 	$h['harbs'] = $this->input->post('harbs');
	 	$comment['comment'] = $this->input->post('comment');
		$medd = array();

	 	for($i=0; $i<count($t['medicine']); $i++) {
	 		// $medd[$t['medicine'][$i]] = $h['harbs'][$i];
	 		// $medd['comment_'.$i] = $comment['comment'][$i];
	 		$medd['medicine'][$i] = array(
	 			'medicine' => $t['medicine'][$i],
	 			'harbs' => $h['harbs'][$i],
	 			'comment' => $comment['comment'][$i],
	 		);
	 	}
	 	
	 	$data['medicine_data'] = $medd;

	 	$data['inspecsion'] = $this->input->post('inspecsion');
	 	$data['treatment'] = $this->input->post('treatment');
	 	$data['tretment_plan'] = $this->input->post('tretment_plan');
	 	$data['treatment_goals'] = $this->input->post('treatment_goals');
	 	$data['doctor_told'] = $this->input->post('doctor_told');
	 	$data['treatment_effect'] = $this->input->post('treatment_effect');
	 	$data['treatment_evaluation'] = $this->input->post('treatment_evaluation');
	 	$data['referral_doctor'] = $this->input->post('referral_doctor');
	 	$data['work_injury'] = $this->input->post('work_injury');
	 	$data['traffic_accident'] = $this->input->post('traffic_accident');
	 	$data['veteran_number'] = $this->input->post('veteran_number');
	 	$data['custom_receipt'] = $this->input->post('custom_receipt');
	 	$data['diagnostics'] = $this->input->post('diagnostics');
	 	$data['additional_info'] = $this->input->post('additional_info');
	 	$data['overall_comment'] = $this->input->post('overall_comment');
	 	

	 	$pdata['data'] = json_encode($data);
	 	$this->db->insert('prescription_data',$pdata);

	 	$prescription_id = $this->db->insert_id();

	 	redirect('admin/doctor/Prescription_controller/get_prescription/'.$prescription_id);

	}		 


#------------------------------------------------
#		create new prescription view form
#------------------------------------------------		 
	public function  create_new_prescription()
	{
		
		$data['section'] = $this->setup_model->get_section();
		$data['disease'] = $this->setup_model->get_disease();
		$data['category'] = $this->setup_model->get_category();
		$data['classification'] = $this->setup_model->get_classification();
		$data['harbs'] = $this->setup_model->get_medicine_harbs();
		
	 	$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/create_new_Prescription');
		$this->load->view('admin/doctor/_footer');
	}


#-----------------------------------------------
#    random coad genaretor of appointmaent id
#----------------------------------------------    

	function randstrGen($mode=null,$len=null)
	{
	    $result = "";
	    if($mode == 1):
	        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	    elseif($mode == 2):
	        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    elseif($mode == 3):
	        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
	    elseif($mode == 4):
	        $chars = "0123456789";
	    endif;

	    $charArray = str_split($chars);
	    for($i = 0; $i < $len; $i++) {
            $randItem = array_rand($charArray);
            $result .="".$charArray[$randItem];
	    }
	    return $result;
	}

#-------------------------------------------
#		view prescription
#-------------------------------------------		 

	public function get_prescription($prescription_id)
	{
		$pres_data['prescription'] = $this->db->select('*')
		->from('prescription_data')
		->where('prescription_id',$prescription_id)
		->where('doctor_id',$this->session->userdata('doctor_id'))
		->get()
		->row();

	 	$pres_data['doctor'] = $this->doctor_model->get_doctor_by_id($this->session->userdata('doctor_id'));
	 	
	 	$pres_data['patient'] = $this->db->select('*')->from('patient_tbl')->where('patient_id',$this->input->post('patient_id'))->get()->row();
	 	
	 	//$this->load->view('public/prescription',$pres_data);


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



#-------------------------------------------
#		view prescription
#-------------------------------------------		 

	public function prescription($prescription_id)
	{
		$result = $this->db->select('*')
		->from('prescription_data')
		->where('prescription_id',$prescription_id)
		->get()
		->row();
	    return $result;
	}

#--------------------------------------------
#		veiw my_prescription
#--------------------------------------------
	public function my_prescription($prescription_id)
	{
	    $prescription = $this->prescription($prescription_id);


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


	 	//$this->load->view('public/prescription',$pres_data);
	}


}
