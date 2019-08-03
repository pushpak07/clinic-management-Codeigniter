<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_controller extends CI_Controller {

#--------------------------------
#      __constructor function	
#--------------------------------	
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
	    
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('admin/Setup_model','setup_model');
}



#--------------------------------
#      Insert_Medicine_form	
#--------------------------------	
public function add_language()
{
	$data['title'] = "Add New Medicine";
	$data['language'] = $this->setup_model->get_language();
    
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/setup/_add_language');
    $this->load->view('admin/_footer');
}

public function save_language(){
	
	$data = array('lang_name'=>$this->input->post('language_name'));
	$this->db->insert('pres_language',$data);
	redirect('admin/Setup_controller/add_language');
}

public function delete_lang($id){
	$this->db->where('lang_id',$id)->delete('pres_language');
	redirect('admin/Setup_controller/add_language');
}


public function add_section(){
	$data['language'] = $this->setup_model->get_language();
	$data['section'] = $this->setup_model->get_section();
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/setup/_add_section');
    $this->load->view('admin/_footer');
}

public function save_section(){
	$data = array('lang_id'=> $this->input->post('lang_id'),
		'section_name' => $this->input->post('section_name'));
	$this->db->insert('section',$data);
	redirect('admin/Setup_controller/add_section');
}

public function delete_section($id){
	$this->db->where('ms_id',$id)->delete('section');
	redirect('admin/Setup_controller/add_section');
}


public function add_disease(){
	$data['language'] = $this->setup_model->get_language();
	$data['disease'] = $this->setup_model->get_disease();
    
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/setup/_add_disease');
    $this->load->view('admin/_footer');	
}

public function save_disease(){
	$data = array('lang_id'=> $this->input->post('language_id'),
		'ms_id' => $this->input->post('section_id'),
		'disease_name' => $this->input->post('disease_name')
		);
	$this->db->insert('disease',$data);
	redirect('admin/Setup_controller/add_disease');
}


public function delete_disease($id){
	$this->db->where('md_id',$id)->delete('disease');
	redirect('admin/Setup_controller/add_disease');
}


public function add_category(){
	$data['language'] = $this->setup_model->get_language();
	$data['category'] = $this->setup_model->get_category();
    
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/setup/_add_category');
    $this->load->view('admin/_footer');	
}


public function save_category(){

	$data = array(
		'lang_id'=> $this->input->post('language_id'),
		'ms_id'=> $this->input->post('section_id'),
		'md_id' => $this->input->post('disease_id'),
		'cat_name' => $this->input->post('category_name')
		);
	$this->db->insert('category',$data);
	redirect('admin/Setup_controller/add_category');	

}

public function delete_category($id){
	$this->db->where('mc_id',$id)->delete('category');
	redirect('admin/Setup_controller/add_category');	
}

public function add_classification(){
	$data['language'] = $this->setup_model->get_language();
	$data['category'] = $this->setup_model->get_category();
	$data['classification'] = $this->setup_model->get_classification();;
    
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/setup/_add_classification');
    $this->load->view('admin/_footer');	
}

public function save_classification(){
	$data = array(
		'lang_id' =>$this->input->post('language_id'),
		'cat_id' =>$this->input->post('cat_id'),
		'classification' =>$this->input->post('classification')
		);

	$this->db->insert('classification',$data);

	redirect('admin/Setup_controller/add_classification');	

}

public function delete_classification($id){
	$this->db->where('classific_id',$id)->delete('classification');
	redirect('admin/Setup_controller/add_classification');
}

public function add_medicine(){

	$data['language'] = $this->setup_model->get_language();
	$data['category'] = $this->setup_model->get_category();
	$data['classification'] = $this->setup_model->get_classification();
    
    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/setup/view_add_medicine');
    $this->load->view('admin/_footer');	
}
#--------------------------------
#      Save_Medicine	
#--------------------------------	
	public function save_medicine()
	{

		$medicine = array(
			'lang_id' => $this->input->post('language_id'),
			'cat_id' => $this->input->post('category_id'),
			'medicine' => $this->input->post('medicine_name'),
			'diagonisis' => $this->input->post('diagonisis'),
			'treatment' => $this->input->post('treatment'),
			'symptom' => $this->input->post('symptom'),
			'classification' => $this->input->post('cls_name')
		);

		$this->db->insert('medicine',$medicine);
		$this->session->set_flashdata('message','<div class="alert alert-success msg">'.display('medicine_add_msg').'</div><br>');
		redirect('admin/Setup_controller/add_medicine');
		
	}


#--------------------------------
#      View Medicine list	
#--------------------------------
public function medicine_List()
{
	$data['title'] = "Medicine List";

	$data['medicine'] = $this->setup_model->get_medicine();


    $this->load->view('admin/_header',$data);
    $this->load->view('admin/_left_sideber');
    $this->load->view('admin/setup/view_medicine_list');
    $this->load->view('admin/_footer');
}


#--------------------------------
#      Delete_Medicine	
#--------------------------------
	public function delete_medicine($id=NULL)
	{
		$this->db->where('medicine_id',$id)->delete('medecine_info');
		$this->session->set_flashdata('exception','<div class="alert alert-danger msg">'.display('delete_msg').'</div><br>');
		redirect('Medicine_List');
	}

#--------------------------------
#      Edit_Medicine view form	
#--------------------------------
	public function edit_medicine($id=NULL)
	{
		$data['language'] = $this->setup_model->get_language();
		$data['category'] = $this->setup_model->get_category();
    
		$data['med_info'] = $this->setup_model->get_medicine_by_id($id);
	

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/setup/view_medicine_edit');
        $this->load->view('admin/_footer');
	}

#--------------------------------
#      Save_Edit_Medicine	
#--------------------------------
	public function save_edit_medicine()
	{
		$medicine = array(
			'lang_id' => $this->input->post('language_id'),
			'cat_id' => $this->input->post('category_id'),
			'medicine' => $this->input->post('medicine_name'),
			'diagonisis' => $this->input->post('diagonisis'),
			'treatment' => $this->input->post('treatment'),
			'symptom' => $this->input->post('symptom'),
			'classification' => $this->input->post('cls_name')
		);
		$id = $this->input->post('medicine_id');

		$this->db->where('medicine_id',$id);
		$this->db->update('medicine',$medicine);
		$this->session->set_flashdata('message','<div class="alert alert-success">'.display('update_msg').'</div><br>');
		redirect('admin/Setup_controller/medicine_List');
	}

	public function add_medicine_herbs(){

		$data['language'] = $this->setup_model->get_language();
	
		$this->load->view('admin/_header',$data);
	    $this->load->view('admin/_left_sideber');
	    $this->load->view('admin/setup/_add_herbs');
	    $this->load->view('admin/_footer');
	}


	public function save_medicine_herbs(){

		$this->form_validation->set_rules('medicine_id', 'Medicine', 'required');
		$herbs = array(
			'lang_id' => $this->input->post('language_id'),
			'medicine_id' => $this->input->post('medicine_id'),
			'herbs_id' => $this->input->post('herbs_id')
		);

		if ($this->form_validation->run()==true) {
			$this->db->insert('medicine_herbs',$herbs);
			$this->session->set_flashdata('message','<div class="alert alert-success">'.display('update_msg').'</div><br>');
			redirect('admin/Setup_controller/add_medicine_herbs');
		} else {

			$data['language'] = $this->setup_model->get_language(); 		
			$this->load->view('admin/_header',$data);
		    $this->load->view('admin/_left_sideber');
		    $this->load->view('admin/setup/_add_herbs');
		    $this->load->view('admin/_footer');

		}

	}	

	public function medicine_herbs_list(){
		
		$data['herbs'] = $this->setup_model->get_medicine_harbs();
		$this->load->view('admin/_header',$data);
	    $this->load->view('admin/_left_sideber');
	    $this->load->view('admin/setup/_herbs_list');
	    $this->load->view('admin/_footer');
	}


	public function delete_medicine_herbs($id){
		$this->db->where('mh_id',$id)->delete('medicine_herbs');
		$this->session->set_flashdata('message','<div class="alert alert-danger">'.display('delete_msg').'</div><br>');
		redirect('admin/Setup_controller/medicine_herbs_list');
	}


	public function add_herbs(){

		$data['language'] = $this->setup_model->get_language();
		$data['herbs'] = $this->setup_model->get_herbs();

		$this->load->view('admin/_header',$data);
	    $this->load->view('admin/_left_sideber');
	    $this->load->view('admin/setup/_add_hb');
	    $this->load->view('admin/_footer');

	}

	public function save_herbs(){

		$data = array(
			'lang_id' => $this->input->post('language_id'),
			'herbs' => $this->input->post('herbs')
		);

		$this->db->insert('herbs',$data);
		$this->session->set_flashdata('message','<div class="alert alert-success">Herbs Add Successfully</div><br>');
		redirect('admin/Setup_controller/add_herbs');

	}

	public function delete_herbs($id=NULL){
		$this->db->where('herbs_id',$id)->delete('herbs');
		$this->session->set_flashdata('message','<div class="alert alert-success">Herbs Delete Successfully</div><br>');
		redirect('admin/Setup_controller/add_herbs');

	}

}		