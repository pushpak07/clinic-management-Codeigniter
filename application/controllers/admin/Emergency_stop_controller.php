<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Emergency_stop_controller extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
    
      $session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
    $user_type = $this->session->userdata('user_type'); 
        if($user_type!=1){
         redirect('logout');
        }
	     $this->load->model('admin/Emergency_stop_model','emergency_stop_model');
	}

  /*
  |--------------------------------------
  | view emergency sotop form
  |--------------------------------------
  */
	public function index()
	{
    $data['title'] = "Emergency Stop";
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_left_sideber');
		$this->load->view('admin/view_emergency_stop');
		$this->load->view('admin/_footer');
	}
  /*
  |--------------------------------------
  |Emergency  list view
  |--------------------------------------
  */
    public function emergency_stop_list()
    {
        $data['title'] = "Emergency Stop List";
        $data['stop_info'] = $this->emergency_stop_model->get_stop_list();
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/view_emergency_stop_list');
        $this->load->view('admin/_footer');
    }

  /*
  |--------------------------------------
  | save emergency stop 
  |--------------------------------------
  */
	public function save_emergency_stop()
	{
     	 $this->form_validation->set_rules('stop_date', 'Set Stop date', 'required');
         $this->form_validation->set_rules('schedul_date', 'Schedul date', 'trim|required');
         $this->form_validation->set_rules('message', 'Message', 'trim|required');

         if($this->form_validation->run()==true){
         	$saveData = array(
         		'doctor_id' => $this->session->userdata('doctor_id'), 
         		'stop_date' => $this->input->post('stop_date'), 
         		'schedul_date' => $this->input->post('schedul_date'), 
         		'message' => $this->input->post('message')
         		);
         	$this->emergency_stop_model->save_stop($saveData);
            $this->session->set_flashdata('message','<div class="alert alert-success msg">'.display('emergency_stop_msg').'</div>');
         	redirect('admin/Emergency_stop_controller');

         }else{
				$this->load->view('admin/_header');
				$this->load->view('admin/_left_sideber');
				$this->load->view('admin/view_emergency_stop');
				$this->load->view('admin/_footer');
         }      
    }
  /*
  |--------------------------------------
  |  view  Edit emergency stop form 
  |--------------------------------------
  */          
        public function edit_emergency_stop($id)
        {
          $data['title'] = "Edit Emergency Stop";
          $data['stop_info'] = $this->emergency_stop_model->get_stop_inde_info($id);
    		$this->load->view('admin/_header',$data);
    		$this->load->view('admin/_left_sideber');
    		$this->load->view('admin/view_edit_emergency_stop');
    		$this->load->view('admin/_footer');
        
        }
  /*
  |--------------------------------------
  |   save_edit_emergency_stop
  |--------------------------------------
  */        
        public function save_edit_emergency_stop()
        {
         	$this->form_validation->set_rules('stop_date', 'Set Stop date', 'required');
            $this->form_validation->set_rules('schedul_date', 'Schedul date', 'trim|required');
            $this->form_validation->set_rules('message', 'Message', 'trim|required');
            $stop_id = $this->input->post('stop_id');
             if($this->form_validation->run()==true){
             	$saveData = array(
             		'doctor_id' => $this->session->userdata('doctor_id'), 
             		'stop_date' => $this->input->post('stop_date'), 
             		'schedul_date' => $this->input->post('schedul_date'), 
             		'message' => $this->input->post('message')
             		);

             	$this->emergency_stop_model->edit_save_stop($saveData,$stop_id);
                $this->session->set_flashdata('message','<div class="alert alert-success msg">'.display('update_msg').'</div>');
                ;
             	redirect('admin/Emergency_stop_controller/emergency_stop_list');
             }else{

             	$data['stop_info'] = (object)array(
	         		'stop_id' => $this->input->post('stop_id') ,
	         		'stop_date' => $this->input->post('stop_date') ,
	         		'schedul_date' => $this->input->post('schedul_date') , 
	         		'message' => $this->input->post('message') 
	         		);

				$this->load->view('admin/_header',$data);
	    		$this->load->view('admin/_left_sideber');
	    		$this->load->view('admin/view_edit_emergency_stop');
	    		$this->load->view('admin/_footer');
             }
        }

  /*
  |--------------------------------------
  | delete_emergency_stop
  |--------------------------------------
  */
    public function delete_emergency_stop($id)
    {
    	$this->db->where('stop_id',$id);
    	$this->db->delete('emergency_stop_tbl');
      $this->session->set_flashdata('message','<div class="alert alert-success msg">'.display('delete_msg').'</div>');
            ;
      redirect('admin/Emergency_stop_controller/emergency_stop_list');
    }
    
}