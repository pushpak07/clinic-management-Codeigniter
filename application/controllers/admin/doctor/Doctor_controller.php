<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Doctor_controller extends CI_Controller {
  
  /*
  |--------------------------------------
  |  Construction function 
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
    $user_type = $this->session->userdata('user_type'); 
        if($user_type!=2){
         redirect('logout');
        }
	  $this->load->model('admin/doctor/Doctor_model','doctor_model');
	}


  /*
  |--------------------------------------
  | Profile
  |--------------------------------------
  */
	public function profile()
	{
    $data['title'] = "Profile";
		$data['doctor_info'] = $this->doctor_model->get_doctor_by_id($this->session->userdata('doctor_id'));
    $this->load->view('admin/doctor/_header',$data);
    $this->load->view('admin/doctor/_left_sideber');
    $this->load->view('admin/doctor/view_profile');
    $this->load->view('admin/doctor/_footer');
	}


  /*
  |--------------------------------------
  | update_profile
  |--------------------------------------
  */ 

	public function update_profile()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('phone','Phone','required');
		
		if($this->form_validation->run()==true) {
			    # get picture data
              if (@$_FILES['picture']['name']) {
                $config['upload_path']   = './assets/uploads/doctor/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['overwrite']     = false;
                $config['max_size']      = 1024;
                $config['remove_spaces'] = true;
                $config['max_filename']   = 10;
                $config['file_ext_tolower'] = true;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('picture'))
                {
                   $this->session->set_flashdata('execption',display('image_upload_msg'));
                   redirect('profile');
                } else {
                
                 $data = $this->upload->data();
                 $image = base_url($config['upload_path'].$data['file_name']);
                  #------------resize image------------#
                  $this->load->library('image_lib');
                  $config['image_library'] = 'gd2';
                  $config['source_image'] = $config['upload_path'].$data['file_name'];
                  $config['create_thumb'] = FALSE;
                  $config['maintain_ratio'] = FALSE;
                  $config['width']     = 250;
                  $config['height']   = 200;

                  $this->image_lib->clear();
                  $this->image_lib->initialize($config);
                  $this->image_lib->resize();
                  #-------------resize image----------#
                }

                } else {
                    $image = $this->input->post('image',TRUE);
                } 

                $savedata =  array(
                    'doctor_name' => $this->input->post('name',TRUE),
                    'department' => $this->input->post('department',TRUE),
                    'designation' => $this->input->post('designation',TRUE),
                    'degrees' => $this->input->post('degree',TRUE), 
                    'specialist' => $this->input->post('specialist',TRUE),
                    'doctor_exp' => $this->input->post('doctor_exp',TRUE),
                    'birth_date' => $this->input->post('birth_date',TRUE),
                    'sex' => $this->input->post('gender',TRUE),
                    'blood_group' => $this->input->post('blood_group',TRUE),
                    'doctor_phone' => $this->input->post('phone',TRUE),
                    'address' => $this->input->post('address',TRUE),
                    'about_me' => $this->input->post('about_me',TRUE),
                    'service_place' => $this->input->post('service_place',TRUE),
                    'picture' => $image
                );
               $doctor_id = $this->input->post('doctor_id');


              $this->doctor_model->save_edit_dcotor_profile($savedata, $doctor_id);
              $this->session->set_flashdata('message','<div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>'.display('update_msg').'</strong> .
              </div>');
              redirect('admin/doctor/Doctor_controller/profile'); 

			} else {
                    $data['title'] = "Profile";
                    $data['doctor_info'] = $this->doctor_model->get_doctor_by_id($this->session->userdata('doctor_id'));
                    $this->load->view('admin/doctor/_header',$data);
                    $this->load->view('admin/doctor/_left_sideber');
                    $this->load->view('admin/doctor/view_profile');
                    $this->load->view('admin/doctor/_footer');
			}
	}


/*
|---------------------------------------------#
|   password chang view form
|---------------------------------------------#
*/
    public function password_change()
    {
        $this->load->view('admin/doctor/_header');
        $this->load->view('admin/doctor/_left_sideber');
        $this->load->view('admin/doctor/password_change');
        $this->load->view('admin/doctor/_footer');
            
    }

/*
|---------------------------------------------#
|   change_password_save
|---------------------------------------------#
*/
    public function change_password_save()
    {
        $this->form_validation->set_rules('old_password', 'Your old password', 'trim|required');
        $this->form_validation->set_rules('new_password', 'Your new password', 'trim|required|min_length[8]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Your confirm password', 'trim|required|min_length[8]');

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
               redirect('admin/doctor/Doctor_controller/password_change');

            } else {
                $this->session->set_flashdata('errormessage',display('password_change_error_msg'));
                redirect('admin/doctor/Doctor_controller/password_change');
            }
        } else {
            $this->load->view('admin/doctor/_header');
            $this->load->view('admin/doctor/_left_sideber');
            $this->load->view('admin/doctor/password_change');
            $this->load->view('admin/doctor/_footer');
        }
    }




}