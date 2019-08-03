<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_medicine');?></h1>
            <small><?php echo display('add_medicine');?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!--  form area-->
            <div class="col-sm-12">
                <?php 
                    $msg = $this->session->flashdata('message');
                       if($msg){
                           echo $msg;
                       }
                ?>
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="portlet-body form">
                            <?php 
                                $attributes = array('class' => 'form-horizontal','role'=>'form');
                                echo form_open_multipart('admin/Setup_controller/save_medicine', $attributes);                
                             ?>
                            
                            <div class="form-body">
                            
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Language Name :</label>
                                    <div class="col-md-6">
                                        <select name="language_id" class="form-control" onchange="laodCata(this.value)">
                                            <option value="">--Select Language--</option>
                                            <?php foreach($language as $value){
                                                echo'<option value="'.$value->lang_id.'">'.$value->lang_name.'</option>';
                                            }?>
                                        </select>
                                    </div>
                                </div>                        
                            
                                <div class="form-group">
                                    <label class="col-md-3 control-label">  Category :</label>
                                    <div class="col-md-6">
                                        <select name="category_id" onchange="loadClassi(this.value)" class="form-control category">
                                            <option value="">-- Category--</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">  Classification :</label>
                                    <div class="col-md-6">
                                        <select name="cls_name" class="form-control classi">
                                            <option>-- classification--</option>
                                            
                                        </select>
                                    </div>
                                </div>
                           
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('medicine_name');?> :</label>
                                    <div class="col-md-6">
                                        <input type="text" name="medicine_name" class="form-control test" placeholder="<?php echo display('medicine_name');?>" required > 
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Symptom Name :</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control"  placeholder="Symptom Name" name="symptom"  />
                                        
                                    </div>
                                </div>
                  
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Treatment Name :</label>
                                    <div class="col-md-6">
                                         <input type="text" name="treatment" placeholder="Treatment Name" class="form-control">
                                    </div>
                                </div>
                                 
                                 <div class="form-group">
                                    <label class="col-md-3 control-label"> Diagonisis :</label>
                                    <div class="col-md-6">
                                         <input type="text" class="form-control" placeholder="Diagonisis" name="diagonisis">
                                    </div>
                                </div>
                                 
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="reset" class="btn btn-danger"><?php echo display('reset')?></button>
                                    <button type="submit" class="btn btn-success"><?php echo display('submit')?></button>
                                </div>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </section>
</div>


<script type="text/javascript">
    function laodCata(lang_id){
        if (lang_id!='') {
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/lang_cata/'+lang_id,
                'type': 'GET', //the way you want to send data to your URL
                'data': {'lang_id': lang_id },
                'success': function(data) { 
                    
                    var container = $(".category");
                    if(data==0){
                        container.html("There is no category");
                    }else{ 
                        container.html(data);
                    }
                }
            });
        };
    }

    function loadClassi(cat_id){

        if (cat_id!='') {
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/cat_classification/'+cat_id,
                'type': 'GET', //the way you want to send data to your URL
                'data': {'cat_id': cat_id },
                'success': function(data) { 
                    
                    var container = $(".classi");
                    if(data==0){
                        container.html("There is no classification");
                    }else{ 
                        container.html(data);
                    }
                }
            });
        };
    }

</script>

