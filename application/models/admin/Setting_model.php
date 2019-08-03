<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_model {

/*
|------------------------------------------------
|    
|------------------------------------------------
*/
    public function get_doctor_info()
    {
        $query = $this->db->select('*')
        ->from('doctor_tbl')
        ->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

/*
|------------------------------------------------
|    
|------------------------------------------------
*/
    public function save_edit_dcotor_profile($savedata,$doctor_id)
    {
        $this->db->where('doctor_id',$doctor_id)
        ->update('doctor_tbl',$savedata);
    }

}       