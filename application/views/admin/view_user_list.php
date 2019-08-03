
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('user_list');?></h1>
            <small><?php echo display('user_list');?></small>
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
                <div class="panel-heading">
                    <div class="panel-title" >
                        <h4><?php echo display('user_list')?> </h4>
                    </div>
                </div>

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="patient_list">
                        <thead>
                            <tr>
                                <th><?php echo display('picture');?></th>
                                <th><?php echo display('name');?></th>
                                <th><?php echo display('phone_number');?></th>
                                <th><?php echo display('blood_group');?></th>
                                <th ><?php echo display('address');?></th>
                                <th><?php echo display('birth_date');?></th>
                                <th><?php echo display('sex');?></th>
                                <th><?php echo display('action');?></th> 
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                                foreach ($user_list as $value) {
                            ?>
                            <tr class="odd gradeX">
                                <td>
                                    <div class="profile-userpic">
                                            <?php 
                                               if($value->picture){
                                                echo '<img width=50" src="'.$value->picture.'" class="img-responsive">';
                                               }else{
                                                echo '<img width=50" src="'.base_url().'assets/images/user.png">';
                                               }
                                            ?>
                                    </div>
                                </td>
                                <td><?php echo $value->full_name;?></td>
                                <td><?php echo $value->user_phone;?></td>
                                <td><?php echo $value->blood_group;?></td>
                                <td><?php echo $value->address;?></td>
                                <td><?php echo $value->birth_date;?></td>
                                <td><?php echo $value->sex;?></td>
                                <td class="">
                                    <a  class="btn btn-xs btn-danger" href="<?php echo base_url();?>admin/Users_controller/delete_user/<?php echo $value->log_id ;?>" onclick="return confirm('Are you want to delelte?');">
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



