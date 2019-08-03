<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web_setup_model extends CI_model {

	public function get_setup_data()
	{
		return $result = $this->db->select('*')->from('web_pages_tbl')->get()->result();
	}

	public function checkPreview($name){
		return $result = $this->db->select('*')
		->from('web_pages_tbl')
		->where('name',$name)
		->get()
		->row();
	}


	public function check_exit($name)
	{
		return $result = $this->db->select('*')
		->from('web_pages_tbl')
		->where('name',$name)
		->get()
		->row();
	}

	public function get_info_by_id($id){
		return $result = $this->db->select('*')
		->from('web_pages_tbl')
		->where('id',$id)
		->get()
		->row();
	}


	public function get_slider()
    {
        $result = $this->db->select('*')
        ->from('slider')
        ->order_by('sequence','asc')
        ->get()
        ->result();
        return $result;
    }

    public function get_slider_by_id($id)
    {
    	$result = $this->db->select('*')
        ->from('slider')
        ->where('id',$id)
        ->get()
        ->row();
        return $result;
    }
}