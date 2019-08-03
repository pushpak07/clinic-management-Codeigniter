<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sms_sender extends CI_Controller {

/*
|--------------------------------------
|   constructor funcion
|--------------------------------------
*/ 
public function __construct() 
{
	parent::__construct();
	$this->load->library('session');
	$this->load->library('Smsgateway');
	$session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
		$user_type = $this->session->userdata('user_type'); 
        if($user_type!=1){
         redirect('logout');
        }
         
 	$result = $this->db->select('*')->from('web_pages_tbl')->where('name','timezone')->get()->row();
	
	date_default_timezone_set(@$result->details);	
}

#---------------------------------------
public function index(){
	#----------------SMS API------------#
	$schedule = $this->db->select('sms_schedule.*,sms_teamplate.*')
	->from('sms_schedule')
	->join('sms_teamplate','sms_teamplate.teamplate_id=sms_schedule.ss_teamplate_id')
	->where('sms_schedule.ss_status',1)
	->get()
	->result();	
    //schedule counter
    
   $schedule_counter = $this->db->select("*")->from('sms_schedule')->get()->num_rows();  
    	foreach ($schedule as $value) {
		    $sms_info = $this->db->select('*')
		    ->from('sms_info')
		    ->where('status',0)
		    ->get()
		    ->result();

			    #---------------------------
			    $schedule_data = explode(':', $value->ss_schedule);

			    $days = $schedule_data[0]; 

			    $hours = $schedule_data[1];

			    $minutes = $schedule_data[2];
			    #---------------------------

			foreach ($sms_info as $value1) {

				$date = $value1->appointment_date;
				$sms_date = date('Y-m-d h:i:s', strtotime("$date -$days days -$hours hours -$minutes minutes")); 			

				//echo "<br>";

				$today_date_time  = date("Y-m-d h:i:s");

				//echo "<br>";

				$s = date("Y-m-d h:i:s");

				$today_date_time3  = date('Y-m-d h:i:s',strtotime("$s -5 minutes"));

				if($sms_date <= $today_date_time & $sms_date >=$today_date_time3){
				#---------------------------
					$information = $this->db->select("action_serial.*,doctor_tbl.*,
			            patient_tbl.*,
			            venue_tbl.*,")

		              ->from('action_serial')

		              ->join('patient_tbl', 'patient_tbl.patient_id = action_serial.patient_id')
		              
		              ->join('doctor_tbl', 'doctor_tbl.doctor_id = action_serial.doctor_id')
		              
		              ->join('venue_tbl', ' venue_tbl.venue_id = action_serial.venue_id')
		              
		              ->where('action_serial.appointment_id',$value1->appointment_id)
		              
		              ->get()

		              ->row();

				#---------------------------  
				#---------------------------

				     $sms_gateway_info = $this->db->select('*')

				       ->from('sms_gateway')

				       ->where('default_status',1)

				       ->get()

				       ->row();
					#---------------------------

       				// sms_setting    

		            if(!empty($information) && !empty($sms_gateway_info)) {

		            	 $sequence_time = $information->sequence-1;
                         $time = ($sequence_time * $information->per_patient_time);
                         $serial_time =date('h:i A', strtotime($information->start_time)+$time*60);
		                 $template = $this->smsgateway->template([

		                     'doctor_name'    => $information->doctor_name,
		                     'appointment_id' => $value1->appointment_id,
		                     'patient_name'   => $information->patient_name,
		                     'patient_id'     => $information->patient_id,
		                     'sequence'       => $serial_time, 
		                     'appointment_date' => date('d F Y',strtotime($information->date)),
		                     'message'        => $value->teamplate

		                 ]); 
		       
		                 $this->smsgateway->send([

		                     'apiProvider' => $sms_gateway_info->provider_name,
		                     'username'    => $sms_gateway_info->user,
		                     'password'    => $sms_gateway_info->password,
		                     'from'        => $sms_gateway_info->authentication,
		                     'to'          => $value1->phone_no,
		                     'message'     => $template

		                 ]);

				             //update sms_info teable

				             $c = $value1->sms_counter+1;
				             $this->db->set('sms_counter',$c)
				             ->where('sms_info_id',$value1->sms_info_id)
				             ->update('sms_info');
				             
				             $this->db->set('status',1)
				             ->where('sms_info_id', $value1->sms_info_id)
				             ->where('sms_counter >=', $schedule_counter)
				             ->update('sms_info');

				            // delivery data 
							$sms_delivery = array(
								'ss_id' => $value->ss_id,
								'delivery_date_time' => $sms_date,
								'sms_info_id' => $value1->sms_info_id,
								'message' => $template
								);
							//delivery information insert
							$this->db->insert('sms_delivery',$sms_delivery);

		             }//end if

				}//end if
			}
		}
#---------------------------------------	
	}	

}

