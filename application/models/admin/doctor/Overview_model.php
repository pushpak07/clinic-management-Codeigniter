<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_model {

#------------------------------------#
# count to_day_appointment
#------------------------------------#	
 	public function today_appointment()
 	{
	 	$tow_day = date('Y-m-d');
			
        $result = $this->db->select("action_serial.*,doctor_tbl.*,
                  patient_tbl.*")
                  ->from('action_serial')
                  ->join('patient_tbl', 'patient_tbl.patient_id = action_serial.patient_id')
                  ->join('doctor_tbl', 'doctor_tbl.doctor_id = action_serial.doctor_id')
                  ->like('action_serial.date',$tow_day)
                  ->where('action_serial.doctor_id',$this->session->userdata('doctor_id'))
                  ->get()
                  ->result();
          return $result; 
 	}


#------------------------------------#
# count to_day_get_appointment
#------------------------------------#	
 	public function to_day_get_appointment()
 	{
 	 	$tow_day = date('Y-m-d');
            $result = $this->db->select("action_serial.*,doctor_tbl.*,patient_tbl.*")
            ->from('action_serial')
            ->join('patient_tbl', 'patient_tbl.patient_id = action_serial.patient_id')
            ->join('doctor_tbl', 'doctor_tbl.doctor_id = action_serial.doctor_id')
            ->like('action_serial.get_date_time',$tow_day)
            ->where('action_serial.doctor_id',$this->session->userdata('doctor_id'))
            ->get()
            ->result(); 
         return $result; 
 	}


#-------------------------------------
   public function last_30(){
     $result = $this->db->select("*")
      ->from('appointment_tbl')
      ->where('date BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()')
      ->get()->num_rows();


      return $result; 
      }

   public function last_15(){
    $result = $this->db->select("*")
      ->from('appointment_tbl')
      ->where('date BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW()')
      ->get()->num_rows();
      return $result; 
      } 

   public function last_7(){
    $result = $this->db->select("*")
      ->from('appointment_tbl')
      ->where('date BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()')
      ->get()->num_rows();
      return $result; 
      }       




   #--- get last 30 day patient 
   public function patient_30_day(){
    $result = $this->db->select("*")
      ->from('patient_tbl')
      ->where('create_date BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()')
      ->get()->num_rows();
      return $result; 
   }

   #--- get last 15 day patient 
   public function patient_15_day(){
    $result = $this->db->select("*")
      ->from('patient_tbl')
      ->where('create_date BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW()')
      ->get()->num_rows();
      return $result; 
   }
   #--- get last 7 day patient
   public function patient_7_day(){
    $result = $this->db->select("*")
      ->from('patient_tbl')
      ->where('create_date BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()')
      ->get()->num_rows();
      return $result; 
   }





} 	 