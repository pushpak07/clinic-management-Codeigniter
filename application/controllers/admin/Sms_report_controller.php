<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sms_report_controller extends CI_Controller {

    /*
    |--------------------------------------
    |   constructor funcion
    |--------------------------------------
    */ 
    public function __construct() 
    {
		parent::__construct();
		$this->load->library('session');
        $this->load->library('Smsgateway');
		$session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
        $user_type = $this->session->userdata('user_type'); 
        if($user_type!=1){
         redirect('logout');
        }
	    $this->load->model('admin/Sms_report_model','sms_report_model');	
        $this->load->model('admin/Overview_model','overview_model');
    }


    /*
    |--------------------------------------
    |   View sms list
    |--------------------------------------
    */

    public function custom_sms_list($search=NULL){
        if($search){
            $from_date = $this->input->post('from_date');
            $todate = $this->input->post('to_date');
            
            $data['coustom_sms'] = $this->sms_report_model->search_result($from_date,$todate);
        }else{
            $data['coustom_sms'] = $this->sms_report_model->get_coustom_sms_list();
        }
        $data['title'] = "Custom SMS List";
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/sms/view_custom_sms_list');
        $this->load->view('admin/_footer');

    }


    /*
    |--------------------------------------
    |   View sms list
    |--------------------------------------
    */

    public function auto_sms_list($search=NULL){
        $data['title'] = "Auto SMS List";
        if($search){
           $from_date = $this->input->post('from_date');
           $todate = $this->input->post('to_date'); 
           $data['auto_sms'] = $this->sms_report_model->auto_search_result($from_date,$todate);
        }else{
            $data['auto_sms'] = $this->sms_report_model->get_auto_sms_list();
        }
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/sms/view_auto_sms_list');
        $this->load->view('admin/_footer');
    }


    /*
    |--------------------------------------
    |   View sms list
    |--------------------------------------
    */

    public function today_sms_list(){
        $data['title'] = "Today SMS List";
        $data['auto_sms'] = $this->sms_report_model->today_auto_sms();
        $data['coustom_sms'] = $this->sms_report_model->today_coustom_sms();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/sms/view_today_sms_list');
        $this->load->view('admin/_footer');
    }

    public function sms_list(){
       $data['auto_sms'] = $this->sms_report_model->get_auto_sms_list();
        $data['coustom_sms'] = $this->sms_report_model->get_coustom_sms_list();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/sms/view_sms_list');
        $this->load->view('admin/_footer');
    }

}