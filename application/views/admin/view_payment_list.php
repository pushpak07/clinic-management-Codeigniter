

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('payment_list');?></h1>
            <small><?php echo display('payment_list');?></small>
              <ol class="breadcrumb">
               <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php 
        echo @$msg = $this->session->flashdata('message'); 
     ?>
    <div class="row">
        <!--  table area -->
        <div class="col-sm-12">
            <div  class="panel panel-bd">
                <div class="panel-heading no-print">
                    <div class="btn-group"> 
                        <h4><?php echo display('payment_list');?></h4>
                    </div>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="patient_list">
                        <thead>
                            <tr>
                                <th><?php echo display('patient_id');?></th>
                                <th><?php echo display('appointment_id');?></th>
                                <th><?php echo display('email');?></th>
                                <th><?php echo display('amount');?></th>
                                <th><?php echo display('date');?></th>
                                <th><?php echo display('notes');?></th>
                                <th><?php echo display('action');?></th> 
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                                foreach ($info as $value) {
                            ?>
                            <tr class="odd gradeX">
                                

                                <td><?php echo $value->patient_id; ?></td>
                                <td><?php echo $value->appointment_id;?></td>
                                <td><?php echo $value->payer_email;?></td>
                                <td><?php echo $value->amount;?></td>
                                <td><?php echo $value->date_time;?></td>
                                <td><?php echo $value->notes;?></td>
                                <td class="">
                                    <a  class="btn btn-xs btn-info" href="#">
                                    <i class="fa fa-edit"></i> </a>
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



<?php
     $printTitle = "Patient List";
     $this->session->set_flashdata(array('pTitle' => $printTitle));    
?>  



