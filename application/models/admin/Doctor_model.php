<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_model {

/*
|------------------------------------------------
|   get_doctor_info form doctor_tbl
|------------------------------------------------
*/
    public function get_doctor_info($doctor_id)
    {
        $query = $this->db->select('*')
        ->from('doctor_tbl')
        ->where('doctor_id',$doctor_id)
        ->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    
#-----------------------------------------------
public function get_all_doctor(){
     $query = $this->db->select('doctor_tbl.*,log_info.*')
        ->from('doctor_tbl')
        ->join('log_info','log_info.log_id=doctor_tbl.log_id')
        ->where('log_info.user_type!=',1)
        ->get()
        ->result();
        if ($query) {
            return $query;
        } else {
            return false;
        }
}

#------------------------------------------------
#    save_edit_dcotor_profile to doctor_tbl
#------------------------------------------------

    public function save_edit_dcotor_profile($savedata,$doctor_id){
        $this->db->where('doctor_id',$doctor_id)->update('doctor_tbl',$savedata);
    }

#------------------------------------------------
    public function get_doctor_by_id($doctor_id=NULL){
        

        $query = $this->db->select('doctor_tbl.*,log_info.*')
        ->from('doctor_tbl')
        ->join('log_info','log_info.log_id=doctor_tbl.log_id')
        ->where('doctor_tbl.doctor_id',$doctor_id)
        ->get()
        ->row();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }  

}       