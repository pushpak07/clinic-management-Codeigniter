<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_controller extends CI_Controller {
  #------------------------------------------------
  #       construction function
  #------------------------------------------------
	public function __construct() 
	{
		parent::__construct();
	  $this->load->model('admin/Ajax_model','ajax_model');
	}


  public function patternSetData($pattern=NULL)
  {

    if($pattern=='pattern_one'){
          $patternData = array(
            'h_height' => 250, 
            'h_width' => 800,
            'f_height' => 200,
            'f_width' => 800,
            'content1_height' =>300,
            'content1_width' => 270,
            'content2_height' => 300,
            'content2_width' => 520
           );
    } elseif ($pattern=='pattern_two') {
        $patternData = array(
            'h_height' => 250, 
            'h_width' => 800,
            'f_height' => 200,
            'f_width' => 800,
            'content1_height' =>300,
            'content1_width' => 800,
            'content2_height' => 300,
            'content2_width' => 800
          );
    }      
    echo json_encode($patternData);
  }


public function lang_section($lang_id=NULL){
    $disease = $this->db->select('*')
      ->from('section')
      ->where('lang_id', $lang_id)
      ->get()
      ->result();
      echo '<option selected="selected" value="">--Section--</option>';
    foreach($disease as $value){
        echo '<option value="'.$value->ms_id.'">'.$value->section_name.'</option>';
    }  
}

public function cat_classification($id){
  $disease = $this->db->select('*')
      ->from('classification')
      ->where('cat_id', $id)
      ->get()
      ->result();
      echo '<option selected="selected" value="">--classification--</option>';
    foreach($disease as $value){
        echo '<option value="'.$value->classific_id.'">'.$value->classification.'</option>';
    }  
}

  public function patternSetDataEdit($pattern=NULL)
  {
      $result = $this->db->select('*')
      ->from('print_pattern')
      ->where('pattern_no', $pattern)
      ->where('doctor_id', $this->session->userdata('doctor_id'))
      ->get()
      ->row();
    echo json_encode($result);
  }

# Load disease
public function load_disease($id){

    $disease = $this->db->select('*')
      ->from('disease')
      ->where('ms_id', $id)
      ->get()
      ->result();
      echo '<option selected="selected" value="">--Disease--</option>';
    foreach($disease as $value){
        echo '<option value="'.$value->md_id.'">'.$value->disease_name.'</option>';
    }                                                     
}


# Load category
public function load_category($id){

    $category = $this->db->select('*')
      ->from('category')
      ->where('md_id', $id)
      ->get()
      ->result();
      echo'<option selected="selected" value="">--Category--</option>';
    foreach($category as $value){
        echo '<option value="'.$value->mc_id.'">'.$value->cat_name.'</option>';
    }    

}


# Load category
public function load_classification($id){
    $classification = $this->db->select('*')
      ->from('classification')
      ->where('cat_id', $id)
      ->get()
      ->result();
      echo'<option selected="selected" value="">--classification--</option>';
    foreach($classification as $value){
        echo '<option value="'.$value->classific_id.'">'.$value->classification.'</option>';
    }    
}

public function lang_cata($id){
  $category = $this->db->select('*')
      ->from('category')
      ->where('lang_id', $id)
      ->get()
      ->result();
      echo'<option selected="selected" value="">--category--</option>';
    foreach($category as $value){
        echo '<option value="'.$value->mc_id.'">'.$value->cat_name.'</option>';
    }  
}


public function load_madicine($id){

    $result = $this->db->select('*')
      ->from('medicine')
      ->where('classification', $id)
      ->get()
      ->result();

    foreach ($result as $key => $value) {
       echo '<tr>
                <td><input class="form-control" id="1" value="'.$value->symptom.'"  disabled type="text"></td>
                <td><input class="form-control" id="2" value="'.$value->treatment.'"  disabled type="text"></td>
                <td><input class="form-control" id="3" value="'.$value->medicine.'" disabled type="text"></td>
                 <td><a href="javascript:void(0);" id="add" onclick="loadHarbs('.$value->medicine_id.')" class="btn btn-success btn-sm"><i class="ti-plus m-r-5"></i>Add</a></td>
                <input type="hidden" name="medicine_id" value="'.$value->medicine_id.'">
            </tr>';
    }
}




public function load_madicine_harbs($medicine_id){

    $result = $this->db->select('*')
      ->from('medicine')
      ->where('medicine_id', $medicine_id)
      ->get()
      ->row();

    $harbs = $this->db->select('medicine_herbs.*,herbs.*')
      ->from('medicine_herbs')
      ->join('herbs','herbs.herbs_id=medicine_herbs.herbs_id')
      ->where('medicine_herbs.medicine_id', $medicine_id)
      ->get()
      ->result();

    $hs = "";
    foreach ($harbs as  $value) {
        $hs.= $value->herbs.',';
    }

  echo '<tr>
            <th scope="row">
                <input class="form-control" name="medicine[]" value="'.$result->medicine.'"   type="text">
            </th>
            <td><input type="text" class="form-control" name="harbs[]" id="tokenfield-typeahead" value="'.@$hs.'" /></td>
            <td><input type="text" class="form-control" name="comment[]" id="tokenfield-typeahead" placeholder="comment" value="" /></td>
            <td>
                <a href="javascript:void(0);" id="re_'.$medicine_id.'"  class=" btn btn-danger btn-sm remove_button" title="Remove field"><i class="ti-trash" aria-hidden="true"></i></a>
            </td>
        </tr>';
}


  
  #------------------------------------------------
  #       load_patient_info
  #------------------------------------------------
  public function load_patient_info($phone)
  {

      $result = $this->ajax_model->get_patient_name($phone);

  		if(!empty($result)) {
  		      echo json_encode($result);

  		} else {
  		      echo 0; 
  		} 
  }

  #------------------------------------------------
  #       get_patinet_name
  #------------------------------------------------

	public function get_patinet_name($phone=NULL)
	{
		$result = $this->ajax_model->get_patient_name($phone);

	    if(!empty($result)) {
        echo $result->family_name .'<input type="hidden" name="patient_id" value="'.$result->patient_id.'">';
	    } else {
	      echo 0; 
	    } 
	}

  public function get_patinet_id($patient_id=NULL){
    $result = $this->ajax_model->get_patient_id($patient_id);

    if($result!='') {
        echo '<div class="alert alert-danger">
                   <strong>MESSAGE!</strong>
                    <p>'.display('patient_id_exist_msg').'</p>
                </div>';
    } else {
        echo 0; 
    } 
  }

  #------------------------------------------------
  #       get_doctor
  #------------------------------------------------		
  public function get_doctor($dpt_id=NULL)
  {
    $hospital_id = $this->session->userdata('hospital_id');
    $result = $this->db->select('
          doctor_tbl.doctor_id,
          doctor_tbl.doctor_name
          ')
          ->from('hospital_doctor')
          ->join('doctor_tbl','doctor_tbl.doctor_id = hospital_doctor.doctor_id')
          ->join('department_tbl','department_tbl.department_id = doctor_tbl.department_id')
          ->where('hospital_doctor.hospital_id',$hospital_id)  
          ->where('doctor_tbl.department_id',$dpt_id)  
          ->where('hospital_doctor.h_status',1)  
          ->where('hospital_doctor.d_status',1)  
          ->get()
          ->result();
          echo '<option value="">--Select Doctor--</option>';
         foreach ($result as $value) {
         echo ' <option value="'.$value->doctor_id.'">'.$value->doctor_name.'</option>';
         }
  }



  #------------------------------------------------
  #       get schedul
  #------------------------------------------------
  	
  public function get_schedul($doctor_id =NULL, $date=NULL)
  {
      $this->ajax_model->get_appointment($doctor_id,$date);
  }
  
  #------------------------------------------------
  #       action set
  #------------------------------------------------

  public function action_set($val=NULL,$id=NULL)
  {
    $this->liveModel->get_action($val,$id);
  }

  #------------------------------------------------
  #       age_to_birthdate
  #------------------------------------------------
  public function age_to_birthdate($age=NULL)
  {
    echo $bith_date =  $end_time = date('Y-m-d', strtotime("-$age year"));
  }

#--------------------------------------

  public function get_teamplate($teamplate_id=NULL){
    
    $row = $this->db->select('*')
    ->from('sms_teamplate')
    ->where('teamplate_id',$teamplate_id)
    ->get()
    ->row();
    echo'<label class="col-md-3 control-label"></label>
    <div class="col-md-9">
             <textarea name="teamplate" class="form-control" rows="4" co>'.@$row->teamplate.'</textarea>
        </div>';
  } 


 #-----------------------------

  public function getInfo($id=NULL){
    $result = $this->db->select("action_serial.*,doctor_tbl.*,
            patient_tbl.*,
            venue_tbl.*,")
              ->from('action_serial')
              ->join('patient_tbl', 'patient_tbl.patient_id = action_serial.patient_id')
              ->join('doctor_tbl', 'doctor_tbl.doctor_id = action_serial.doctor_id')
              ->join('venue_tbl', ' venue_tbl.venue_id = action_serial.venue_id')
              ->where('action_serial.appointment_id',$id)
              ->get()->row();

        echo json_encode($result);
  }

#----------------------------------------
# appointment to sms
#-----------------------------------------
public function sendSms(){
      
    // load sms gateway
    $this->load->library('Smsgateway');

    $appointment_id = $this->input->post('appointment_id');
    $appointment_date = $this->input->post('appointment_date');
    $sequence = $this->input->post('sequence');
    $teamplate_id = $this->input->post('teamplate_id');
    $doctor_name = $this->input->post('doctor_name');
    $patient_name = $this->input->post('name');
    $patient_id = $this->input->post('patient_id');
    $patient_phone = $this->input->post('to');
    $teamplate = $this->input->post('teamplate');
    $gateway_id = $this->input->post('sms_gateway_id');
    $gateway = $this->input->post('gateway');
    $per_patient_time = $this->input->post('per_patient_time');
    $start_time = $this->input->post('start_time');


    $sequence_time = $sequence-1;
    $time = ($sequence_time * $per_patient_time);
    $schedul_time =date('h:i A', strtotime($start_time)+$time*60);

    // get gateway information
    $sms_gateway_info = $this->db->select('*')->from('sms_gateway')->where('gateway_id',$gateway_id)->get()->row();


        #---------------------------     
        // sms_setting    
        if(!empty($sms_gateway_info)) {

             $template = $this->smsgateway->template([
                 'doctor_name'      => $doctor_name,
                 'appointment_id'   => $appointment_id,
                 'patient_name'     => $patient_name,
                 'patient_id'       => $patient_id,
                 'sequence'         => $schedul_time, 
                 'appointment_date' => date('d F Y',strtotime($appointment_date)),
                 'message'          => $teamplate
            ]); 
              

             $this->smsgateway->send([
                 'apiProvider' => $sms_gateway_info->provider_name,
                 'username'    => $sms_gateway_info->user,
                 'password'    => $sms_gateway_info->password,
                 'from'        => $sms_gateway_info->authentication,
                 'to'          => $patient_phone,
                 'message'     => $template
             ]);

            //custom_sms_info
            $data_save = array(
                'reciver' => $patient_phone,
                'gateway' => $sms_gateway_info->provider_name,
                'message' => $template,
                'sms_date_time' => date("Y-m-d h:i:s")
            );
            $this->db->insert('custom_sms_info',$data_save);
        }
        echo json_encode(array('status'=>1));    
  }


#------------------------------------------------
#       medicine_sajetion
#------------------------------------------------
  public function medicine_saj()
  {  
      $keyword = $this->input->post('keyword');
      $lang_id = $this->input->post('lang_id');

      $result = $this->db->select('*')
      ->from('medicine')
      ->like('medicine', $keyword)
      ->where('lang_id',$lang_id)
      ->limit(10)
      ->get()
      ->result();
      
         if(!empty($result)) {
            echo  '<ul class="country-list" id="country-list">';
            $i=1;
            foreach ($result as $value) {
              echo '<li value="'.$value->medicine_id.'">'.$value->medicine.'</li>';
            }
            echo '<ul>';
        }
    
  }

#--------------------------------
public function herbs_saj(){

      $keyword = $this->input->post('keyword');
      $lang_id = $this->input->post('lang_id');
      $result = $this->db->select('*')
      ->from('herbs')
      ->like('herbs', $keyword)
      ->where('lang_id',$lang_id)
      ->limit(10)
      ->get()
      ->result();
      
         if(!empty($result)) {
            echo  '<ul class="country-list" id="herbs-list">';
            $i=1;
            foreach ($result as $value) {
              echo '<li value="'.$value->herbs_id.'">'.$value->herbs.'</li>';
            }
            echo '<ul>';
        }   
}


#-------------------------------
#
#------------------------------
public function medicine_harbs_saj(){

    $keyword = $this->input->post('keyword');
    $classification = $this->input->post('classific');

      $result = $this->db->select('*')
      ->from('medicine')
      ->like('medicine', $keyword)
      ->where('classification', $classification)
      ->limit(10)
      ->get()
      ->result();

     if(!empty($result)) {
        echo  '<ul class="country-list" id="country-list">';
        $i=1;
        foreach ($result as $value) {
          echo '<li value="'.$value->medicine_id.'">'.$value->medicine.'</li>';
        }
        echo '<ul>';
    }

}  

    public function herbs_get(){
         $keyword = $this->input->get('keyword'); 
          $result = $this->db->select('medicine_herbs.*,herbs.*')
          ->from('medicine_herbs')
          ->join('herbs','herbs.herbs_id=medicine_herbs.herbs_id')
          ->where('medicine_herbs.medicine_id', $keyword)
          ->get()
          ->result();
          $hb = null;
          foreach ($result as $key => $value) {
             $hb .= $value->herbs.",";         
          }
          echo $hb;
    }



}