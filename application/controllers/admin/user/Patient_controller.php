<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_controller extends CI_Controller {
/*
|--------------------------------------
|   Constructor function
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
        if($user_type!=3){
         redirect('logout');
        }
        $this->load->model('admin/Patient_model','patient_model');
        $this->load->model('admin/Overview_model','overview_model');
        $this->load->model('admin/email/Email_model','email_model');
        $this->load->model('admin/Doctor_model','doctor_model');
    
  }

/*
|--------------------------------------
|     view all patient list
|--------------------------------------
*/
	public function patient_list()
	{
    $data['title'] = "Patient List";
		$data['patient_info'] = $this->patient_model->get_all_patient();
		$this->load->view('admin/user/_header',$data);
		$this->load->view('admin/user/_left_sideber');
		$this->load->view('admin/user/view_patient_list');
		$this->load->view('admin/user/_footer');
	}


/*
|--------------------------------------
|     Today patient list
|--------------------------------------
*/
    public function today_patient_list()
    {
        $data['title'] = "Today Patient List";
        $data['patient_info'] = $this->overview_model->today_patient();
        $this->load->view('admin/user/_header',$data);
        $this->load->view('admin/user/_left_sideber');
        $this->load->view('admin/user/view_today_patient_list');
        $this->load->view('admin/user/_footer');
    }  
/*
|--------------------------------------
|   Create a new patient view
|--------------------------------------
*/
	public function create_new_patient()
	{
        $data['title'] = "Create New Patient";
		$this->load->view('admin/user/_header',$data);
		$this->load->view('admin/user/_left_sideber');
		$this->load->view('admin/user/view_create_patient');
		$this->load->view('admin/user/_footer');
	}
/*
|--------------------------------------
|   patient id genaretor
|--------------------------------------
*/


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


/*
|--------------------------------------
| save patient to patient_tbl
|--------------------------------------
*/

	public function save_patient()
	{

        // $this->form_validation->set_rules('patient_id', 'Patient id', 'required');
    	$this->form_validation->set_rules('phone', 'Phone Number is already exist, ', 'trim|required|is_unique[patient_tbl.patient_phone]|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[log_info.email]');         
   
      if ($this->form_validation->run()==true) {
          // get picture data
          if (@$_FILES['picture']['name']){
              $config['upload_path']   = './assets/uploads/patient/';
              $config['allowed_types'] = 'gif|jpg|jpeg|png';
              $config['overwrite']     = false;
              $config['max_size']      = 1024;
              $config['remove_spaces'] = true;
              $config['max_filename']   = 10;
              $config['file_ext_tolower'] = true;
              
              $this->load->library('upload', $config);
              if (!$this->upload->do_upload('picture')){
                  $this->session->set_flashdata('exception',"<div class='alert alert-danger msg'>".display('image_upload_msg')."</div>");
        			redirect('admin/user/Patient_controller/create_new_patient');
              } else {
              $data = $this->upload->data();
              $image = base_url($config['upload_path'].$data['file_name']);
                #------------resize image------------#
                $this->load->library('image_lib');
                $config['image_library'] = 'gd2';
                $config['source_image'] = $config['upload_path'].$data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']     = 250;
                $config['height']   = 200;

                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                #-------------resize image----------#
              }
            } else {
              $image = "";
            }
        #------------------------------------------------#
 
            $create_date = date('Y-m-d h:i:s');
            $birth_date = date('Y-m-d',strtotime($this->input->post('birth_date',TRUE)));
            $patient_id = ("P".date('y').strtoupper($this->randstrGen(2,4)));           
            $savedata =  array(
                'title'             => $this->input->post('title',TRUE),
                'patient_id'        => $patient_id,
                'family_name'       => $this->input->post('family_name',TRUE),
                'given_name'        => $this->input->post('given_name',TRUE),
                'patient_email'     => $this->input->post('email',true),
                'patient_phone'     => $this->input->post('phone',TRUE), 
                'mobile_number'     => $this->input->post('mobile_number',TRUE), 
                'suburb'            => $this->input->post('suburb',TRUE), 

                'post_code'         => $this->input->post('post_code',TRUE), 
                'emg_family_name'   => $this->input->post('emg_family_name',TRUE), 
                'emg_title'         => $this->input->post('emg_title',TRUE), 
                'emg_given_name'    => $this->input->post('emg_given_name',TRUE), 
                'emg_phone'         => $this->input->post('emg_phone',TRUE), 
                'emg_mobile'        => $this->input->post('emg_mobile',TRUE), 

                'birth_date'        => $birth_date,
                'sex'               => $this->input->post('gender',TRUE),
                'blood_group'       => $this->input->post('blood_group',TRUE),
                'address'           => $this->input->post('address',TRUE),
                'picture'           => $image,
                'create_by'         => $this->session->userdata('log_id'),
                'create_date'       =>$create_date
            );

            $savedata = $this->security->xss_clean($savedata); 
            $this->patient_model->save_patient($savedata);


            $madical =  array(

                'patient_id'            => $patient_id,
                'dob'                   => $birth_date,
                'food_allergies'        => $this->input->post('food_allergies',TRUE),
                'bleed_tendency'        => $this->input->post('bleed_tendency',true),
                'heart_disease'         => $this->input->post('heart_disease',TRUE), 
                'high_blood_pressure'   => $this->input->post('high_blood',TRUE), 
                'surgeries'             => $this->input->post('surgeries',TRUE), 
                'accidents'             => $this->input->post('accidents',TRUE), 

                'diabetic'              => $this->input->post('diabetic',TRUE), 
                'surgeries'             => $this->input->post('surgeries',TRUE), 
                'others'                => $this->input->post('others',TRUE), 

                'high_risk_diseases'    => $this->input->post('high_risk_diseases',TRUE), 
                'family_history'        => $this->input->post('family_history',TRUE), 
                'current_medication'    => $this->input->post('current_medication',TRUE), 

                'others_msurance'       => $this->input->post('otheres_msrance',TRUE),
                'others_comcare'        => $this->input->post('others_comcare',TRUE),
                'others_tac'            => $this->input->post('others_tac',TRUE),
                'others_low_income'     => $this->input->post('others_low_income',TRUE),
                'others_reffer'         => $this->input->post('others_reffer',TRUE),
                'subscription'          => $this->input->post('subscription',TRUE),
                'female_pregnent'       => $this->input->post('female_pregnent',TRUE),
                'female_breast_feeding' => $this->input->post('female_breast_feeding',TRUE),
                
            );

            $this->db->insert('patient_medical_info',$madical);

            $email_config1 = $this->email_model->email_config();
            #-------------------------------
              if(@$email_config1->at_registration){
              // gate email template
              $email_temp_info = $this->db->select("*")->from('email_template')->where('default_status',1)->where('template_type',1)->get()->row();
             
            
                if(!empty($email_temp_info)) {     
                        $message = $this->template([
                           'patient_name'     => $this->input->post('name',TRUE),
                           'patient_id'       => $this->input->post('patient_id',TRUE),
                           'phone'       => $this->input->post('phone',TRUE),
                           'date' => date("Y-m-d h:i:s"),
                           'message'          => $email_temp_info->email_template
                       ]); 

                  #----------------------------
                      $config['protocol'] = $email_config1->protocol;
                      $config['mailpath'] = $email_config1->mailpath;
                      $config['charset'] = 'utf-8';
                      $config['wordwrap'] = TRUE;
                      $config['mailtype'] = $email_config1->mailtype;
                      $this->email->initialize($config);

                       $this->email->from($email_config1->sender, "Doctor");
                       $this->email->to($this->input->post('email'));
                       $this->email->subject("Registration");
                       $this->email->message($message);
                       $this->email->send();
                  #-----------------------------
                       
                  // save email delivary data
                  $save_email = array(
                    'delivery_date_time '=> date("Y-m-d h:i:s"),
                    'reciver_email '=> $this->input->post('email'),
                    'message'     => $message       
                  );
                  
                  $this->db->insert('email_delivery',$save_email);
                } 
              }

            $da['info'] = $savedata;
            $da['doctor'] = $this->doctor_model->get_all_doctor();
            $this->load->view('admin/user/_header',$da);
            $this->load->view('admin/user/_left_sideber');
            $this->load->view('admin/user/view_create_patient_appointment');
            $this->load->view('admin/user/_footer');

        } else {

            $data['old'] = (object) @$_POST;
            $this->load->view('admin/user/_header',$data);
      		$this->load->view('admin/user/_left_sideber');
      		$this->load->view('admin/user/view_create_patient');
      		$this->load->view('admin/user/_footer');

      	}
	}



#--------------------------------------
 function template($config = null){
        $newStr = $config['message'];
        foreach ($config as $key => $value) {
            $newStr = str_replace("%$key%", $value, $newStr);
        } 
        
        return $newStr; 
  }

/*
|--------------------------------------
|   delete patient to patient_tbl
|--------------------------------------
*/ 
  public function delete_patient($patient_id)
  {
      $this->db->where('patient_id',$patient_id);
      $this->db->delete('patient_tbl');
      $this->session->set_flashdata('message',"<div class='alert alert-success msg'>".display('delete_msg')."</div>");
      redirect('admin/user/Patient_controller/patient_list');
  }
  
/*
|--------------------------------------
|    patient edit form view 
|--------------------------------------
*/ 
  public function patient_edit($patient_id)
  {
    $data['title'] = "Patient Edit";
    $data['patient_info'] = $this->patient_model->get_patient_inde_info(@$patient_id);
    $data['madical_info'] = $this->patient_model->get_patient_madical_info(@$patient_id);

    $this->load->view('admin/user/_header',$data);
    $this->load->view('admin/user/_left_sideber');
    $this->load->view('admin/user/view_edit_patient');
    $this->load->view('admin/user/_footer');
  }

/*
|--------------------------------------
|    patient edit save to patient_tbl
|--------------------------------------
*/    
  public function edit_save_patient() {
        
    $this->form_validation->set_rules('phone', 'Phone Number is already exist, ', 'trim|required|is_unique[patient_tbl.patient_phone]|min_length[6]|max_length[15]');
    $patient_id = $this->input->post('patient_id');

      if ($this->form_validation->run()==TRUE) {
          // get picture data
              if (@$_FILES['picture']['name']) {
                $ext = strtolower(pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION));
                $config['upload_path']          = './assets/uploads/patient/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['overwrite']     = false;
                $config['max_size']      = 1024;
                $config['remove_spaces'] = true;
                $config['max_filename']   = 5;
                $config['file_ext_tolower'] = true;
                
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('picture')) {
                     $sdata = array('errorMsg' => 'Image Dos not upload.');
                     $this->session->set_userdata($sdata);
                } else {
                  $data = $this->upload->data();
                  $image = base_url($config['upload_path'].$data['file_name']);
                  #------------resize image------------#
                  $this->load->library('image_lib');
                  $config['image_library'] = 'gd2';
                  $config['source_image'] = $config['upload_path'].$data['file_name'];
                  $config['create_thumb'] = FALSE;
                  $config['maintain_ratio'] = FALSE;
                  $config['width']     = 250;
                  $config['height']   = 200;

                  $this->image_lib->clear();
                  $this->image_lib->initialize($config);
                  $this->image_lib->resize();
                  #-------------resize image----------#
                }

              } else {
                $image = $this->input->post('image',TRUE);
              }
                $birth_date = date('Y-m-d',strtotime($this->input->post('birth_date',TRUE)));

              

                $savedata =  array(

                    'title'             => $this->input->post('title',TRUE),
                    'family_name'       => $this->input->post('family_name',TRUE),
                    'given_name'        => $this->input->post('given_name',TRUE),
                    'patient_phone'     => $this->input->post('phone',TRUE), 
                    'mobile_number'     => $this->input->post('mobile_number',TRUE), 
                    'suburb'            => $this->input->post('suburb',TRUE), 

                    'post_code'         => $this->input->post('post_code',TRUE), 
                    'emg_family_name'   => $this->input->post('emg_family_name',TRUE), 
                    'emg_title'         => $this->input->post('emg_title',TRUE), 
                    'emg_given_name'    => $this->input->post('emg_given_name',TRUE), 
                    'emg_phone'         => $this->input->post('emg_phone',TRUE), 
                    'emg_mobile'        => $this->input->post('emg_mobile',TRUE), 

                    'birth_date'        => $birth_date,
                    'sex'               => $this->input->post('gender',TRUE),
                    'blood_group'       => $this->input->post('blood_group',TRUE),
                    'address'           => $this->input->post('address',TRUE),
                    'picture'           => $image
                    
                );



                $madical =  array(

                    'dob'                   => $birth_date,
                    'food_allergies'        => $this->input->post('food_allergies',TRUE),
                    'bleed_tendency'        => $this->input->post('bleed_tendency',true),
                    'heart_disease'         => $this->input->post('heart_disease',TRUE), 
                    'high_blood_pressure'   => $this->input->post('high_blood',TRUE), 
                    'surgeries'             => $this->input->post('surgeries',TRUE), 
                    'accidents'             => $this->input->post('accidents',TRUE), 

                    'diabetic'              => $this->input->post('diabetic',TRUE), 
                    'surgeries'             => $this->input->post('surgeries',TRUE), 
                    'others'                => $this->input->post('others',TRUE), 

                    'high_risk_diseases'    => $this->input->post('high_risk_diseases',TRUE), 
                    'family_history'        => $this->input->post('family_history',TRUE), 
                    'current_medication'    => $this->input->post('current_medication',TRUE), 

                    'others_msurance'       => $this->input->post('otheres_msrance',TRUE),
                    'others_comcare'        => $this->input->post('others_comcare',TRUE),
                    'others_tac'            => $this->input->post('others_tac',TRUE),
                    'others_low_income'     => $this->input->post('others_low_income',TRUE),
                    'others_reffer'         => $this->input->post('others_reffer',TRUE),
                    'subscription'          => $this->input->post('subscription',TRUE),
                    'female_pregnent'       => $this->input->post('female_pregnent',TRUE),
                    'female_breast_feeding' => $this->input->post('female_breast_feeding',TRUE),
                    
                );



              $this->patient_model->save_edit_patient($savedata,$patient_id);
              
              $this->patient_model->save_edit_patient_madical_info($madical,$patient_id);
              
              $this->session->set_flashdata('message',"<div class='alert alert-success msg'>".display('update_msg')."</div>");
              redirect('admin/user/Patient_controller/patient_list');

            } else {
                $data['patient_info'] = $this->patient_model->get_patient_inde_info(@$patient_id);
                $data['madical_info'] = $this->patient_model->get_patient_madical_info(@$patient_id);

                $this->load->view('admin/user/_header',$data);
                $this->load->view('admin/user/_left_sideber');
                $this->load->view('admin/user/view_edit_patient');
                $this->load->view('admin/user/_footer');
            }
  }


        public function patient_info($patient_id=NULL){

            $data['patient_info'] = $this->patient_model->get_patient_inde_info(@$patient_id);
            $data['madical_info'] = $this->patient_model->get_patient_madical_info(@$patient_id);
            $data['prescription'] = $p_data = $this->db->select('*')->from('prescription_data')->where('patient_id',$patient_id)->get()->result();
            
            $this->load->view('admin/user/_header',$data);
            $this->load->view('admin/user/_left_sideber');
            $this->load->view('admin/user/view_patient_info');
            $this->load->view('admin/user/_footer');

        }

}	