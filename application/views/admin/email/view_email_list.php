
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('email_list')?></h1>
            <small><?php echo display('email_list')?></small>
            <ol class="breadcrumb">
               <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="portlet-body form">
                                <?php  
                                $a = array('method'=>'post');
                                echo form_open('admin/email/Email/email_list/search',$a);
                                ?>
                                <div class="form-inline">
                                    <div class="col-md-3">
                                        <input type="text" name="from_date" placeholder="<?php echo display('from_date')?>" class="form-control datepicker1">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="to_date" placeholder="<?php echo display('to_date')?>" class="form-control datepicker1">
                                    </div>

                                    <div class="col-md-2">
                                        <input type="submit" value="<?php echo display('search')?>" class="btn btn-primary">
                                    </div>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </div> 
                </div> 
            
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="sms">
                            <thead>
                                    <tr>
                                        <th class=""><?php echo display('reciver_email')?></th>
                                        <th class="all"><?php echo display('date_time')?></th>
                                        <th class="none"><?php echo display('message')?></th>
                                    </tr>
                            </thead>

                            <tbody>
                                <?php foreach($email_list as $value){?>
                                    <tr>
                                        <td><?php echo $value->reciver_email;?></td>
                                        <td><?php echo $value->delivery_date_time?></td>
                                        <td><?php echo $value->message;?></td>
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




