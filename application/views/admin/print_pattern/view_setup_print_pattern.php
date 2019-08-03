<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('setup_pattern')?></h1>
            <small><?php echo display('setup_pattern')?></small>
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
            <div  class="panel panel-default panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php if( validation_errors()){ ?>
                             <div class="alert alert-danger"> <!--bootstrap error div-->
                                 <?php  echo validation_errors(); ?>
                             </div>
                        <?php } ?>
                        
                        <?php 
                          $msg = $this->session->flashdata('message');
                           if($msg){
                               echo $msg;
                           }
                            $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                            echo form_open_multipart('admin/print_pattern/Print_pattern_controller/save_setup', $attributes);                
                         ?>
                       
                            
                            <div class="form-body">

                                <div class="form-group">
                                  
                                    <label class="col-md-3 control-label"> 
                                        <input onclick="loadePattern(this.value)" required value="pattern_two" type="radio" name="pattern"> 
                                       <img src="<?php echo base_url()?>assets/uploads/pattern/pattern_two.JPG" width="150">
                                    </label>
                                   
                                     
                                </div>

                                

                               
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('header_blank');?></label>
                                    <div class="col-md-5">
                                        <div class="input-group  input-daterange">
                                            <input type="text" name="h_height" placeholder="<?php echo display('height');?>" class="form-control" required>
                                            <span class="input-group-addon"> | </span>
                                            <input type="text" name="h_width" placeholder="<?php echo display('width');?>" class="form-control" required> <span class="input-group-addon">px </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('footer_blank');?></label>
                                    <div class="col-md-5">
                                        <div class="input-group  input-daterange">
                                            <input type="text" name="f_height" placeholder="<?php echo display('height');?>"  class="form-control" required>
                                            <span class="input-group-addon"> | </span>
                                            <input type="text" name="f_width" placeholder="<?php echo display('width');?>" class="form-control" required> <span class="input-group-addon">px </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('side_content');?></label>
                                    <div class="col-md-5">
                                        <div class="input-group  input-daterange">
                                            <input type="text" name="content1_height" placeholder="<?php echo display('height');?>" class="form-control" required>
                                            <span class="input-group-addon"> | </span>
                                            <input type="text" name="content1_width" placeholder="<?php echo display('width');?>" class="form-control" required> <span class="input-group-addon">px </span> 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('content_blank');?></label>
                                    <div class="col-md-5">
                                        <div class="input-group  input-daterange">
                                            <input type="text" name="content2_height" placeholder="<?php echo display('height');?>" class="form-control" required>
                                            <span class="input-group-addon"> | </span>
                                            <input type="text" name="content2_width" placeholder="<?php echo display('width');?>" class="form-control" required> <span class="input-group-addon">px </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                   
                                        <button type="reset" class="btn btn-danger"><?php echo display('reset')?></button>
                                        <button type="submit" class="btn btn-success"><?php echo display('submit')?></button>
                                   
                                </div>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>            
    </section>
</div>



<script>
function loadePattern(pattern){

    //var pattern = document.getElementById('pattern').value;
    
    $.ajax({
        'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/patternSetData/'+pattern,
        'type': 'GET',
        'dataType': 'JSON',
        'success': function(data)
        {
            $('[name="h_height"]').val(data.h_height);
            $('[name="h_width"]').val(data.h_width);
            $('[name="f_height"]').val(data.f_height);
            $('[name="f_width"]').val(data.f_width);
            $('[name="content1_height"]').val(data.content1_height);
            $('[name="content1_width"]').val(data.content1_width);
            $('[name="content2_height"]').val(data.content2_height);
            $('[name="content2_width"]').val(data.content2_width);
        },
        'error': function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

</script>
