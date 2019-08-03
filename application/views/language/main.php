
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Language Setting</h1>
            <small>Language Setting</small>
            <ol class="breadcrumb">
               <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="row">
            <div class="col-sm-12"> 
                <a href="<?= base_url('language/phrase') ?>" class="btn btn-info">Add Phrase</a>
            </div>
        </div>


    <div class="row">
        <div class="col-md-12">
            <div  class="panel panel-bd">
                <div class="panel-heading ">
                    <div class="panel-title" style="max-width: calc(100% - 180px);">
                        <h4><?php echo display('language');?></h4>
                    </div>
               </div>
               
                <div class="panel-body">
                    <div class="portlet-body form">

                      <table class="table table-striped table-bordered ">
                        <thead>
                            <tr>
                                <td colspan="3">
                                    <?= form_open('language/addlanguage', ' class="form-inline" ') ?> 
                                        <div class="form-group">
                                            <label class="sr-only" for="addLanguage"> Language Name</label>
                                            <input name="language" type="text" class="form-control" id="addLanguage" placeholder="Language Name">
                                        </div>
                                          
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    <?= form_close(); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="fa fa-th-list"></i></th>
                                <th>Language</th>
                                <th><i class="fa fa-cogs"></i></th>
                                <th>Active Status</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php if (!empty($languages)) {?>
                                <?php $sl = 1 ?>
                                <?php foreach ($languages as $key => $language) {?>
                                <tr>
                                    <td><?= $sl++ ?></td>
                                    <td><?= $language ?></td>
                                    <td><a href="<?= base_url("language/editPhrase/$key") ?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>  
                                    <td><a href="<?= base_url("language/switch_lang/$language") ?>" class="btn btn-xs btn-success"><i class="fa fa-language"></i></a> 
                                        <a class="color-info">
                                          <?php echo $active_lang->language==strtolower($language)?'<span class="glyphicon glyphicon-ok"></span>':'';?>
                                        </a>
                                    
                                    </td> 
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






