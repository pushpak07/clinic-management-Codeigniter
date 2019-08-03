<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_controller extends CI_Controller {
/*
|--------------------------------------
|   Constructor function
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
        if($user_type!=3){
         redirect('logout');
        }

	    $this->load->model('admin/Users_model','users_model');
	}


/*
|--------------------------------------
|    patient edit form view 
|--------------------------------------
*/ 
  public function update_profile()
  {
    $user_id = $this->session->userdata('user_id');
    $data['title'] = "Updat Profile";
    $data['user_info'] = $this->users_model->get_user_by_id($user_id);
   
    $this->load->view('admin/user/_header',$data);
    $this->load->view('admin/user/_left_sideber');
    $this->load->view('admin/user/view_user_profile');
    $this->load->view('admin/user/_footer');
  }

/*
|--------------------------------------
|    patient edit save to patient_tbl
|--------------------------------------
*/    
  public function save_update_profile() 
  {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[9]|max_length[15]');
    
      if ($this->form_validation->run()==true) {
          // get picture data
          if (@$_FILES['picture']['name']){
              $config['upload_path']   = './assets/uploads/users/';
              $config['allowed_types'] = 'gif|jpg|jpeg|png';
              $config['overwrite']     = false;
              $config['max_size']      = 1024;
              $config['remove_spaces'] = true;
              $config['max_filename']   = 10;
              $config['file_ext_tolower'] = true;
              
              $this->load->library('upload', $config);
              if (!$this->upload->do_upload('picture')){
                  $this->session->set_flashdata('exception',"<div class='alert alert-danger msg'>".display('image_upload_msg')."</div>");
              redirect('admin/user/Users_controller/update_profile');
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
              $image = $this->input->post('pic',TRUE);
            }


            $create_date = date('Y-m-d h:i:s');
            $birth_date = date('Y-m-d',strtotime($this->input->post('birth_date',TRUE)));

            $savedata =  array(
            'full_name' => $this->input->post('name',TRUE),
            'user_phone' => $this->input->post('phone',TRUE), 
            'birth_date' =>$birth_date,
            'sex' => $this->input->post('gender',TRUE),
            'blood_group' => $this->input->post('blood_group',TRUE),
            'address' => $this->input->post('address',TRUE),
            'picture' => $image,
            'create_date'=>$create_date
            );


            $savedata = $this->security->xss_clean($savedata); 
            $user_id = $this->session->userdata('user_id');
            $this->users_model->save_update_users($savedata,$user_id);

            $this->session->set_flashdata('message',"<div class='alert alert-success msg'>".display('update_msg')."</div>");
            redirect('admin/user/Users_controller/update_profile');
        } else {
            $user_id = $this->session->userdata('user_id');
            $data['title'] = "Update Profile";
            $data['user_info'] = $this->users_model->get_user_by_id($user_id);
            $this->load->view('admin/user/_header',$data);
            $this->load->view('admin/user/_left_sideber');
            $this->load->view('admin/user/view_user_profile');
            $this->load->view('admin/user/_footer');
        }
  }


}	