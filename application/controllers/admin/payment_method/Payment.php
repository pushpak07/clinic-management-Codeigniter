<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller
{


    function  __construct() {
        parent::__construct();
        $session_id = $this->session->userdata('session_id'); 
        if($session_id == NULL ){
         redirect('logout');
        }
    $user_type = $this->session->userdata('user_type'); 
        if($user_type!=1){
         redirect('logout');
        }
        $this->load->library('paypal_lib');
        $this->load->model('web/Home_view_model','home_view_model');

    }
    

    public function index(){

        $doctor_id = $this->session->userdata('doctor_id');
        $data['info'] = $this->db->select('*')->from('payment_account_setup')->where('doctor_id',$doctor_id)->get()->row();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_left_sideber');
        $this->load->view('admin/view_payment_form');
        $this->load->view('admin/_footer');

    }



    public function save_setup(){

        $doctor_id = $this->session->userdata('doctor_id');
        $savedata = array(
            'doctor_id'=>$doctor_id,
            'paypal_email'=>$this->input->post('paypal_email'),
            'amount'=>$this->input->post('amount')
            );

        $data = $this->db->select('*')->from('payment_account_setup')->where('doctor_id',$doctor_id)->get()->row();
        if($data!=NULL){
            $this->db->where('doctor_id',$doctor_id)->update('payment_account_setup',$savedata);
        }else{
            $this->db->insert('payment_account_setup',$savedata);
        }

        $this->session->set_flashdata("message","<div class='alert alert-success msg'>Setup Successfully</div>");
        redirect('admin/payment_method/Payment');
    }



    function pay_with_doctor($id){

        //Set variables for paypal form
        $returnURL = base_url().'admin/payment_method/Payment/success'; //payment success url
        $cancelURL = base_url().'admin/payment_method/Payment/cancel'; //payment cancel url
        $notifyURL = base_url().'admin/payment_method/Payment/ipn'; //ipn url
        //get particular product data
         

        $info = $this->db->select('*')->from('appointment_tbl')->where('appointment_id',$id)->get()->row();             
    
        @$fee = $this->db->select('*')->from('payment_account_setup')->where('doctor_id',$info->doctor_id)->get()->row();

        
        $logo = 'assets/images/logo.png';
        
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);

        $this->paypal_lib->add_field('item_name', $id);
        $this->paypal_lib->add_field('custom', $id);
        $this->paypal_lib->add_field('item_number', 1);
        $this->paypal_lib->add_field('amount',  $fee->amount);
        $this->paypal_lib->paypal_auto_form();


    }


    public function success(){
        //get the transaction data
echo "Successfully";

        $paypalInfo = $this->input->get();
        print_r($paypalInfo);  exit;
          
        $data['item_number'] = $paypalInfo['item_number']; 
        $data['txn_id'] = $paypalInfo["tx"];
        $data['payment_amt'] = $paypalInfo["amt"];
        $data['currency_code'] = $paypalInfo["cc"];
        $data['status'] = $paypalInfo["st"];
        $data['info'] = $this->home_view_model->Home_satup();

        $this->load->view('public/payment_success',$data);
    }








    public function cancel(){
        $data['info'] = $this->home_view_model->Home_satup();
        $this->load->view('public/pay_error',$data);
    }



    public function ipn(){
       //paypal return transaction details array
        $paypalInfo    = $this->input->post();
        $id = $paypalInfo['custom'];

        $info = $this->db->select('*')->from('appointment_tbl')->where('appointment_id',$id)->get()->row();  

        $data['patient_id'] = $paypalInfo['custom'];
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['doctor_id']    = $info->doctor_id;
        $data['amount']    = $paypalInfo["amount"];
        $data['payment_status']    = $paypalInfo["payment_status"];

        $paypalURL = $this->paypal_lib->paypal_url;        
        $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
        //check whether the payment is verified
        if(preg_match("/VERIFIED/i",$result)){
            //insert the transaction data into the database
             $this->db->insert('payment_table',$data);

             echo "string";
             
        }

    }
}