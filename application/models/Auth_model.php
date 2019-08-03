<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_model {

    public function authenticet($email=NULL,$password=NULL,$type=NULL)
    {
        
        if($type == 3){
              $query = $this->db->select('log_info.*,users_tbl.*')
                ->from('log_info')
                ->join('users_tbl', 'users_tbl.log_id = log_info.log_id','left')
                ->where('email', $email)
                ->where('password', MD5($password))
                ->where('active_status','1')
                ->limit(1)
                ->get()->row();

                if($query!=NULL) {
                return $query;
                } else {
                    return false;
                }
        } else{

             $query = $this->db->select('log_info.*,doctor_tbl.*')
                ->from('log_info')
                ->join('doctor_tbl', 'doctor_tbl.log_id = log_info.log_id','left')
                ->where('email', $email)
                ->where('password', MD5($password))
                ->where('active_status','1')
                ->limit(1)
                ->get()->row();

                if($query!=NULL) {
                return $query;
                } else {
                    return false;
                }
        }        


           
        
    }

}       