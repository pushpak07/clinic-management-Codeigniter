
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('invoice_list');?></h1>
            <small><?php echo display('invoice_list');?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    $msg = $this->session->flashdata('message');
                    if($msg){
                        echo $msg;
                    } 
                ?>
                    <div class="panel panel-bd thumbnail">
             
                        <div class="panel-heading no-print">
                            <div class="btn-group"> 
                                <a class="btn btn-success" href="<?php echo base_url();?>admin/doctor/Invoice"> <i class="fa fa-plus"></i> <?php echo display('add_new_invoice')?> </a>  
                            </div>
                        </div> 
                        <div class="panel-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-4"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 75px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_0_length-er-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_0_length-er-container" title="10"><span class="select2-selection__clear">×</span>10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> entries</label></div></div><div class="col-sm-4 text-center"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>PDF</span></a><a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>Print</span></a></div></div><div class="col-sm-4"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0" type="search"></label></div></div></div><table class="datatable table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" style="width: 100%;" width="100%">
                                <thead>
                                    <tr role="row">
                                        <th><?php echo display('sl_no')?></th>
                                        <th><?php echo display('invoice_id')?></th>
                                        <th><?php echo display('patient_name')?></th>
                                        <th><?php echo display('grand_total')?></th>
                                        <th><?php echo display('paid')?></th>
                                        <th><?php echo display('due')?></th>
                                        <th><?php echo display('date')?> </th>
                                        <th><?php echo display('action')?></th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    <?php $i=1; foreach($invo as $value){?> 
                                        <tr >
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $value->invoice_id;?></td>
                                            <td><?php echo $value->family_name.' '.$value->given_name;?></td>
                                            <td><?php echo $value->grand_total;?></td>
                                            <td><?php echo $value->paid;?></td>
                                            <td><?php echo $value->due;?></td>
                                            <td><?php echo $value->date_time;?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url();?>admin/doctor/Invoice/invoice_view/<?php echo $value->invoice_id;?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a> 
                                                <a href="<?php echo base_url();?>admin/doctor/Invoice/edit_invoice/<?php echo $value->invoice_id;?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a> 
                                                <a href="<?php echo base_url();?>admin/doctor/Invoice/delete/<?php echo $value->invoice_id;?>" onclick="return confirm('Are You Sure ? ')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a> 
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div>  <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>

        </div>            
    </section>
</div>





