<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_controller extends CI_Controller {

/*
|--------------------------------------
|   constructor funcion
|--------------------------------------
*/ 
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

        $this->load->model('admin/doctor/Basic_model','basic_model');
	    $this->load->model('admin/doctor/Appointment_model','appointment_model');
        $this->load->model('admin/doctor/Overview_model','overview_model');
        $this->load->model('admin/doctor/Doctor_model','doctor_model');
        $this->load->model('admin/email/Email_model','email_model');
  }


#------------------------------------------------
#       view appointment form
#------------------------------------------------
	public function index()
	{
    $data['title'] = "Create New Appointment";
    $data['doctor'] = $this->doctor_model->get_all_doctor();

		$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/view_create_appointment');
		$this->load->view('admin/doctor/_footer');
	}

#------------------------------------------------
#  appointment list view 
#------------------------------------------------- 
	public function appointment_list()
	{
        $data['title'] = "Appointment List";
        $data['appointmaent_info'] = $this->appointment_model->get_appointment_list();
       	$this->load->view('admin/doctor/_header',$data);
        $this->load->view('admin/doctor/_left_sideber');
        $this->load->view('admin/doctor/view_appointment_list');
        $this->load->view('admin/doctor/_footer');
	}



#------------------------------------------------
#  Today appointment list view 
#------------------------------------------------- 
  public function today_appointment_list()
  {
    $data['title'] = "Today Appointment List";
    $data['appointmaent_info'] = $this->overview_model->today_appointment();
    

    $this->load->view('admin/doctor/_header',$data);
    $this->load->view('admin/doctor/_left_sideber');
    $this->load->view('admin/doctor/view_today_appointment_list');
    $this->load->view('admin/doctor/_footer');
  }

#------------------------------------------------
#  Today appointment list view 
#------------------------------------------------
 
  public function today_gate_appointment_list()
  {

    $data['appointmaent_info'] = $this->overview_model->to_day_get_appointment();


    $this->load->view('admin/doctor/_header',$data);
    $this->load->view('admin/doctor/_left_sideber');
    $this->load->view('admin/doctor/view_today_get_appointment_list');
    $this->load->view('admin/doctor/_footer');

  }

#----------------------------------------------
#    random coad genaretor of appointmaent id
#----------------------------------------------  
  function randstrGen($len) 
  {
    $result = "";
    $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
    $charArray = str_split($chars);
    for($i = 0; $i < $len; $i++) {
            $randItem = array_rand($charArray);
            $result .="".$charArray[$randItem];
    }
    return $result;
  }


#----------------------------------------------
#    save appointmaent 
#----------------------------------------------  

  public function save_appointment()
  {
    	$this->form_validation->set_rules('date', 'Date', 'required');
    	$this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('doctor_id', 'doctor', 'required'); 
        $this->form_validation->set_rules('sequence', 'sequence', 'trim|required');


      if($this->form_validation->run()==true){
          
            date_default_timezone_set("Asia/Dhaka");

            $h = date('h')-1;
            $get_by = $this->session->userdata('log_id');
        	$appointment_id = "A".date('y').strtoupper($this->randstrGen(5));
            $saveData = array(
            'date' => $this->input->post('date'),
            'patient_id' => $this->input->post('patient_id'),
            'phone_number' => $this->input->post('phone'),
            'appointment_id' =>$appointment_id,
            'schedul_id' => $this->input->post('schedul_id'),
            'sequence' => $this->input->post('sequence'),
            'doctor_id' => $this->input->post('doctor_id'),
            'problem' => $this->input->post('problem'),
            'get_date_time' => date("Y-m-d h:i:s"),
            'get_by' => $get_by
            );

          $check =  $this->appointment_model->Check_appointment($this->input->post('date'),$this->input->post('phone'));
          
          if(!empty($check)){
              $this->session->set_flashdata('exception',display('appointment_error_msg'));
              redirect('admin/doctor/Appointment_controller');
          } else {

              $this->appointment_model->SaveAppoin($saveData);
              $info = $this->basic_model->get_appointment_print_result($appointment_id);
              #-----------------------------------------
              // sms information save in sms_info table

              $start = @$info->start_time;
              $patient_time = $info->date.' '.date('h:i:s', strtotime($start));
              
              $save_sms_info = array(
                'patient_id'        => $info->patient_id,
                'doctor_id'         => $info->doctor_id,
                'phone_no'          => $info->patient_phone,
                'appointment_date'  =>$patient_time,
                'appointment_id'    =>$appointment_id
                ); 

              $this->appointment_model->Save_sms_info($save_sms_info);
              #-------------------------------

              #-------------------------------
              $sms_gateway_info = $this->db->select("*")->from('sms_gateway')->where('default_status',1)->get()->row();
              // messate teamplate
              $teamplate_info = $this->db->select("*")->from('sms_teamplate')->where('default_status',1)->get()->row();
              // doctor
              $dData = $this->db->get_where('doctor_tbl', ['doctor_id =' => $this->session->userdata('doctor_id')])->row();
              

              #------------------------------------------
              # sms_setting 
              #------------------------------------------   
                if(!empty($teamplate_info) && !empty($sms_gateway_info)) {

                     $template = $this->smsgateway->template([
                         'doctor_name'      => $dData->doctor_name,
                         'appointment_id'   => $appointment_id,
                         'patient_name'     => $info->family_name,
                         'patient_id'       => $info->patient_id,
                         'sequence'         => $info->sequence, 
                         'appointment_date' => date('d F Y',strtotime($info->date)),
                         'message'          => $teamplate_info->teamplate

                     ]); 
                      
                     $this->smsgateway->send([
                         'apiProvider' => $sms_gateway_info->provider_name,
                         'username'    => $sms_gateway_info->user,
                         'password'    => $sms_gateway_info->password,
                         'from'        => $sms_gateway_info->authentication,
                         'to'          => $info->patient_phone,
                         'message'     => $template
                     ]);

                 #------------------------------
                  // save sms delivary data
                  $save_coustom = array(
                    'gateway'     => $sms_gateway_info->provider_name,
                    'reciver'     => $info->patient_phone,
                    'message'     => $template       
                  );
                 $this->db->insert('custom_sms_info',$save_coustom);
              }
              #------------------------------
              # End SMS Sending option
              #------------------------------

              #-----------------------------------------
              # email sending option
              #-----------------------------------------
              $email_config = $this->email_model->email_config();

              // Email information save in email_info table
              $start = $info->start_time;
              $appointment_date = $info->date.' '.date('h:i:s', strtotime($start));
              
              $save_email_info = array(
                'patient_id'                => $info->patient_id,
                'doctor_id'                 => $info->doctor_id,
                'patient_phone'             => $info->patient_phone,
                'patient_email'             => $info->patient_email,
                'appointment_date'          => $appointment_date,
                'appointment_id'            => $appointment_id
                ); 
              $this->appointment_model->Save_email_info($save_email_info);
              #-------------------------------
              if($email_config->at_appointment==1){
              // gate email template
              $email_temp_info = $this->db->select("*")->from('email_template')->where('default_status',1)->get()->row();
              
              if(!empty($email_temp_info) && !empty($info->patient_email)) {                   
                      $message = $this->template([
                         'doctor_name'      => $dData->doctor_name,
                         'appointment_id'   => $appointment_id,
                         'patient_name'     => $info->family_name,
                         'patient_id'       => $info->patient_id,
                         'sequence'         => $info->sequence, 
                         'appointment_date' => date('d F Y',strtotime($info->date)),
                         'message'          => $email_temp_info->email_template
                     ]); 
                #----------------------------
                    $config['protocol'] = $email_config->protocol;
                    $config['mailpath'] = $email_config->mailpath;
                    $config['charset'] = 'utf-8';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = $email_config->mailtype;
                    $this->email->initialize($config);

                    $this->email->from($email_config->sender, "Habitusana");
                    $this->email->to($info->patient_email);
                    $this->email->subject("Informazioni appuntamento");
                    $this->email->message($message);
                    $this->email->send();
                #-----------------------------
                // save email delivary data
                $save_email = array(
                  'delivery_date_time '=> date("Y-m-d h:i:s"),
                  'reciver_email '=> $info->patient_email,
                  'message'     => $message       
                );
                $this->db->insert('email_delivery',$save_email);
                } 
            }   
        }
           
        $this->my_appointment($appointment_id);

        } else{
        		$data['venue_info'] = $this->venue_model->get_venue_list();
				$this->load->view('admin/doctor/_header',$data);
				$this->load->view('admin/doctor/_left_sideber');
				$this->load->view('admin/doctor/view_create_appointment');
				$this->load->view('admin/doctor/_footer');
        }
  }

/*
|--------------------------------------
|    my_appointment view 
|--------------------------------------
*/ 
    public function my_appointment($appointment_id=NULL)
    {
        $query_result = $this->db->select("action_serial.*,
            patient_tbl.*,
            doctor_tbl.*,
            log_info.*")
            ->from('action_serial')
            ->join('patient_tbl', 'patient_tbl.patient_id = action_serial.patient_id')
            ->join('doctor_tbl', 'doctor_tbl.doctor_id = action_serial.doctor_id')
            ->join('log_info', ' log_info.log_id = doctor_tbl.log_id')
            ->where('action_serial.appointment_id',$appointment_id)
            ->get();
            $result = $query_result->row();


        $data['print'] = $result;
        $this->load->view('public/appointment_info',$data);

       
    }




    function template($config = null){
        $newStr = $config['message'];
        foreach ($config as $key => $value) {
            $newStr = str_replace("%$key%", $value, $newStr);
        } 
        return $newStr; 
    }
  
}