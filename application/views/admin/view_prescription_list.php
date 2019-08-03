
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('prescription_list')?></h1>
            <small><?php echo display('prescription_list')?></small>
           
        </div>
    </section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php echo $message = $this->session->flashdata('message');?>
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="panel-title" >
                        <h4><?php echo display('prescription_list');?> </h4>
                    </div>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="prescription">
                        <thead>
                            <tr>
                                <th class="all"><?php echo display('picture')?></th>
                                <th class="all"><?php echo display('patient_name')?></th>
                                <th class="all"><?php echo display('patient_id')?></th>
                                <th class="all"><?php echo display('phone_number')?></th>
                                <th class="all"><?php echo display('sex')?></th>
                                <th class="desktop"><?php echo display('action')?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($Prescription as $value) {  ?>
                            <tr>
                                <td>
                                    <?php 
                                       if($value->picture){
                                        echo '<img width="60" src="'.$value->picture.'" class="img-responsive">';
                                       }else{
                                        echo '<img width="60" src="'.base_url().'assets/images/patient.png" class="img-responsive">';
                                       }
                                    ?>
                                </td>

                                <td><?php echo @$value->family_name .' '. @$value->given_name ;?></td>
                                <td><?php echo $value->patient_id;?></td>
                                <td><?php echo $value->patient_phone;?></td>
                                <td><?php echo $value->sex; ?></td>
                                <td>
                                 <a class="btn btn-xs btn-success" target="_blank" href="<?php echo base_url();?>admin/Prescription_controller/my_prescription/<?php echo $value->appointment_id; ?>"><i class="fa fa-eye"></i> </a>
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

<?php
     $printTitle = display('prescription_list');
     $this->session->set_flashdata(array('pTitle' => $printTitle));    
?>  




