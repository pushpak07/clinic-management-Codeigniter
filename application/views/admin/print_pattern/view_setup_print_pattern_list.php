<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('pattern_list')?></h1>
            <small><?php echo display('pattern_list')?></small>
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
            <div  class="panel panel-default">
                <div class="panel-body">
                     <table class="table table-bordered table-hover dt-responsive" id="prescription_list" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="all"><?php echo display('header_blank');?></th>
                                    <th class="all"><?php echo display('footer_blank');?></th>
                                    <th class="all"><?php echo display('side_content');?></th>
                                    <th class="all"><?php echo display('content_blank');?></th>
                                    <th class="desktop"><?php echo display('action');?></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($setup_info as $value) {  ?>
                                <tr>
                                    <td><?php echo $value->header_height;?>px | <?php echo $value->header_width;?>px</td>
                                    <td><?php echo $value->footer_height;?>px | <?php echo $value->footer_width;?>px</td>
                                    <td><?php echo $value->content_height_1;?>px | <?php echo $value->content_width_1;?>px</td>
                                    <td><?php echo $value->content_height_2;?>px | <?php echo $value->content_width_2;?>px</td>
                                  
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url();?>admin/print_pattern/Print_pattern_controller/edit_view/<?php echo $value->id; ?>"><i class="fa fa-edit"></i></a>
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








