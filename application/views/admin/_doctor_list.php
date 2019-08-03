
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('doctor_list');?></h1>
            <small><?php echo display('doctor_list');?></small>
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
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4><?php echo display('doctor_list');?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover dt-responsive" id="patient_list">
                            <thead>
                                <tr>
                                    <th class="all"> <?php echo display('picture');?></th>
                                    <th class="all"> <?php echo display('doctor_name');?></th>
                                    <th class="all"> <?php echo display('email');?></th>
                                    <th class="desktop"><?php echo display('action'); ?></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    foreach ($doctor_info as $value) {
                                ?>

                                <tr>
                                    <td>
                                        <?php 
                                           if($value->picture){
                                            echo '<img width="60" src="'.@$value->picture.'">';
                                           }else{
                                            echo '<img width="50" src="'.base_url().'assets/images/doctor.png" class="img-responsive" >';
                                           }
                                        ?>
                                        
                                    </td>
                                    <td><?php echo $value->doctor_name;?></td>
                                    <td><?php echo $value->email;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-success"  href="<?php echo base_url();?>admin/Doctor_controller/delete/<?php echo $value->log_id; ?>"><i class="fa fa-trash"></i></a>
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








