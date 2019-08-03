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
        if($user_type!=1){
         redirect('logout');
        }

	    $this->load->model('admin/Users_model','users_model');
	}

/*
|--------------------------------------
|     view creat new users
|--------------------------------------
*/
	public function create_new_user()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_left_sideber');
		$this->load->view('admin/view_create_users');
		$this->load->view('admin/_footer');
	}

/*
|--------------------------------------
|   user list
|--------------------------------------
*/
  public function user_list()
  {
    $data['user_list'] = $this->users_model->get_all_users();
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/view_user_list');
    $this->load->view('admin/_footer');
  }

/*
|--------------------------------------
| save patient to patient_tbl
|--------------------------------------
*/


	public function save_user()
	{
	   $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[9]|max_length[15]');
      $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[log_info.email]');         
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
      if ($this->form_validation->run()==true) {

        $log_data = array(
        'email' => $this->input->post('email',TRUE), 
        'password' => MD5($this->input->post('password',TRUE)),
        'user_type' => '3'
        );
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
        			redirect('admin/Users_controller/create_new_user');
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
              $image = "";
            }


        #------------------------------------------------#
          $exists_user = $this->users_model->exists_user(
              $this->input->post('phone',true),
              date('Y-m-d',strtotime($this->input->post('birth_date',true)))
          ); 

          if($exists_user == true){
            $this->session->set_flashdata('exception','<div class="alert alert-danger">'.$this->input->post('name') .display('exist_error_msg').'</div>');  
            redirect('admin/Users_controller/create_new_user');
          }

          // insert login info
          $this->db->insert('log_info', $log_data);
          // get last insert id
          $log_id = $this->db->insert_id();

            $create_date = date('Y-m-d h:i:s');
            $birth_date = date('Y-m-d',strtotime($this->input->post('birth_date',TRUE)));

            $savedata =  array(
            'log_id' => $log_id,
            'full_name' => $this->input->post('name',TRUE),
            'user_email' => $this->input->post('email',true),
            'user_phone' => $this->input->post('phone',TRUE), 
            'birth_date' =>$birth_date,
            'sex' => $this->input->post('gender',TRUE),
            'blood_group' => $this->input->post('blood_group',TRUE),
            'address' => $this->input->post('address',TRUE),
            'picture' => $image,
            'create_date'=>$create_date
            );


            $savedata = $this->security->xss_clean($savedata); 
            
            $this->users_model->save_users($savedata);
            $this->session->set_flashdata('message',"<div class='alert alert-success msg'>".$this->input->post('name',TRUE) .', '. display('register_msg')."</div>");
            redirect('admin/Users_controller/user_list');
        
        } else {
            $data['old'] = (object) $_POST;
            $this->load->view('admin/_header',$data);
            $this->load->view('admin/_left_sideber');
            $this->load->view('admin/view_create_users');
            $this->load->view('admin/_footer');
      	}
	}






/*
|--------------------------------------
|   delete patient to patient_tbl
|--------------------------------------
*/ 
  public function delete_user($log_id)
  {
      $this->db->where('log_id',$log_id);
      $this->db->delete('users_tbl');

      $this->db->where('log_id',$log_id);
      $this->db->delete('log_info');
      $this->session->set_flashdata('message',"<div class='alert alert-success msg'>".display('delete_msg')."</div>");
      redirect('admin/Users_controller/user_list');
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
   
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/view_user_profile');
    $this->load->view('admin/_footer');
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
              redirect('admin/Users_controller/update_profile');
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
            redirect('admin/Users_controller/update_profile');
        } else {
            $user_id = $this->session->userdata('user_id');
            $data['title'] = "Update Profile";
            $data['user_info'] = $this->users_model->get_user_by_id($user_id);
            $this->load->view('admin/_header',$data);
            $this->load->view('admin/_left_sideber');
            $this->load->view('admin/view_user_profile');
            $this->load->view('admin/_footer');
        }
  }


}	