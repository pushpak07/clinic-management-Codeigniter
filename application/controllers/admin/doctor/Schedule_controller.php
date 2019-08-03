<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_controller extends CI_Controller {
/*
|---------------------------------------------#
|	constructor function
|---------------------------------------------#
*/
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
    $user_type = $this->session->userdata('user_type'); 
        if($user_type!=2){
         redirect('logout');
        }

	    $this->load->model('admin/doctor/Schedule_model','schedule_model');
	    $this->load->model('admin/doctor/Doctor_model','doctor_model');
	}

/*
|---------------------------------------------#
|	add schedule view form
|---------------------------------------------#
*/
	public function add_schedule()
	{
		$data['title'] = " Add new Schedule";
		$data['doctor'] = $this->doctor_model->get_all_doctor(); 
		$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/view_setup_schedule');
		$this->load->view('admin/doctor/_footer');
	}

/*
|-----------------------------------------------
|	 schedule view list
|-----------------------------------------------
*/
	public function schedule_list()
	{
		$data['title'] = "Schedule List";
		$data['schedul_info'] = $this->schedule_model->get_schedule_list();
		$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/view_schedule_list');
		$this->load->view('admin/doctor/_footer');
	}


/*
|-----------------------------------------------
|	 ChackSchedule 
|-----------------------------------------------
*/
	public function chackSchedul($cdata)
	{
		extract($cdata);
			$query = $this->db->select("*")
			->from("schedul_setup_tbl")
			->where('doctor_id', $doctor_id)
			->where('day', $day)
			->get();

	    return $result = $query->result();
	}

/*
|-----------------------------------------------
|	Schedule data save 
|-----------------------------------------------
*/
	public function save_schedule()
	{
	    $this->form_validation->set_rules('doctor_id', 'doctor name', 'required');
	    $this->form_validation->set_rules('s_time', 'Start time', 'required');
	    $this->form_validation->set_rules('e_time', 'End time', 'required');
	    $this->form_validation->set_rules('p_time', 'Per', 'required');
	    $this->form_validation->set_rules('visible', 'Visible', 'required');
	      
	      if ($this->form_validation->run()==true) {
	      	$d_name['day'] = $this->input->post('day');
	      	
		    for($i=0; $i<count( $d_name['day']); $i++) {

		    	$savedata = array(
	     		'doctor_id' => $this->input->post('doctor_id') , 
	     		'start_time' => $this->input->post('s_time') , 
	     		'end_time' => $this->input->post('e_time') , 
	     		'day' => $d_name['day'][$i] , 
	     		'per_patient_time' => $this->input->post('p_time') , 
	     		'visibility' => $this->input->post('visible') 
	     		);

	       $cdata['doctor_id'] = $this->input->post('doctor_id');          
	       $cdata['day'] = $d_name['day'][$i];


	       //Chacking Schedul setup
	       $result = $this->chackSchedul($cdata); 
	       if( ! empty($result)) {
	       	$this->session->set_flashdata('err','<label class="col-md-3 control-label"></label>
			    <div class="col-md-5">
			        <div class="alert alert-danger">
			            <h3>ERROR MESSAGE!</h3>
			            <p>'.display('schedule_error_msg').'</p>
			        </div>
			    </div>');
	       		redirect('admin/doctor/Schedule_controller/add_schedule');
	           } else {
	           	$this->schedule_model->insert_schedule($savedata);
	           }
		    }
		    $this->session->set_flashdata('message',"<div class='alert alert-success msg'>".display('schedule_add_msg')."</div>");
        	redirect('admin/doctor/Schedule_controller/add_schedule');

	      } else { 	
		    $data['title'] = "Schedule List";
			$data['doctor'] = $this->doctor_model->get_all_doctor();
	        $this->load->view('admin/doctor/_header',$data);
			$this->load->view('admin/doctor/_left_sideber');
			$this->load->view('admin/doctor/view_setup_schedule');
			$this->load->view('admin/doctor/_footer');
	     }      
    }

/*
|-----------------------------------------------
|	 schedul_active
|-----------------------------------------------
*/
    public function schedul_active($id)
    {
    	$this->db->set('visibility','1')
    	->where('schedul_id',$id)
    	->update('schedul_setup_tbl');
    	 redirect('admin/doctor/Schedule_controller/schedule_list');
    }

/*
|-----------------------------------------------
|	 schedul_inactive
|-----------------------------------------------
*/
	public function schedul_inactive($id)
	{
		$this->db->set('visibility','0')
		->where('schedul_id',$id)
		->update('schedul_setup_tbl');
		 redirect('admin/doctor/Schedule_controller/schedule_list');
	}  

/*
|-----------------------------------------------
|	Schedule data Edit form view 
|-----------------------------------------------
*/
    public function schedul_edit($id)
    {
    	$data['title'] = "Edit Schedule";
    	$data['doctor'] = $this->doctor_model->get_all_doctor();
    	$data['schedul_info'] = $this->schedule_model->get_inde_schedul_list($id);
    
    	$this->load->view('admin/doctor/_header',$data);
		$this->load->view('admin/doctor/_left_sideber');
		$this->load->view('admin/doctor/view_schedul_edit');
		$this->load->view('admin/doctor/_footer');
    }

/*
|-----------------------------------------------
|	Edit save Schedule data 
|-----------------------------------------------
*/
    public function edit_schedul_stup()
    {
         $s_id = $this->input->post('id') ;
         $this->form_validation->set_rules('s_time', 'Start time', 'required');
         $this->form_validation->set_rules('e_time', 'End time', 'required');
         $this->form_validation->set_rules('day', 'Day', 'required');
         $this->form_validation->set_rules('p_time', 'Per', 'required');
         $this->form_validation->set_rules('visible', 'Visible', 'required');
          
        if ($this->form_validation->run()==true) {
                 $savedata = array(
         		'doctor_id' => $this->input->post('doctor_id'),
         		'start_time' => $this->input->post('s_time') , 
         		'end_time' => $this->input->post('e_time') , 
         		'day' => $this->input->post('day') , 
         		'per_patient_time' => $this->input->post('p_time') , 
         		'visibility' => $this->input->post('visible') 
         		);

           $this->schedule_model->save_edit_schedul($savedata,$s_id);
           $this->session->set_flashdata('message',display('update_msg'));
           redirect('admin/doctor/Schedule_controller/schedule_list');
        } else {
          	$data['schedul_info'] = (object)array(
         		'schedul_id' => $this->input->post('schedul_id') ,
         		'doctor_id' => $this->input->post('doctor_id') ,
         		'start_time' => $this->input->post('s_time') , 
         		'end_time' => $this->input->post('e_time') , 
         		'day' => $this->input->post('day') , 
         		'per_patient_time' => $this->input->post('p_time') , 
         		'visibility' => $this->input->post('visible') 
         		);

        	$this->load->view('admin/doctor/_header',$data);
			$this->load->view('admin/doctor/_left_sideber');
			$this->load->view('admin/doctor/view_schedul_edit');
			$this->load->view('admin/doctor/_footer');
        }
    }
    
/*
|-------------------------------
| schedule delete funciotn
|-------------------------------
*/
    public function schedul_delete($id)
    {
   
	    $this->db->where('schedul_id',$id);
	    $this->db->delete('schedul_setup_tbl');
	    $this->session->set_flashdata('message',display('delete_msg'));
	    redirect('admin/doctor/Schedule_controller/schedule_list');
    }    



}