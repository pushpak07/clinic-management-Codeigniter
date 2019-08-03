<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('post_list');?></h1>
            <small><?php echo display('post_list');?></small>
           <ol class="breadcrumb">
                           <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
                        </ol>
        </div>
    </section>

    <!-- Main content -->
<section class="content">
            
     <?php 
        echo @$msg = $this->session->flashdata('message'); 
        echo @$exception = $this->session->flashdata('exception'); 
     ?>
    <div class="row">
        <!--  table area -->
        <div class="col-sm-12">
            <div  class="panel panel-default">
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('picture');?></th>
                                <th><?php echo display('title');?></th>
                                <th><?php echo display('date');?></th>
                                <th><?php echo display('category_name');?></th>
                                <th><?php echo display('action');?></th> 
                            </tr>
                        </thead>
                        
                        <tbody>
                           <?php
                                foreach ($post_info as $value) {
                            ?>
                            <tr class="odd gradeX">
                                <td>
                                    <div class="profile-userpic">
                                            <?php 
                                               if($value->picture){
                                                echo '<img style="width:50px;" src="'.$value->picture.'" class="img-responsive">';
                                               }else{
                                                echo '<img style="width:50px;" src="'.base_url().'assets/images/male.png" class="img-responsive" >';
                                               }
                                            ?>
                                    </div>
                                </td>
                                <td><?php echo $value->title; ?></td>
                                <td><?php echo $value->post_date;?></td>
                                <td><?php echo ($value->post_category==2)?'Testimonial':'Post';?></td>
                                <td class="">
                                    <a  class="btn btn-xs btn-info" href="<?php echo base_url();?>admin/Blog_controller/edit_post/<?php echo $value->id;?>">
                                    <i class="fa fa-edit"></i> </a>
                                    <a  class="btn btn-xs btn-danger" href="<?php echo base_url();?>admin/Blog_controller/delete_post/<?php echo $value->id ;?>" onclick="return confirm('Are you want to delelte?');">
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






