<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sms_setup_controller extends CI_Controller {

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
	    $this->load->model('admin/Sms_setup_model','sms_setup_model');	
  }

/*
|--------------------------------------
|   View sms setup
|--------------------------------------
*/

public function sms_gateway(){
    $data['gateway_list'] = $this->sms_setup_model->sms_gateway_list();

    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/sms/view_sms_gateway');
    $this->load->view('admin/_footer');
}

/*
|--------------------------------------
|   sms save_gateway
|--------------------------------------
*/
  public function save_gateway(){

    $id = $this->input->post('id');

    $data = array(
      'user'=> $this->input->post('user'),
      'password'=> $this->input->post('password'),
      'authentication'=> $this->input->post('authentication'),
      'default_status'=> 1
    );

    $this->db->where('gateway_id',$id)->update('sms_gateway',$data);
    $this->db->set('default_status',0)->where('gateway_id !=',$id)->update('sms_gateway');
    $this->session->set_flashdata('message','<div class="alert alert-success"> '.display('update_msg').' </div><br>');
    redirect("admin/Sms_setup_controller/sms_gateway");
  }   


/*
|--------------------------------------
|   sms sms_template
|--------------------------------------
*/
  public function sms_template(){
    $data['teamplate'] = $this->sms_setup_model->teamplate_list();
    $data['title'] = "SMS Configaretion";
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/sms/view_sms_template');
    $this->load->view('admin/_footer');
  }

/*
|--------------------------------------
|    save_sms_template
|--------------------------------------
*/
  public function save_sms_template(){
    $data = array(
      'teamplate_name' => $this->input->post('teamplate_name'),
      'teamplate' => $this->input->post('teamplate')
    );
    $this->db->insert('sms_teamplate',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success"> '.display('template_add_msg').' </div><br>');
    redirect('admin/Sms_setup_controller/sms_template');
  }

#--------------------------------------
  public function template_edit(){
    $data = array(
      'teamplate_name' => $this->input->post('teamplate_name'),
      'teamplate' => $this->input->post('teamplate')
    );
    $id = $this->input->post('id');
    $this->db->where('teamplate_id',$id)->update('sms_teamplate',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success"> '.display('update_msg').' </div><br>');
    redirect('admin/Sms_setup_controller/sms_template');
  }

#-------------------------------------
  public function set_default_template($id=NULL,$status){
        $status = ($status == 1) ? 0 : 1;
        $this->db->set('default_status',$status);
        $this->db->where('teamplate_id', $id);
        $this->db->update('sms_teamplate');
        redirect('admin/Sms_setup_controller/sms_template');
  }

#--------------------------------------  
  public function delete_teamplate($id){
    $this->db->where('teamplate_id',$id)->delete('sms_teamplate');
    $this->session->set_flashdata('message','<div class="alert alert-success"> '.display('delete_msg').' </div><br>');
    redirect('admin/Sms_setup_controller/sms_template');
  }

/*
|--------------------------------------
|   sms_scheduler
|--------------------------------------
*/
  public function sms_scheduler(){
    $data['teamplate'] = $this->sms_setup_model->teamplate_list();
    
    $data['schedule'] = $this->sms_setup_model->sms_schedule_list();
  	$data['title'] = "SMS Configaretion";
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/sms/view_sms_scheduler');
    $this->load->view('admin/_footer');
  }

/*
|--------------------------------------
|    save_sms_scheduler
|--------------------------------------
*/
  public function save_sms_scheduler(){
    
    $day = $this->input->post('day');
    $hour = $this->input->post('hour');
    $minute = $this->input->post('minute');
    $schedule = $day.':'.$hour.':'.$minute;
    $check_exist = $this->db->select('ss_schedule')->from('sms_schedule')->where('ss_schedule',$schedule)->get()->row();
    if($check_exist){
       $this->session->set_flashdata('message','<div class="alert alert-danger"> '.$schedule .', '.display('exist_error_msg').' </div><br>');
      redirect('admin/Sms_setup_controller/sms_scheduler');
    }else{
      $data = array(
        'ss_teamplate_id' => $this->input->post('teamplate_id'),
        'ss_name' => $this->input->post('schedule_name'),
        'ss_schedule' => $schedule
      );

      $this->db->insert('sms_schedule',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success"> '.display('schedule_add_msg').' </div><br>');
      redirect('admin/Sms_setup_controller/sms_scheduler');
    }
  }   
  
#---------------------------------------
  // delete schedule
  public function delete_schedule($id){
    $this->db->where('ss_id',$id)->delete('sms_schedule');
    $this->session->set_flashdata('message','<div class="alert alert-success"> '.display('delete_msg').' </div><br>');
    redirect('admin/Sms_setup_controller/sms_scheduler');
  } 



#--------------------------------------
  public function custom_sms(){
    //gate gateway_information
    $data['gateway_list'] = $this->db->select('*')->from('sms_gateway')->where('default_status',1)->get()->result();

    $data['title'] = "Send Custom sms";
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/sms/view_custom_sms');
    $this->load->view('admin/_footer');
  }



#--------------------------------------
  // Send coustorm sms
#--------------------------------------
  public function send_custom_sms(){

    $gateway_id = $this->input->post('gateway');

    $to = $this->input->post('to');

    $teamplate = $this->input->post('teamplate');
    //gate gateway_information
    $sms_gateway_info = $this->sms_setup_model->sms_gateway_by_id($gateway_id);
    
    // sent to gateway
    $this->smsgateway->send([
         'apiProvider' => $sms_gateway_info->provider_name,
         'username'    => $sms_gateway_info->user,
         'password'    => $sms_gateway_info->password,
         'from'        => $sms_gateway_info->authentication,
         'to'          => $to,
         'message'     => $teamplate
     ]);

    // save delivary data
        $data = array(
               'gateway' => $sms_gateway_info->provider_name,
               'reciver'          => $to,
               'message'          => $teamplate ,
               'sms_date_time'    => date("Y-m-d h:i:s")
        );
      $this->sms_setup_model->save_custom_dalivery($data);

      $this->session->set_flashdata('message','<div class="alert alert-success">  '.display('sms_send_msg').','.$to.'.</div><br>');
      redirect('admin/Sms_setup_controller/custom_sms');
    } 


}