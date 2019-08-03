

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
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <a href="<?= base_url('language') ?>" class="btn btn-info">Language Home</a>
            </div>
        </div>
        <div class="row">
            <!-- phrase -->
            <div class="col-sm-12">
            <div  class="panel panel-bd ">
                <div class="panel-heading ">
                    <div class="panel-title" style="max-width: calc(100% - 180px);">
                        <h4>Phrase</h4>
                    </div>
               </div>
                <div class="panel-body">
                    <div class="portlet-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <?= form_open('language/addPhrase', ' class="form-inline" ') ?> 
                                            <div class="form-group">
                                                <label class="sr-only" for="addphrase"> Phrase Name</label>
                                                <input name="phrase[]" type="text" class="form-control" id="addphrase" placeholder="Phrase Name">
                                            </div>
                                              
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        <?= form_close(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-th-list"></i></th>
                                    <th>Phrase</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($phrases)) {?>
                                    <?php $sl = 1 ?>
                                    <?php foreach ($phrases as $value) {?>
                                    <tr>
                                        <td><?= $sl++ ?></td>
                                        <td><?= $value->phrase ?></td>
                                    </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



