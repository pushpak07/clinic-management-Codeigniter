<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_model{


    public function exists_user($user_phone,$birth_date)
    {
        return $this->db->where('user_phone',$user_phone)
        ->where('birth_date',$birth_date)
        ->get('users_tbl')
        ->num_rows();
    }   
    public function save_users($savedata)
    {
        $this->db->insert('users_tbl',$savedata);
    }

    public function get_all_users()
    {
      return $result = $this->db->select('*')
      ->from('users_tbl')
      ->get()
      ->result();
    }

    public function get_user_by_id($user_id){
      return $result = $this->db->select('*')
      ->from('users_tbl')
      ->where('user_id',$user_id)
      ->get()
      ->row();
    }

    public function save_update_users($savedata,$user_id)
    {
        $this->db->where('user_id',$user_id)->update('users_tbl',$savedata);
    }
}    