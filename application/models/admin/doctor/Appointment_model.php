<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_model {


    public function Check_appointment($date=NULL,$phone=NULL){
      
       return $result = $this->db->select('*')
        ->from('appointment_tbl')
        ->where('date',$date)
        ->where('phone_number',$phone)
        ->get()
        ->result();
    }
    

/*
|------------------------------------------------
|    save appointment data to appointment_tbl
|------------------------------------------------
*/
    public function SaveAppoin($savedata)
    {
        $this->db->insert('appointment_tbl',$savedata);
    }

    public function Save_sms_info($save_sms_info){
      $this->db->insert('sms_info',$save_sms_info);
    }

    // save email information in email_info table
    public function Save_email_info($save_email_info){
      $this->db->insert('email_info',$save_email_info);
    }

/*
|------------------------------------------------
|    get all appointment data form appointment_tbl
|------------------------------------------------
*/
    public function get_appointment_list()
    {
        $result = $this->db->select("appointment_tbl.*,patient_tbl.*")
            ->from('appointment_tbl')
            ->join('patient_tbl', 'patient_tbl.patient_id = appointment_tbl.patient_id')
            ->where('appointment_tbl.doctor_id',$this->session->userdata('doctor_id'))
            ->get()
            ->result(); 

        return $result;    
    }

}    