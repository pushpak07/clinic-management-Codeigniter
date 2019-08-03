
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('patient_list');?></h1>
            <small><?php echo display('patient_list');?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
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
            <div  class="panel panel-default">
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="patient_list">
                        <thead>

                            <tr>
                                <th><?php echo display('picture');?></th>
                                <th><?php echo display('patient_id');?></th>
                                <th>Family Name</th>
                                <th><?php echo display('phone_number');?></th>
                                <th><?php echo display('blood_group');?></th>
                                <th class="none" ><?php echo display('address');?></th>
                                <th class="none"><?php echo display('birth_date');?></th>
                                <th class="none"><?php echo display('sex');?></th>
                                <th><?php echo display('action');?></th> 
                            </tr>

                        </thead>

                        <tbody>
                           <?php
                                foreach ($patient_info as $value) {
                            ?>
                            <tr class="odd gradeX">

                                <td>
                                    <div class="profile-userpic">
                                        <?php 
                                           if($value->picture){
                                            echo '<img width="50" src="'.$value->picture.'" class="img-responsive">';
                                           }else{
                                            echo '<img width="50" src="'.base_url().'assets/images/patient.png" class="img-responsive" >';
                                           }
                                        ?>
                                    </div>
                                </td>

                                <td><?php echo $value->patient_id; ?></td>
                                <td><?php echo @$value->family_name .' '. @$value->given_name ;?></td>
                                <td><?php echo $value->patient_phone;?></td>
                                <td><?php echo $value->blood_group;?></td>
                                <td><?php echo $value->address;?></td>
                                <td><?php echo $value->birth_date;?></td>
                                <td><?php echo $value->sex;?></td>
                                <td>
                                    <a  class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/doctor/Patient_controller/patient_edit/<?php echo $value->patient_id;?>"><i class="fa fa-edit"></i> </a>
                                    <a  class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/doctor/Patient_controller/patient_info/<?php echo $value->patient_id;?>"><i class="fa fa-eye"></i> </a>
                                    <a  class="btn btn-xs btn-danger" href="<?php echo base_url();?>admin/doctor/Patient_controller/delete_patient/<?php echo $value->patient_id ;?>" onclick="return confirm('Are you want to delelte?');">
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
    </section>
</div>

<?php
     $printTitle = "Patient List";
     $this->session->set_flashdata(array('pTitle' => $printTitle));    
?>  



