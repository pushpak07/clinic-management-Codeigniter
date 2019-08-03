<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sms_setup_model extends CI_model {

	#------------------------------------#
	# 
	#------------------------------------#	
 	 public function sms_gateway_list()
 	 {
 	 	return $result = $this->db->select("*")
 	 			->from('sms_gateway')
 	 			->get()
 	 			->result();
 	 }
 	 #----------------------------------
 	 public function sms_gateway_by_id($gateway_id=NULL){
 	 	return $result = $this->db->select("*")
 	 			->from('sms_gateway')
 	 			->where('gateway_id',$gateway_id)
 	 			->get()
 	 			->row();
 	 }
 	 #----------------------------------
 	 public function save_custom_dalivery($data){
 	 	$this->db->insert('custom_sms_info',$data);
 	 	return $this->db->insert_id();
 	 }
 	 #-----------------------------------
 	 public function teamplate_list(){
 	 	return $data = $this->db->select('*')
 	 	->from('sms_teamplate')
 	 	->get()
 	 	->result();
 	 }
 	 #-----------------------------------
 	 public function sms_schedule_list(){
	 	return $result = $this->db->select('sms_schedule.*,sms_teamplate.*')
	     ->from('sms_schedule')
	     ->join('sms_teamplate','sms_teamplate.teamplate_id=sms_schedule.ss_teamplate_id')
	     ->get()
	     ->result();
 	 }

#----------------------------
public function coustom_sms(){
		return $cus_result = $this->db->select("*")
	 	 	->from('custom_sms_info')
	 	 	->get()
	 	 	->result();
	 	
	}	
#----------------------------
	public function auto_sms(){
		return $auto = $this->db->select("*")
	 	 	->from('sms_delivery')
	 	 	->get()
	 	 	->result();
	} 	 



} 	 