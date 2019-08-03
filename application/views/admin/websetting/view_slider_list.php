<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('slider');?></h1>
            <small><?php echo display('slider');?></small>
            <ol class="breadcrumb">
                             <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
                        </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <!--  form area-->
        <div class="col-sm-12">
            <div class="panel panel-default panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                             $msg = $this->session->flashdata('message_s');
                              if($msg !=''){
                                  echo $msg;
                              }
                              if($this->session->flashdata('exception')!=""){
                                 echo $this->session->flashdata('exception');
                            }
                       
                            $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                            echo form_open_multipart('admin/Web_setup_controller/save_slider', $attributes);                
                         ?>
                                                           
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr> 
                                                <td colspan="6" ><?php echo display('slider');?> <a href="javascript:void(0);"  class="btn btn-primary add_button pull-right" title="Add field"> <span class="glyphicon glyphicon-plus"></span><?php echo display('add');?></a></td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="field_wrapper">
                                                        <div class="form-group ">
                                                             <div class="col-md-3 col-xs-12">
                                                                <input type="file" required  class="form-control" name="picture[]"/>
                                                            </div>

                                                             <div class="col-md-3">
                                                                <input type="text"  class="form-control" name="headline[]" placeholder="<?php echo display('heading');?>" />
                                                             </div>

                                                             <div class="col-md-3" ><input type="text"  class="form-control"  name="details[]" placeholder="<?php echo display('details');?>" /></div> 
                                                             <div class="col-md-2" ><input type="number"  class="form-control"  name="sequence[]" placeholder="<?php echo display('sequence');?>" /></div>
                                                            <a href="javascript:void(0);" class=" btn btn-danger remove_button" title="Remove field"><span class="glyphicon glyphicon-trash"></span></a>
                                                        </div> 
                                         
                                                    </div>    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                <div class="form-group row">
                                    <div class="col-sm-offset-3 col-sm-6">
                                            <button type="reset" class="btn btn-danger"><?php echo display('reset');?></button>
                                            <button type="submit" class="btn btn-success"><?php echo display('submit');?></button>
                                    </div>
                                </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>            
    </section>






<script type="text/javascript">
 $(document).ready(function(){
    var maxField = 10; 
            var addButton = $('.add_button'); 
            var wrapper = $('.field_wrapper');
            var x = 1; 
            var counter = 2;
            $(addButton).click(function(){ 
                if(x < maxField){ 
                    var fieldHTML = '<div id="count_'+(counter++)+'">'+
                    '<div class="form-group mdcn">'+
                    '<div class="col-md-3">'+
                    ' <input type="file" required  class="form-control" name="picture[]"/>'+
                    '</div>'+ 
                     '<div class="col-md-3">'+
                     '<input type="text"  class="form-control" name="headline[]" placeholder="<?php echo display('heading');?>" />'+
                    '</div>'+
                    '<div class="col-md-3"><input type="text"  class="form-control"  name="details[]" placeholder="<?php echo display('details');?>" /></div>'+
                    '<div class="col-md-2" ><input type="number"  class="form-control"  name="sequence[]" placeholder="<?php echo display('sequence');?>" /></div>'+
                   
                    '<a href="javascript:void(0);" class=" btn btn-danger remove_button" title="Remove field"><span class="glyphicon glyphicon-trash"></span></a></div>'+
                    '</div>';  

                    x++; 
                    $(wrapper).append(fieldHTML); 
                }
            });
        $(wrapper).on('click', '.remove_button', function(e){ 
            e.preventDefault();
            $(this).parent('div').remove(); 
            x--; 
        });
    })
</script>


 <section class="content">

    <div class="row">
        <div class="col-sm-12">
            <div class="breadcrumbs ng-scope">
                    <h2><?php echo display('slider_list');?></h2>
            </div>
        </div>
    </div>
    
    <div class="row">
    <!-- =============== table area =============== -->
        <div class="col-sm-12">
            <div  class="panel panel-default">

            <?php echo @$msg = $this->session->flashdata('message'); ?>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th><?php echo display('heading');?></th>
                                <th><?php echo display('details');?></th>
                                <th><?php echo display('sequence');?></th>
                                <th><?php echo display('picture');?></th>
                                <th><?php echo display('action');?></th> 
                            </tr>
                        </thead>

                        <tbody>
                           <?php
                                foreach ($slider as $value) {
                            ?>
                                <tr class="odd gradeX">
                               
                                    <td><?php echo $value->heading;?></td>
                                    <td><?php echo $value->details;?></td>
                                    <td><?php echo $value->sequence;?></td>
                                    <td>
                                        <div class="profile-userpic">
                                            <?php 
                                                echo '<img width=50" src="'.$value->picture.'" class="img-responsive">';
                                            ?>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                   		<a class="btn btn-sm btn-primary" href="<?php echo base_url();?>admin/Web_setup_controller/slider_edit/<?php echo $value->id;?>" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                 						<a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/Web_setup_controller/delete_slider/<?php echo $value->id;?>" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td> 
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
    </section>
</div>





