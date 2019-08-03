

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('Setup_Payment_Method');?></h1>
            <small><?php echo display('Setup_Payment_Method');?></small>
            <ol class="breadcrumb">
               <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 ">
                <div  class="panel panel-bd panel-form">
                <div class="panel-heading no-print">
                    <div class="btn-group"> 
                        <h4><?php echo display('Setup_Payment_Method');?></h4>
                    </div>
                </div> 
                    <div class="panel-body">
                        <div class="portlet-body form">
                             <?php 
                                $msg = $this->session->flashdata('message');
                                  if($msg !=''){
                                      echo $msg;
                                  }
                                  
                                $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                                echo form_open_multipart('admin/payment_method/Payment/save_setup', $attributes);                
                             ?>
                            
                            <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"><?php echo display('paypal_business_email')?> </label>
                                        <div class="col-md-6">
                                            <input type="text" name="paypal_email" value="<?php echo @$info->paypal_email;?>" class="form-control"  required  > 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> <?php echo display('amount');?> </label>
                                        <div class="col-md-6">
                                            <input type="text"  name="amount" value="<?php echo @$info->amount;?>" class="form-control" required > 
                                        </div>
                                    </div>


                                <div class="form-group row">
                                    <div class="col-sm-offset-3 col-sm-6">
                                       
                                            <button type="reset" class="btn btn-danger"><?php echo display('reset'); ?></button>
                                                
                                            <button type="submit" class="btn btn-success"><?php echo display('submit'); ?></button>
                                        
                                    </div>
                                </div>
                        </div>
                            <?php echo form_close();?>

                    </div>
                </div>  
             </div>
        </div>
        </div>
            
    </section>
</div>

