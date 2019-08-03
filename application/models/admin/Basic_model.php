<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_model extends CI_model {

#----------------------------------------
#       patient appointment print info
#----------------------------------------
    public function get_appointment_print_result($appointment_id)
    {
        
       $query_result = $this->db->select("action_serial.*,
            patient_tbl.*,doctor_tbl.*")
              ->from('action_serial')
              ->join('patient_tbl', 'patient_tbl.patient_id = action_serial.patient_id')
              ->join('doctor_tbl', 'doctor_tbl.doctor_id = action_serial.doctor_id')
              ->where('action_serial.appointment_id',$appointment_id)
              ->get()->row();

       return $query_result;
         
    }

    
}       