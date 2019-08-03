<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_controller extends CI_Controller {
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
        if($user_type!=3){
         redirect('logout');
        }
	    $this->load->model('admin/Setting_model','setting_model');
	}



/*
|---------------------------------------------#
|	password chang view form
|---------------------------------------------#
*/
	public function password_change()
	{
		$data['title'] = "Change Password";
		$this->load->view('admin/user/_header');
		$this->load->view('admin/user/_left_sideber');
		$this->load->view('admin/user/view_change_password');
		$this->load->view('admin/user/_footer');
			
	}

/*
|---------------------------------------------#
|	change_password_save
|---------------------------------------------#
*/
	public function change_password_save()
	{
		$this->form_validation->set_rules('old_password', 'Your old password', 'trim|required');
		$this->form_validation->set_rules('new_password', 'Your new password', 'trim|required|min_length[6]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Your confirm password', 'trim|required|min_length[6]');

        if ($this->form_validation->run()==true) {
        	
        	$id = $this->session->userdata('log_id');
	        $oldpass = MD5($this->input->post('old_password'));
	        $new_pass['password'] = MD5($this->input->post('new_password'));

	        $query = $this->db->select('password')
	        ->from('log_info')
	        ->where('log_id',$id)
	        ->where('password',$oldpass)
	        ->get()
	        ->num_rows();

            if($query > 0) {
                $this->db->where('log_id',$id)
                ->update('log_info',$new_pass);
               $this->session->set_flashdata('message', display('password_change_msg'));
               redirect('admin/user/Setting_controller/password_change');

            } else {
                $this->session->set_flashdata('errormessage',display('password_change_error_msg'));
              	redirect('admin/user/Setting_controller/password_change');
            }
        } else {
        	$this->load->view('admin/user/_header');
			$this->load->view('admin/user/_left_sideber');
			$this->load->view('admin/user/view_change_password');
			$this->load->view('admin/user/_footer');
        }
	}

}