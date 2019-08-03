

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
                <li><a target="_blank" href="<?php echo base_url();?>"><i class="pe-7s-home"></i> <?php echo display('site_view')?></a></li>
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
                        <h4>Language Home</h4>
                    </div>
               </div>
                <div class="panel-body">
                    <div class="portlet-body">

                <?= form_open('language/addlebel') ?>
                <table class="table table-striped">
                    <thead> 
                        <tr>
                            <td colspan="3"> 
                                <button type="reset" class="btn btn-danger">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-th-list"></i></th>
                            <th>Phrase</th>
                            <th>Label</th> 
                        </tr>
                    </thead>

                    <tbody>
                        <?= form_hidden('language', $language) ?>
                            <?php if (!empty($phrases)) {?>
                                <?php $sl = 1 ?>
                                <?php foreach ($phrases as $value) {?>
                                <tr class="<?= (empty($value->$language)?"bg-danger":null) ?>">
                                
                                    <td><?= $sl++ ?></td>
                                    <td><input type="text" name="phrase[]" value="<?= $value->phrase ?>" class="form-control" readonly></td>
                                    <td><input type="text" name="lang[]" value="<?= $value->$language ?>" class="form-control"></td> 
                                </tr>
                                <?php } ?>
                            <?php } ?>

                            <tr>
                                <td colspan="3"> 
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </td>
                            </tr>
                    </tbody>
                    <?= form_close() ?>
                </table>
            </div>
            </div>
            </div>
            </div> 

        </div>
            
    </section>
</div>


