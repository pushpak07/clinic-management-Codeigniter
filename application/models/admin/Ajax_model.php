<?php class Ajax_model extends CI_model {



 	 public function get_patient_name($phone) 

   {
	 	  return $query = $this->db->select('patient_id,patient_phone,family_name,given_name,birth_date,sex,patient_phone,address')

      ->from("patient_tbl")
      ->where('patient_phone',$phone)
      ->get()
      ->row();
 	 }


    public function get_patient_id($patient_id)
    {
      return $query = $this->db->select('patient_id')

        ->from("patient_tbl")

        ->where('patient_id',$patient_id)

        ->get()

        ->row();
    } 

 	 public function get_doctor_name($dpt_id)
   {

 	        $query = $this->db->select('*')

        ->where('department_id',$dpt_id)

   			->where('doctor_status',1)

        ->from('doctor_tbl')

        ->get();

          $result = $query->result();   

         echo '<option value="">--Select Doctor--</option>';

         foreach ($result as $value) {

         echo ' <option value="'.$value->doctor_id.'">'.$value->doctor_name.'</option>';

         }
 	 }


 	 public function get_venue_name($dc_id)
   {
 	 	
       $this->db->select('*');

     	 $this->db->from('venue_tbl');

    	 $this->db->where('create_id',$dc_id);

       $query = $this->db->get();

       $result = $query->result();

         if($result){

         	echo '<option value="">--Select venue--</option>';
         	foreach ($result as $value) {
               echo ' <option value="'.$value->venue_id.'">'.$value->venue_name.'</option>';
             }

        }else{

       	echo "Sorry there have no assign venue.";

        }

 	 }


#----------------------------------------------------

public function get_appointment($doctor_id=NULL,$date=NULL)

{

    #--------- chack Emergency stop ---------------  
    $result = $this->chackEmergencyStop($date);
    #---------------------------------------------    

     if($result){
      echo'<div style="font-size:15px; line-height:24px; color:#E15800;">' . $result->message. '</div>';
     }

     else{ 

        $re = $this->chackSchedulDate_doctor($doctor_id,$date);    

        if($re==TRUE){

            $result1 = $this->chackSchedulDate($doctor_id,$date);
          
          
            if($result1){

                date_default_timezone_set('Asia/Dhaka');
                $start_time = strtotime($result1->start_time);

                $end_time = strtotime($result1->end_time);

                $total_m =  round(abs($end_time- $start_time) / 60,2);

               $per_patient_time = $total_m / $result1->per_patient_time;

                echo '<div id="msg_c"> '.display('select_message').' </div>'; 
                        
                        for ($i = 1; $i <= $per_patient_time; $i++) {

                          $m_time = $i-1;
                          $time = ($m_time * $result1->per_patient_time);
                                               
                         // $patient_time = date('h:i A', strtotime(strtotime($start_time)+$time*60));
                          $patient_time =date('h:i A', strtotime($result1->start_time)+$time*60);
                          
                           $button_color = $this->Appointment_checker($doctor_id,$date,$patient_time);
                          //print_r($button_color); exit;
                            if ($button_color == 'btn-danger') {
                                echo '<button type="button" disabled class="btn '.$button_color.'">'.$patient_time.'</button>';
                              } else {
                              echo '<button style="margin:1px;" id="t_'.$i.'" type="button" class="btn btn-success" onclick="myBooking('.$i.')">'.$patient_time.'</button>';
                            }
                        }

              echo '<input type="hidden" name="sequence" id="serial_no" value="">';

              echo '<input type="hidden" name="schedul_id" value="' . $result1->schedul_id . '">';
      
            }else{

               echo'
                <div class="col-md-12">
                    <div class="alert alert-danger">'.display('schedule_msg').'</div>
                </div>';

            }               

          }else{

             echo'<div class="col-md-12">

                <div class="alert alert-danger">
                    '.display('schedule_date_msg').'
                </div>

            </div>';

          }

     }

   }


  #----------------------------------------
  # Appointment_checker
  #----------------------------------------
  public function Appointment_checker($doctor_id,$date,$sequence) {  

        $this->db->select('*');
        $this->db->from('appointment_tbl');
        $this->db->where('doctor_id', $doctor_id);
        $this->db->where('date', $date);
        $this->db->where('sequence', $sequence);
        // $this->db->where('status !=', 2);
        $query_result = $this->db->get();
        $result = $query_result->row();        
        if ($result) {
            return 'btn-danger';
        } else {
            return 'btn-primary';
        }

  }

#---------------------------------------------
   // Chack emergency stop
#---------------------------------------------    

  public function chackEmergencyStop($date)
  {

        $this->db->select('*');

        $this->db->from('emergency_stop_tbl');

        $this->db->where('stop_date', $date);

        $query_result = $this->db->get();

        $result = $query_result->row();

        return $result;

  }

   // Chack date doctor

   public function chackSchedulDate_doctor($doctor_id,$date)

   {    

      $timestamp = strtotime($date);
      $day1 = date('D', $timestamp);
      $day = $this->hash_model->day_to_de($day1);
    #  get serial set id from serial_setup table #

            $this->db->select('schedul_id');
            $this->db->from('schedul_setup_tbl');
            $this->db->where('doctor_id', $doctor_id);
            $this->db->where('day', $day);
            $query_result = $this->db->get();
            if($query_result->num_rows()==1){
              $r = $query_result->row();
            return $r;
          }else{
            return FALSE;
          }

    }


  // Chack date doctor
  public function chackSchedulDate($doctor_id,$date)
  {   

      if(!empty($date)){
        $timestamp = strtotime($date);
        $day1 = date('D', $timestamp); 
        $day = $this->hash_model->day_to_de($day1);  
      }else{
        $day = '';
      }

  # get serial set id from serial_setup table 
            $this->db->select('*');
            $this->db->from('schedul_setup_tbl');
            $this->db->where('doctor_id', $doctor_id);
            $this->db->where('day', $day);
            $query_result = $this->db->get();
            // print_r($query_result->row());exit;
            if($query_result->num_rows()>0){
              $r = $query_result->row();
            
            return $r;
          }else{
            return FALSE;
          }

  }

//====================================    
//    action set
//====================================
  public function get_action($val, $id) 

  {
      $this->db->set('status', $val);

      $this->db->where('id', $id);

      $this->db->update('appointment_tbl');
  }


}