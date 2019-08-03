<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Herbs List</h1>
            <small>Herbs List</small>
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
                $msg = $this->session->flashdata('message');
                   if($msg){
                       echo $msg;
                   }
            ?>
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                             <thead>
                                <tr class="center">
                                    <th class="all"><?php echo display('medicine_name');?></th>
                                    <th class="all">Herbs Name</th>
                                    <th class="all">Language</th>
                                    <th class="all"><?php echo display('action');?> </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    foreach ($herbs as $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $value->medicine;?></td>
                                        <td><?php echo $value->herbs;?></td>
                                        <td><?php echo $value->lang_name;?></td>
                                        <td class="text-right">
                                            <a href="<?php echo base_url();?>admin/Setup_controller/delete_medicine_herbs/<?php echo $value->mh_id;?>" class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash"></i> </a>
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

