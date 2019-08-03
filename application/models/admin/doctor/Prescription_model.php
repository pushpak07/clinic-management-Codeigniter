<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Prescription_model extends CI_model {

/*
|------------------------------------------------
|  
|------------------------------------------------
*/
 	public function patient_info($appointment_id)
    {
        $this->db->select("*");
        $this->db->from('appointment_tbl');
        $this->db->join('patient_tbl', 'patient_tbl.patient_id = appointment_tbl.patient_id'); 
        $this->db->join('doctor_tbl', 'doctor_tbl.doctor_id = appointment_tbl.doctor_id'); 
        $this->db->where('appointment_tbl.appointment_id',$appointment_id);
        $query_result = $this->db->get();
        return $result = $query_result->row();       
 	}


/*
|------------------------------------------------
|  prescription_list form prescription_info
|------------------------------------------------
*/
    public function prescription_list()
    {
        $this->db->select("prescription_data.*,
        patient_tbl.*"
        );
        $this->db->from("prescription_data");
        $this->db->join('patient_tbl', 'patient_tbl.patient_id = prescription_data.patient_id '); 
        $this->db->where('prescription_data.doctor_id',$this->session->userdata('doctor_id'));
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

/*
|------------------------------------------------
|  
|------------------------------------------------
*/
    public function chackExis($appointment_id)
    {
        
             $this->db->select("prescription.*,
             patient_tbl.patient_id,
             patient_tbl.patient_name,
             patient_tbl.patient_phone,
            patient_tbl.address as ads,
             patient_tbl.sex,
             patient_tbl.birth_date,
             patient_tbl.picture,
             doctor_tbl.doctor_id,
             doctor_tbl.doctor_name,
             doctor_tbl.doctor_phone,
             doctor_tbl.address,
             doctor_tbl.designation,
             doctor_tbl.specialist,
             doctor_tbl.service_place,
             doctor_tbl.log_id,
             medicine_prescription.*,
             medecine_info.*");

             $this->db->from("prescription");
             $this->db->join('medicine_prescription', 'medicine_prescription.prescription_id = prescription.prescription_id'); 
             $this->db->join('medecine_info', 'medecine_info.medicine_id = medicine_prescription.medicine_id'); 
   
             $this->db->join('patient_tbl', 'prescription.patient_id = patient_tbl.patient_id'); 
             $this->db->join('doctor_tbl', 'prescription.doctor_id = doctor_tbl.doctor_id'); 
             $this->db->where('prescription.appointment_id',$appointment_id);
             $this->db->where('prescription.doctor_id',$this->session->userdata('doctor_id'));
             $query = $this->db->get();
             $result = $query->result();

         return $result;
    }

/*
|------------------------------------------------
|  
|------------------------------------------------
*/
    public function chackExit_test($appointment_id)
    {
         $this->db->select("*");
         $this->db->from("test_assign_for_patine");
         $this->db->where('appointment_id',$appointment_id);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    }

/*
|------------------------------------------------
|  
|------------------------------------------------
*/
    public function getAllPrescription()
    {
         $this->db->select("*");
         $this->db->from("prescription");
         $this->db->where('doctor_id',$this->session->userdata('doctor_id'));
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    }


    public function prescription_by_id($prescription_id){
         return $result = $this->db->select("prescription.*,
             patient_tbl.patient_id,
             patient_tbl.patient_name,
             patient_tbl.patient_phone,
             patient_tbl.address as ads,
             patient_tbl.sex,
             patient_tbl.birth_date,
             patient_tbl.picture,
             doctor_tbl.doctor_id,
             doctor_tbl.doctor_name,
             doctor_tbl.doctor_phone,
             doctor_tbl.address,
             doctor_tbl.degrees,
             doctor_tbl.designation,
             doctor_tbl.specialist,
             doctor_tbl.service_place,
             doctor_tbl.log_id,
             medicine_prescription.*,
             medecine_info.*,
            
             log_info.email,log_info.log_id")
            ->from("prescription")
            ->join('medicine_prescription', 'medicine_prescription.prescription_id = prescription.prescription_id') 
            ->join('medecine_info', 'medecine_info.medicine_id = medicine_prescription.medicine_id') 
            ->join('patient_tbl', 'prescription.patient_id = patient_tbl.patient_id') 
            ->join('doctor_tbl', 'prescription.doctor_id = doctor_tbl.doctor_id') 
            ->join('log_info', 'log_info.log_id = doctor_tbl.log_id')
            ->where('prescription.prescription_id',$prescription_id)
            ->get()
            ->result();
    }

    public function gereric_by_id($prescription_id){
         return $result = $this->db->select("prescription.*,
             patient_tbl.patient_id,
             patient_tbl.patient_name,
             patient_tbl.patient_phone,
             patient_tbl.address as ads,
             patient_tbl.sex,
             patient_tbl.birth_date,
             patient_tbl.picture,
             doctor_tbl.doctor_id,
             doctor_tbl.doctor_name,
             doctor_tbl.doctor_phone,
             doctor_tbl.address,
             doctor_tbl.degrees,
             doctor_tbl.designation,
             doctor_tbl.specialist,
             doctor_tbl.service_place,
             doctor_tbl.log_id,
             generic_tbl.*,
             medicine_group_tbl.*,
            
             log_info.email,log_info.log_id")
            ->from("prescription")
            ->join('generic_tbl', 'generic_tbl.prescription_id = prescription.prescription_id') 
            ->join('medicine_group_tbl', 'medicine_group_tbl.med_group_id = generic_tbl.group_id') 
            ->join('patient_tbl', 'prescription.patient_id = patient_tbl.patient_id') 
            ->join('doctor_tbl', 'prescription.doctor_id = doctor_tbl.doctor_id') 
            ->join('log_info', 'log_info.log_id = doctor_tbl.log_id')
            ->where('prescription.prescription_id',$prescription_id)
            ->get()
            ->result();
    }



}