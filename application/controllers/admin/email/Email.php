<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Email extends CI_Controller {



/*
|--------------------------------------
|   constructor funcion
|--------------------------------------
*/ 

	public function __construct() 

	{

		parent::__construct();

		$this->load->library('session');

		$session_id = $this->session->userdata('session_id'); 

	    if($session_id == NULL ){

	     redirect('logout');

	    }

	    $this->load->model('admin/Basic_model','basic_model');

		$this->load->model('admin/Appointment_model','appointment_model');

	    $this->load->model('admin/Overview_model','overview_model');

	    $this->load->model('admin/email/Email_model','email_model');  		

  	}





#---------------------------------------

  	# email list

  	public function email_list($search=NULL){

  	if($search){

        $from_date = $this->input->post('from_date');

        $todate = $this->input->post('to_date');

        $data['email_list'] = $this->email_model->email_search_list($from_date,$todate);

    }else{

        $data['email_list'] = $this->email_model->email_list();

    }

	    $data['title'] = " Email List";

	    $this->load->view('admin/_header',$data);

	    $this->load->view('admin/_left_sideber');

	    $this->load->view('admin/email/view_email_list');

	    $this->load->view('admin/_footer');

	}



#---------------------------------------

  	# email configaretion

  	public function email_config_setup(){

  		$data['config'] = $this->email_model->email_config();

	    $data['title'] = "Email Config Setup";

	    $this->load->view('admin/_header',$data);

	    $this->load->view('admin/_left_sideber');

	    $this->load->view('admin/email/view_email_config_setup');

	    $this->load->view('admin/_footer');

	}



#---------------------------------------

	# save email configaretion save

	public function email_config_save(){

		$data = array(

			'at_appointment' => $this->input->post('at_appointment'),

			'at_registration' => $this->input->post('at_registration'),

			'reminder' => $this->input->post('reminder'),

			'protocol' => $this->input->post('protocol'),

			'mailpath' => $this->input->post('mailpath'),

			'mailtype' => $this->input->post('mailtype'),

			'sender' => $this->input->post('sender')

		);

		$check = $this->db->select('*')->from('email_config')->where('email_config_id',1)->get()->row();
if($check){

		$this->db->update('email_config',$data);
}else{
	$this->db->insert('email_config',$data);
}



		$this->session->set_flashdata('message','<div class="alert alert-success"> '.display('email_setup_msg').' </div>');

    	redirect("admin/email/Email/email_config_setup");

	}



#---------------------------------------

	# email template setup 

  	public function email_template_setup(){

	    $data['title'] = "Email Template Setup";

	    $this->load->view('admin/_header',$data);

	    $this->load->view('admin/_left_sideber');

	    $this->load->view('admin/email/view_email_template_setup');

	    $this->load->view('admin/_footer');

	}



#--------------------------------------

	# save template

	public function save_template(){

		$Template = array(

			'email_temp_name'=> $this->input->post('template_name'),

			'email_template'=> $this->input->post('template',FALSE)

		);

		

		$this->db->insert('email_template',$Template);

		$this->session->set_flashdata('message','<div class="alert alert-success">'.display('email_template_add_msg').' </div>');

    	redirect("admin/email/Email/email_template_setup");

	}



#--------------------------------------

	# email template list

	public function template_list(){

	    $data['title'] = "Email Template List For Appointment";

	    $data['template_a'] = $this->email_model->appointment_template_list();

	    $data['template_r'] = $this->email_model->registration_template_list();



	    $this->load->view('admin/_header',$data);

	    $this->load->view('admin/_left_sideber');

	    $this->load->view('admin/email/view_email_template_list');

	    $this->load->view('admin/_footer');

	}



	public function get_email_template($id){

		$data['template'] = $this->email_model->template_get_by_id($id);

		$data['title'] = "Edit Template";

	    $this->load->view('admin/_header',$data);

	    $this->load->view('admin/_left_sideber');

	    $this->load->view('admin/email/view_edit_template');

	    $this->load->view('admin/_footer');

	}



	public function update_template(){

		$Template = array(

			'email_temp_name'=> $this->input->post('template_name'),

			'email_template'=> $this->input->post('template',FALSE)

		);

		$id = $this->input->post('id');

		$this->db->where('email_temp_id',$id)->update('email_template',$Template);

		$this->session->set_flashdata('message','<div class="alert alert-success"> '.display('update_msg').' </div>');

    	redirect("admin/email/Email/template_list");

	}	



	public function delete_template($id){

		$this->db->where('email_temp_id',$id)->delete('email_template');

		$this->session->set_flashdata('message','<div class="alert alert-success"> '.display('delete_msg').' </div>');

    	redirect("admin/email/Email/template_list");
	}



	public function set_default_template($id=NULL,$status){

        $status = ($status == 1) ? 0 : 1;

        $this->db->set('default_status',$status);

        $this->db->where('email_temp_id', $id);

        $this->db->update('email_template');

        // $this->session->set_flashdata('message','<div class="alert alert-success"> Setup successfully </div>');

        redirect("admin/email/Email/template_list");

 	}

#--------------------------------------

	# setup email scheduling

	public function email_schedule_setup(){

	    $data['title'] = "Email Schedule Setup";

	    $data['template'] = $this->email_model->appointment_template_list();

	    $data['schedule_list'] = $this->email_model->schedule_list();



	    $this->load->view('admin/_header',$data);

	    $this->load->view('admin/_left_sideber');

	    $this->load->view('admin/email/view_email_schedule_setup');

	    $this->load->view('admin/_footer');

	}



	public function delete_schedule($id)

	{

		$this->db->where('email_ss_id',$id)->delete('email_schedule');

		$this->session->set_flashdata('message','<div class="alert alert-success"> '.display('delete_msg').' </div>');

    	redirect("admin/email/Email/email_schedule_setup");

	}

#--------------------------------------

	# save schedule

	public function save_schedule(){



		$day = $this->input->post('day');

	    $hour = $this->input->post('hour');

	    $minute = $this->input->post('minute');

	    $schedule = $day.':'.$hour.':'.$minute;



    	$check_exist = $this->db->select('email_schedule')->from('email_schedule')->where('email_schedule',$schedule)->get()->row();

    

	    if($check_exist){

	       $this->session->set_flashdata('message','<div class="alert alert-danger"> '.$schedule .', '.display('exist_error_msg').' </div>');

	      redirect("admin/email/Email/email_schedule_setup");

	    }else{

		    $data = array(

		        'email_temp_id'=> $this->input->post('template_id'),

		        'email_ss_name'=> $this->input->post('schedule_name'),

				'email_schedule'=> $schedule,

		    );



		    $this->db->insert('email_schedule',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success"> '.display('schedule_add_msg').' </div>');

	    	redirect("admin/email/Email/email_schedule_setup");

	    }

	}



#--------------------------------------

	# custom email

  	public function custom_email(){

	    $data['title'] = "Send Custom Email";

	    $this->load->view('admin/_header',$data);

	    $this->load->view('admin/_left_sideber');

	    $this->load->view('admin/email/view_custom_email');

	    $this->load->view('admin/_footer');

  	}





#--------------------------------------

# Send coustorm email

#--------------------------------------

    public function send_custom_email(){



    	$this->load->library('email');

    	$email_config = $this->email_model->email_config();

    	$to = $this->input->post('to');

    	$subject = $this->input->post('subject');

    	$message = $this->input->post('template',FALSE);

	    

	    if( $to !=NULL ) {



                #----------------------------

                    $config['protocol'] = $email_config->protocol;

                    $config['mailpath'] = $email_config->mailpath;

                    $config['charset'] = 'utf-8';

                    $config['wordwrap'] = TRUE;

                    $config['mailtype'] = $email_config->mailtype;

                    $this->email->initialize($config);



                    $this->load->library('email', array('mailtype'=>'html'));

                    $this->email->from($email_config->sender, "Habitusana");

                    $this->email->to($to);

                    $this->email->subject($subject);

                    $this->email->message($message);

                    $this->email->send();



                #-----------------------------

                // save email delivary data

                $save_email = array(

                  'delivery_date_time ' => date("Y-m-d h:i:s"),

                  'reciver_email '=> $to,

                  'message'             => $message       

                );

                

                $this->db->insert('email_delivery',$save_email);

                $this->session->set_flashdata('message','<div class="alert alert-success"> '.display('email_send_msg').' </div>');

	    		redirect("admin/email/Email/custom_email");

	       }else{

	       	$this->session->set_flashdata('message','<div class="alert alert-danger"> Inserisci l\'email del destinatario  </div>');

	    	redirect("admin/email/Email/custom_email");

	       }

                   

    } 



}