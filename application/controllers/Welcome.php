<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
/*
|--------------------------------------
|   constructor funcion
|--------------------------------------
*/ 
	public function __construct() 
	{
		parent::__construct();
       
  }

/*
|--------------------------------------
|   View home page in the website
|--------------------------------------
*/
	public function index($patient_id=NULL)
	{
      $this->load->view('admin/login');
	}


}
