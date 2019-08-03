<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_model {


 	 #-----------------------------------
 	 public function appointment_template_list(){
 	 	return $data = $this->db->select('*')
 	 	->from('email_template')
 	 	->where('template_type',0)
 	 	->get()
 	 	->result();
 	 }

 	 #-----------------------------------
 	 public function email_list(){
 	 	return $data = $this->db->select('*')
 	 	->from('email_delivery')
 	 	->get()
 	 	->result();
 	 }
 	#-----------------------------------
 	 public function schedule_list(){
 	 	return $data = $this->db->select('email_schedule.*,email_template.*')
 	 	->from('email_schedule')
 	 	->join('email_template','email_template.email_temp_id=email_schedule.email_temp_id')
 	 	->get()
 	 	->result();
 	 }
 	#-------------------------------------------
 	public function email_search_list($from_date,$todate){
 		return $cus_result = $this->db->select("*")
	 	 	->from('email_delivery')
	 	 	->where('delivery_date_time>=',$from_date)
            ->where('delivery_date_time<=',$todate)
	 	 	->get()
	 	 	->result();
 	}

 	 public function registration_template_list(){
 	 	return $data = $this->db->select('*')
 	 	->from('email_template')
 	 	->where('template_type',1)
 	 	->get()
 	 	->result();
 	 }


 	 #-----------------------------------
 	 public function template_get_by_id($id){
 	 	return $data = $this->db->select('*')
 	 	->from('email_template')
 	 	->where('email_temp_id',$id)
 	 	->get()
 	 	->row();
 	 }
 	 

 	 public function email_config(){
 	 	return $data = $this->db->select('*')
 	 	->from('email_config')
 	 	->get()
 	 	->row();
 	 }



} 	 