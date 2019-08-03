<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Add Laguage </h1>
            <small>Add Laguage </small>
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
                <?php
                    $msg = $this->session->flashdata('message');
                       if($msg){
                           echo $msg;
                       }
                ?>
                <div  class="panel panel-bd">
                    <div class="panel-body">
                        <div class="portlet-body form">
                            <?php 
                              
                                $attributes = array('class' => 'form-horizontal','role'=>'form');
                                echo form_open_multipart('admin/Setup_controller/save_language', $attributes);                
                             ?>
                            
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Language Name :</label>
                                    <div class="col-md-6">
                                        <input type="text" name="language_name" autocomplete="off" class="form-control" placeholder="Language Name" required >                                         
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
        </div>

        <div class="row">
            <!--  form area-->
            <div class="col-sm-12">
                <div class="panel panel-bd">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                            <thead>
                                <tr class="center">
                                    <th class="all">Language Name</th>
                                    <th class="all">Action </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($language as $value) {
                                ?>
                                <tr>
                                    <td><?php echo $value->lang_name;?></td>
                                   
                                    <td class="text-right">
                                        <a href="<?php echo base_url();?>admin/Setup_controller/delete_lang/<?php echo $value->lang_id;?>" onclick="return confirm('Are you want to delelte?');" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </section>
</div>
