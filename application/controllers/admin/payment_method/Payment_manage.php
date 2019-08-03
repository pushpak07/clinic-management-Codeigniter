<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment_manage extends CI_Controller 
{
     function  __construct(){
        parent::__construct();
       $session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
    $user_type = $this->session->userdata('user_type'); 
        if($user_type!=1){
         redirect('logout');
        }
     }
     
     function index(){

        $doctor_id = $this->session->userdata('doctor_id');
        $data['info'] = $this->db->select('*')

        ->from('payment_table')
        ->where('doctor_id',$doctor_id)
        ->order_by('payment_id','DESC')
        ->get()
        ->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/view_payment_list');
        $this->load->view('admin/_footer');
     }
}