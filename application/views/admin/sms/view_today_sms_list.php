<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('today_sms');?></h1>
            <small><?php echo display('today_sms');?></small>
            <ol class="breadcrumb">
                            <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
                        </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                <h3><?php echo display('custom_sms');?></h3>
                        <table width="100%" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th class=""><?php echo display('reciver');?></th>
                                    <th class="none"><?php echo display('gateway');?></th>
                                    <th class="all"><?php echo display('date_time');?></th>
                                    <th class="none"><?php echo display('message');?></th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach($coustom_sms as $value){?>
                                <tr>
                                    <td><?php echo $value->reciver;?></td>
                                    <td><?php echo $value->gateway;?></td>
                                    <td><?php echo $value->sms_date_time;?></td>
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
        
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                <h3><?php echo display('auto_sms');?></h3>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                               <tr>
                                    <th class=""><?php echo display('reciver');?></th>
                                    <th class="all"><?php echo display('date_time');?></th>
                                    <th class="none"><?php echo display('message');?></th>
                                </tr>
                            </thead>

                            <tbody>
                             <?php foreach($auto_sms as $value){?>
                                <tr>
                                    <td><?php echo $value->phone_no;?></td>
                                    <td><?php echo $value->delivery_date_time;?></td>
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


