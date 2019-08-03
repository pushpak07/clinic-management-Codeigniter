<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('email_template_list_of_app');?></h1>
            <small><?php echo display('email_template_list_of_app');?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bd">
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class=""><?php echo display('active');?>s</th>
                                <th class=""><?php echo display('template_name');?></th>
                                <th class="all"><?php echo display('action');?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($template_a as $value){?>
                                <tr>
                                    <td> 
                                        <a class="btn btn-info" href="<?php echo base_url(); ?>admin/email/Email/set_default_template/<?php echo $value->email_temp_id . '/' . $value->default_status; ?>"><span class="glyphicon glyphicon-<?php echo $value->default_status==1?'ok':'remove';?>"></span></a>
                                    </td>
                                    <td><?php echo $value->email_temp_name;?></td>
                                    <td><?php if($value->set_default==0){?>
                                        <a href="<?php echo base_url();?>admin/email/Email/get_email_template/<?php echo $value->email_temp_id;?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url();?>admin/email/Email/delete_template/<?php echo $value->email_temp_id;?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <?php }?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- =================================== -->

    <div class="row">
        <div class="col-sm-12">
         <?php
                $msg = $this->session->flashdata('message');
                if($msg){
                    echo $msg;
                } 
            ?>
            <div class="breadcrumbs ng-scope">
                <h2><?php echo display('email_template_list_of_reg');?></h2>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
               
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class=""><?php echo display('active');?></th>
                                    <th class=""><?php echo display('template_name');?></th>
                                    <th class="all"><?php echo display('action');?></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($template_r as $value){?>
                                    <tr>
                                        <td> 
                                            <a class="btn btn-info" href="<?php echo base_url(); ?>admin/email/Email/set_default_template/<?php echo $value->email_temp_id . '/' . $value->default_status; ?>"><span class="glyphicon glyphicon-<?php echo $value->default_status==1?'ok':'remove';?>"></span></a>
                                        </td>
                                        <td><?php echo $value->email_temp_name;?></td>
                                       <td><?php if($value->set_default==0){?>
                                            <a href="<?php echo base_url();?>admin/email/Email/get_email_template/<?php echo $value->email_temp_id;?>" class="btn btn-warning">Edit</a>
                                            
                                        <?php }?>
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




