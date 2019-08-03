<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_model extends CI_model {


 public function get_section()
 {
 	return	$this->db->select('*')
 	->from('section')
 	->get()
 	->result();
 }

 public function get_category()
 {
 	return	$result = $this->db->select('*')
 	->from('category')
 	->get()
 	->result();
 }

 public function get_language()
 {
 	return	$this->db->select('*')
 	->from('pres_language')
 	->get()
 	->result();
 }

public function get_disease(){
	return	$this->db->select('disease.*,section.*')
 	->from('disease')
 	->join('section','section.ms_id=disease.ms_id')
 	->get()
 	->result();
}

 public function get_classification(){
 	return	$this->db->select('*')
 	->from('classification')
 	->get()
 	->result();
 }


 public function get_medicine()
 {
	return $this->db->select("*")
	->from('medicine')
	->get()
	->result();
 }


public function get_medicine_by_id($id){
 	return $this->db->select("*")->from('medicine')->where('medicine_id',$id)->get()->row();
}

public function get_medicine_harbs(){
	return $data = $this->db->select("medicine_herbs.*,medicine.*,pres_language.*,herbs.*")
	->from('medicine_herbs')
	->join('medicine','medicine.medicine_id=medicine_herbs.medicine_id')
	->join('pres_language','pres_language.lang_id=medicine_herbs.lang_id')
	->join('herbs','herbs.herbs_id=medicine_herbs.herbs_id')
	->get()
	->result(); 
}

public function get_herbs(){
	return $this->db->select('*')->from('herbs')->get()->result();
}
 	

} 	 