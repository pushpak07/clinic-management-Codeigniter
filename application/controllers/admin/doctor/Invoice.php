<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

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

    #------------------------------------------------
    #       view create new post form
    #------------------------------------------------
    public function index(){
        $data['doctor'] = $this->doctor_model->get_all_doctor();
        $data['title'] = "Invoice";
        $this->load->view('admin/doctor/_header',$data);
        $this->load->view('admin/doctor/_left_sideber');
        $this->load->view('admin/doctor/new_invoice');
        $this->load->view('admin/doctor/_footer');
    }

    public function save_invoice(){

        $invoice = array(
            'patient_id' => $this->input->post('patient_id'),
            'doctor_id' => $this->session->userdata('doctor_id'),
            'grand_total' => $this->input->post('grand_total_price'),
            'total_tax' => $this->input->post('total_tax'),
            'paid' => $this->input->post('paid_amount'),
            'due' => $this->input->post('due_amount'),
            
            'payment_notes' => $this->input->post('payment_notes'),
            'payment_method_notes' => $this->input->post('payment_method_notes'),
            'payment_method' => $this->input->post('payment_method'),
            'date_time' => $this->input->post('date'),
            
            );

        $this->db->insert('invoice',$invoice);
        $id = $this->db->insert_id();

        $product_id['product_id'] = $this->input->post('product_id');
        $discount['discount'] = $this->input->post('discount');
        $quantity['quantity'] = $this->input->post('product_quantity');
        $product_rate['rate'] = $this->input->post('product_rate');
        $total_price['price'] = $this->input->post('total_price');

        $data = array();
        for($i=0; $i<count($product_id['product_id']); $i++){
            $data =array(
                'invoice_id' => $id,
                'product_id' => $product_id['product_id'][$i],
                'discount' => $discount['discount'][$i],
                'quantity' => $quantity['quantity'][$i],
                'price' => $product_rate['rate'][$i],
                'grand_price' => $total_price['price'][$i]
                );
            $this->db->insert('invoice_product',$data);
        }

        $this->session->set_userdata(array('invo_id'=>$id));
        redirect("admin/doctor/invoice/invoice_view/".$id);       

    }



    public function invoice_view($id=NULL){

        $data['invo'] = $this->db->select('invoice.*,doctor_tbl.*,patient_tbl.*')
        ->from('invoice')
        ->join('doctor_tbl','doctor_tbl.doctor_id=invoice.doctor_id')
        ->join('patient_tbl','patient_tbl.patient_id=invoice.patient_id')
        ->where('invoice_id',$id)
        ->get()
        ->row();

        $data['invo_product'] = $this->db->select('invoice_product.*,service_info.*')
        ->from('invoice_product')
        ->join('service_info','service_info.id=invoice_product.product_id')
        ->where('invoice_product.invoice_id',$id)
        ->get()
        ->result();

        $data['title'] = "Invoice";
        $this->load->view('admin/doctor/_header',$data);
        $this->load->view('admin/doctor/_left_sideber');
        $this->load->view('admin/doctor/_invoice_recit');
        $this->load->view('admin/doctor/_footer');

    }





    public function invoice_list(){

       $data['invo'] = $this->db->select('invoice.*,doctor_tbl.*,patient_tbl.*')
        ->from('invoice')
        ->join('doctor_tbl','doctor_tbl.doctor_id=invoice.doctor_id')
        ->join('patient_tbl','patient_tbl.patient_id=invoice.patient_id')
        ->get()
        ->result();

        $data['title'] = "Invoice List";
        $this->load->view('admin/doctor/_header',$data);
        $this->load->view('admin/doctor/_left_sideber');
        $this->load->view('admin/doctor/_invoice_list');
        $this->load->view('admin/doctor/_footer');
    }




    public function edit_invoice($id=NULL){

        $data['invo'] = $this->db->select('invoice.*,doctor_tbl.*,patient_tbl.*')
        ->from('invoice')
        ->join('doctor_tbl','doctor_tbl.doctor_id=invoice.doctor_id')
        ->join('patient_tbl','patient_tbl.patient_id=invoice.patient_id')
        ->where('invoice_id',$id)
        ->get()
        ->row();

        $data['invo_product'] = $this->db->select('invoice_product.*,service_info.*')
        ->from('invoice_product')
        ->join('service_info','service_info.id=invoice_product.product_id')
        ->where('invoice_product.invoice_id',$id)
        ->get()
        ->result();

        $data['title'] = "Invoice";

        $data['doctor'] = $this->doctor_model->get_all_doctor();

        $this->load->view('admin/doctor/_header',$data);
        $this->load->view('admin/doctor/_left_sideber');
        $this->load->view('admin/doctor/_edit_invoice');
        $this->load->view('admin/doctor/_footer'); 

    }


    public function update_invoice(){

        $invoice = array(
            'patient_id' => $this->input->post('patient_id'),
            'doctor_id' =>  $this->session->userdata('doctor_id'),
            'grand_total' => $this->input->post('grand_total_price'),
            'total_tax' => $this->input->post('total_tax'),
            'paid' => $this->input->post('paid_amount'),
            'due' => $this->input->post('due_amount'),
            
            'payment_notes' => $this->input->post('payment_notes'),
            'payment_method_notes' => $this->input->post('payment_method_notes'),
            'payment_method' => $this->input->post('payment_method'),
            'date_time' => $this->input->post('date'),
            
            );

        $invoice_id = $this->input->post('invoice_id');
        $this->db->where('invoice_id',$invoice_id)
        ->update('invoice',$invoice);


        $inv_p_id['inv_p_id'] = $this->input->post('inv_p_id');


        $product_id['product_id'] = $this->input->post('product_id');
        $discount['discount'] = $this->input->post('discount');
        $quantity['quantity'] = $this->input->post('product_quantity');
        $product_rate['rate'] = $this->input->post('product_rate');
        $total_price['price'] = $this->input->post('total_price');

        $data = array();
        for($i=0; $i<count($product_id['product_id']); $i++){

            $data = array(
                'invoice_id' => $invoice_id,
                'product_id' => $product_id['product_id'][$i],
                'discount' => $discount['discount'][$i],
                'quantity' => $quantity['quantity'][$i],
                'price' => $product_rate['rate'][$i],
                'grand_price' => $total_price['price'][$i]
                );

            $this->db->where('inv_p_id',$inv_p_id['inv_p_id'][$i])
            ->update('invoice_product',$data);
        }

         redirect("admin/doctor/invoice/invoice_view/".$invoice_id);
    }


    public function delete($id=NULL){
        $this->db->where('invoice_id',$id)->delete('invoice');
        $this->db->where('invoice_id',$id)->delete('invoice_product');
        redirect('admin/doctor/Invoice/invoice_list');
    }

}