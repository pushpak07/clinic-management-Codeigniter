



<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('create_trade')?></h1>
            <small><?php echo display('create_trade')?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    


    <!-- Main content -->
    <section class="content">

        <div class="row">
        <div class="col-md-12 ">
            <div  class="panel panel-default panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                    <?php 
                        $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                        echo form_open_multipart('admin/Setup_controller/save_advices', $attributes);  
                    ?>
                        
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?php echo display('advice');?> :</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="timezone">
                                        <option value="">--Select time zone--</option>
                                        <?php 
                                            $zones = timezone_identifiers_list();
                                            $i = 0;
                                            foreach($zones as $name){
                                                echo'<option value="'.$name.'">'.$name.'</option>'; 
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                       <div class="form-group row">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success"><?php echo display('submit');?></button>
                            </div>
                        </div>

                    <?php echo form_close();?>
                    </div>
                </div>
            </div>  
         </div>
            

             

             
           
        </div>
        
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->


