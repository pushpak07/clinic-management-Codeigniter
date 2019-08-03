<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('edit_email_template')?></h1>
            <small><?php echo display('edit_email_template')?></small>
           <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
            $msg = $this->session->flashdata('message');
            if($msg){
                echo $msg;
            } 
        ?>
    <div class="row">
        <div class="col-md-12 ">
            <div  class="panel panel-bd panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                    <?php 
                        $attributes = array('class' => 'form-horizontal','method'=>'post','id' => 'MyForm','role'=>'form');
                        echo form_open_multipart('admin/email/Email/update_template', $attributes);  
                    ?>
                        
                            <div class="form-body">
                                <input type="hidden"  class="form-control" value="<?php echo $template->email_temp_id;?>" name="id">
                                <div class="form-group">
                                    <label class="col-md-2 control-label"><?php echo display('template_name')?> : </label>
                                    <div class="col-md-10">
                                        <input type="text"  class="form-control" value="<?php echo $template->email_temp_name;?>" required="1" name="template_name">
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="col-md-2 control-label"><?php echo display('email_template')?> : </label>
                                    <div class="col-md-10">
                                         <textarea name="template" id="summernote" class="form-control" required="1" rows="6">
                                             <?php echo $template->email_template;?>
                                         </textarea>
                                    </div>
                                </div> 
                            </div>

                           <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success sav_btn"><?php echo display('update')?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
         </div>
    </div>           
    </section>
</div>




