<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_new_post');?></h1>
            <small><?php echo display('add_new_post');?></small>
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
            <?php
                $msg = $this->session->flashdata('message');
                  if($msg !=''){
                      echo $msg;
                  }
                   if($this->session->flashdata('exception')!=""){
                     echo $this->session->flashdata('exception');
                }
            ?>
            <div  class="panel panel-bd panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                            $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                            echo form_open_multipart('admin/Blog_controller/save_post', $attributes);                
                         ?>
                        
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-2 control-label"><?php echo display('select_category');?>: </label>
                                    <div class="col-md-10">
                                       <select name="category" class="form-control" required>
                                           <option value="">Select Category</option>
                                           <option value="1">Post</option>
                                           <option value="2">Testimonial</option>
                                       </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label"><?php echo display('title');?> : </label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" value="<?php echo set_value('title'); ?>" placeholder="Title" required> 
                                        <span class="error-msg"><?php echo form_error('title'); ?> </span>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-2 control-label"><?php echo display('details');?>: </label>
                                        <div class="col-md-10">
                                            <textarea name="details" id="summernote" value="<?php echo set_value('details'); ?>"  class="form-control" rows="20" required>
                                                
                                            </textarea>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label"><?php echo display('picture');?> : </label>
                                    <div class="col-md-10">
                                        <input type="file" name="picture">       
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-6">
                                    
                                        <button type="reset" class="btn btn-danger"><?php echo display('reset');?></button>
                                        <button type="submit" class="btn btn-success"><?php echo display('submit');?></button>
                                    
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
