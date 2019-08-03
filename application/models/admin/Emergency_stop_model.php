<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Emergency_stop_model extends CI_model {

/*
|------------------------------------------------
|   save_emargency stop to emergency_stop_tbl
|------------------------------------------------
*/
 	 public function save_stop($saveData)
 	 {
	 	$this->db->insert('emergency_stop_tbl', $saveData);
 	 }

/*
|------------------------------------------------
|   get_emergency_stop_list form emergency_stop_tbl
|------------------------------------------------
*/
 	 public function get_stop_list()
 	 {
      	 $this->db->select('t1.doctor_id,t1. doctor_name,t1.specialist,t1.doctor_phone,t1.log_id,t1.department, t2.*');
 	 	 $this->db->from('emergency_stop_tbl t2');
		 $this->db->join('doctor_tbl t1', 't1.doctor_id = t2.doctor_id');
		 $this->db->where('t2.doctor_id',$this->session->userdata('doctor_id'));
		 $this->db->order_by('stop_id','desc');
	     $query = $this->db->get();
	     $result = $query->result();
		 return $result;
 	 }

/*
|------------------------------------------------
|   get_indevidual_emergency_stop form emergency_stop_tbl
|------------------------------------------------
*/

 	 public function get_stop_inde_info($stop_id)
 	 {
 	 	$query = $this->db->select('*')
 	 			->from('emergency_stop_tbl')
 	 			->where('stop_id',$stop_id)
 	 			->get();
 	 			return $query->row();
 	 }
/*
|------------------------------------------------
|   save_indevidual_emergency_stop to emergency_stop_tbl
|------------------------------------------------
*/
 	 public function edit_save_stop($saveData,$stop_id)
 	 {
 	 	$this->db->where("stop_id",$stop_id);
 	 	$this->db->update('emergency_stop_tbl',$saveData);
 	 }
}