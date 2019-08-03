<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('edit_slider');?></h1>
            <small><?php echo display('edit_slider');?></small>
            <ol class="breadcrumb">
                            <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
                        </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="row">
  
  
        <!--  form area -->
        <div class="col-sm-12">
            <div class="panel panel-default panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                             $msg = $this->session->flashdata('message');
                              if($msg !=''){
                                  echo $msg;
                              }
                              if($this->session->flashdata('exception')!=""){
                                 echo $this->session->flashdata('exception');
                            }
                            $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                            echo form_open_multipart('admin/Web_setup_controller/save_edit_slider', $attributes);                
                         ?>
                        
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo @$info->id;?>">
                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('heading');?></label>
                                   <div class="col-md-5">
                                        <input type="text" name="head_line" value="<?php echo @$info->heading;?>"  class="form-control"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('details');?></label>
                                    <div class="col-md-5">
                                        <input type="text" name="details" value="<?php echo @$info->details;?>" class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('sequence');?></label>
                                   <div class="col-md-5">
                                        <input type="number" name="sequence" value="<?php echo @$info->sequence;?>"  class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('picture');?></label>
                                    <div class="col-md-5">
                                    <img src="<?php echo @$info->picture;?>" width="250">
                                        
                                        <input type="file" name="picture">       
                                        <input type="hidden" name="pic" value="<?php echo @$info->picture;?>">       
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-success"><?php echo display('update');?></button>
                                    
                                </div>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /#page-wrapper -->            
    </section>
</div>



