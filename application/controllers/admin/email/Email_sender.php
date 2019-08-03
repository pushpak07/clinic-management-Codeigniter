<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email_sender extends CI_Controller {


	public	function __construct() { 
        parent::__construct(); 
        $this->load->library('session'); 
        $this->load->helper('form'); 
        $this->load->model('admin/email/Email_model','email_model');	
    	$result = $this->db->select('*')->from('web_pages_tbl')->where('name','timezone')->get()->row();
		
		date_default_timezone_set(@$result->details);
    } 


	public function index(){

		$emil_config = $this->email_model->email_config();
     
		if($emil_config->reminder==1){
			#----------------SMS API------------#
			$schedule = $this->db->select('email_schedule.*,email_template.*')
			->from('email_schedule')
			->join('email_template','email_template.email_temp_id=email_schedule.email_temp_id')
			->where('email_schedule.email_ss_status',1)
			->get()
			->result();	
    		$schedule_counter = $this->db->select("*")->from('email_schedule')->get()->num_rows();  

    	foreach ($schedule as $value) {
		    $email_info = $this->db->select('*')
		    ->from('email_info')
		    ->where('status',0)
		    ->get()
		    ->result();

		    #---------------------------
		    $schedule_data = explode(':', $value->email_schedule);
		    $days = $schedule_data[0]; 
		    $hours = $schedule_data[1];
		    $minutes = $schedule_data[2];
		    #---------------------------

			foreach ($email_info as $value1) {

				$date = $value1->appointment_date; 
				echo $email_date = date('Y-m-d h:i:s', strtotime("$date -$days days -$hours hours -$minutes minutes")); 			
				echo "<br>"; 
				echo	$today_date_time  = date("Y-m-d h:i:s");
				echo "<br>";
				$s = date("Y-m-d h:i:s");

				$today_date_time3  = date('Y-m-d h:i:s',strtotime("$s -5 minutes"));

				if($email_date <= $today_date_time && $email_date >=$today_date_time3){
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
			            if(!empty($information)) {

			             $sequence_time = $information->sequence-1;
                         $time = ($sequence_time * $information->per_patient_time);
                         $serial_time =date('h:i A', strtotime($information->start_time)+$time*60);

			                 $message = $this->template([
			                     'doctor_name'    => $information->doctor_name,
			                     'appointment_id' => $value1->appointment_id,
			                     'patient_name'   => $information->patient_name,
			                     'patient_id'     => $information->patient_id,
			                     'sequence'       => $serial_time, 
			                     'appointment_date' => date('d F Y',strtotime($information->date)),
			                     'message'        => $value->email_template
			                ]); 

						    #----------------------------
						           $this->load->library('email');
						           	$config['protocol'] = $emil_config->protocol;
							        $config['mailpath'] = $emil_config->mailpath;
							        $config['charset'] = 'utf-8';
							        $config['wordwrap'] = TRUE;
							        $config['mailtype'] = $emil_config->mailtype;
							        $this->email->initialize($config);

								     $this->email->from($emil_config->sender, "Habitusana");
								     $this->email->to($value1->patient_email);
								     $this->email->subject("Informazioni appuntamento");
								     $this->email->message($message);
								     $this->email->send();
							#------------------------------

					             //update email_info teable
					             $c = $value1->email_counter+1;
					             $this->db->set('email_counter',$c)
					             ->where('email_info_id',$value1->email_info_id)
					             ->update('email_info');

					             $this->db->set('status',1)
					             ->where('email_info_id', $value1->email_info_id)
					             ->where('email_counter >=', $schedule_counter)
					             ->update('email_info');
					            // delivery data 
								$email_delivery = array(
									'email_ss_id' => $value->email_ss_id,
									'reciver_email '=> $value1->patient_email,
									'delivery_date_time' => $email_date,
									'email_info_id' => $value1->email_info_id,
									'message' => $message
								);
							//delivery information insert
							$this->db->insert('email_delivery',$email_delivery);
						}//end if          
					}//end if
				}
			}
		}
	}

#-----------------------------------
	function template($config1 = null){
        $newStr = $config1['message'];
        foreach ($config1 as $key => $value) {
            $newStr = str_replace("%$key%", $value, $newStr);
        } 
        // print_r($newStr); exit;
        return $newStr; 
    }

}