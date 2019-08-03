<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Add Category </h1>
            <small>Add Category </small>
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
                <div  class="panel panel-bd">

                    <div class="panel-body">
                        <div class="portlet-body form">
                            <?php 
                              $msg = $this->session->flashdata('message');
                               if($msg){
                                   echo $msg;
                               }
                                $attributes = array('class' => 'form-horizontal','role'=>'form');
                                echo form_open_multipart('admin/Setup_controller/save_category', $attributes);                
                             ?>
                            
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Language Name :</label>
                                    <div class="col-md-6">
                                    <select required="" name="language_id" onchange="loadSection(this.value)" class="form-control">
                                        <option value="">--Select Language--</option>
                                        <?php foreach($language as $value){
                                            echo'<option value="'.$value->lang_id.'">'.$value->lang_name.'</option>';
                                        }?>

                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Section Name :</label>
                                    <div class="col-md-6">
                                    <select required="" name="section_id" onchange="loadDisease(this.value)" class="form-control section">
                                        <option value="">--Section--</option>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Disease Name :</label>
                                        <div class="col-md-6">
                                            <select required="" name="disease_id" class="form-control disease">
                                                <option>--Disease--</option>
                                            </select>
                                        </div>
                                </div>
                            </div>

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Category Name :</label>
                                    <div class="col-md-6">
                                        <input type="text" required="" name="category_name" class="form-control" placeholder="Category Name" required >                                         
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


        <div class="row">
            <!--  form area-->
            <div class="col-sm-12">
                <div class="panel panel-bd">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                            <thead>
                                <tr class="center">
                                    <th class="all">Category Name</th>
                                    <th class="all">Action </th>         
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($category as $value) {
                                ?>
                                <tr>
                                    <td><?php echo $value->cat_name;?></td>
                                   
                                    <td class="text-right">
                                        <a href="<?php echo base_url();?>admin/Setup_controller/delete_category/<?php echo $value->mc_id;?>" onclick="return confirm('Are you want to delelte?');" class="btn btn-xs btn-danger">
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



<script type="text/javascript">
 
    function loadDisease(ms_id){

        if (ms_id!='') {
                $.ajax({ 
                    'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/load_disease/'+ms_id,
                    'type': 'GET', //the way you want to send data to your URL
                    'data': {'ms_id': ms_id },
                    'success': function(data) { 
                        
                        var container = $(".disease");
                        if(data==0){
                            container.html("There is no section");
                        }else{ 
                            container.html(data);
                         
                        }
                    }
                });
            };
    }
        // load  
    function loadSection(lang_id){  
       
       
        if (lang_id!='') {
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/lang_section/'+lang_id,
                'type': 'GET', //the way you want to send data to your URL
                'data': {'lang_id': lang_id },
                'success': function(data) { 
                    
                    var container = $(".section");
                    if(data==0){
                        container.html("There is no section");
                    }else{ 
                        container.html(data);
                     
                    }
                }
            });
        };
    }
</script>
