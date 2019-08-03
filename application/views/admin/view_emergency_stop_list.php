

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('emergency_stop_list');?></h1>
            <small><?php echo display('emergency_stop_list');?></small>
           <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <?php 
                         $message = $this->session->flashdata('message');
                          if($message !=''){
                              echo $message;
                          }
                    ?>
                <div  class="panel panel-bd">
                <div class="panel-heading no-print">
                    <div class="btn-group"> 
                        <h4><?php echo display('emergency_stop_list');?></h4>
                    </div>
                </div>
                    <div class="panel-body">
                        <div class="table-responsive order-table">
                            <table class="table table-bordered table-hover tablesaw tablesaw-stack">    
                                <thead> 
                                    <tr>
                                        <th class="all"><?php echo display('name');?></th>
                                        <th class="all"><?php echo display('phone_number');?></th>
                                        <th class="all"><?php echo display('specialist');?></th>
                                        <th class="all"><?php echo display('stop_date');?></th>
                                        <th class="all"><?php echo display('schedule_date');?></th>
                                        <th class="desktop"><?php echo display('action');?></th>
                                    </tr>
                                </thead>
                            <tbody>
                                    <?php
                                    foreach ($stop_info as $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $value->doctor_name;?></td>
                                        <td><?php echo $value->doctor_phone;?></td>
                                        <td><?php echo $value->specialist;?></td>
                                        <td><?php echo $value->stop_date;?></td>
                                        <td><?php echo $value->schedul_date;?></td>
                                        <td >
                                            <a href="<?php echo base_url();?>admin/Emergency_stop_controller/edit_emergency_stop/<?php echo $value->stop_id;?>" class="btn  btn-xs btn-info">
                                            <i class="fa fa-edit"></i> </a>
                                            <a href="<?php echo base_url();?>admin/Emergency_stop_controller/delete_emergency_stop/<?php echo $value->stop_id;?>" onclick="return confirm('Are you want to delelte?');" class="btn  btn-xs btn-danger">
                                            <i class="fa fa-trash"></i> </a>
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
    </div>            
    </section>
</div>

