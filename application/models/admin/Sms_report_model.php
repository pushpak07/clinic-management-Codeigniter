<?php class Sms_report_model extends CI_model {

 	public function get_coustom_sms_list() 
   	{
	  return $query = $this->db->select('*')
      ->from("custom_sms_info")
      ->get()
      ->result();      
 	}

#-------------------------------------------
 	public function search_result($from_date,$todate){
 		return $cus_result = $this->db->select("*")
	 	 	->from('custom_sms_info')
	 	 	->where('sms_date_time>=',$from_date)
            ->where('sms_date_time<=',$todate)
	 	 	->get()
	 	 	->result();
 	}
#-------------------------------------------
 	public function auto_search_result($from_date,$todate){
 		return $query = $this->db->select('sms_delivery.*,sms_info.*')
	 	 	->from('sms_delivery')
	 	 	->join('sms_info','sms_info.sms_info_id=sms_delivery.sms_info_id')
	 	 	->where('sms_delivery.delivery_date_time>=',$from_date)
            ->where('sms_delivery.delivery_date_time<=',$todate)
	 	 	->get()
	 	 	->result();
 	}



 	public function get_auto_sms_list() 
   	{
	  return $query = $this->db->select('sms_delivery.*,sms_info.*')
      ->from("sms_delivery")
      ->join('sms_info','sms_info.sms_info_id=sms_delivery.sms_info_id')
      ->limit('200')
      ->order_by('sms_delivery_id','DESC')
      ->get()
      ->result();      
 	}

 	public function today_coustom_sms(){
 		return $cus_result = $this->db->select("*")
	 	 	->from('custom_sms_info')
	 	 	->like('sms_date_time',date("Y-m-d"))
	 	 	->limit('200')
      		->order_by('custom_sms_id','DESC')
	 	 	->get()
	 	 	->result();
	 	
 	}

 	public function today_auto_sms(){
	 	  return $query = $this->db->select('sms_delivery.*,sms_info.*')
	      ->from("sms_delivery")
	      ->join('sms_info','sms_info.sms_info_id=sms_delivery.sms_info_id')
		  ->like('sms_delivery.delivery_date_time',date("Y-m-d"))
		  ->get()
		  ->result();
 	}


}