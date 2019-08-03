
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_schedule');?></h1>
            <small><?php echo display('add_schedule');?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <!--  form area -->
            <div class="col-sm-12">
                <div class="panel panel-bd"> 
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4><?php echo display('schedule');?></h4>
                        </div>
                   </div>
                    <div class="panel-body">
                        <div class="portlet-body form">
                            <?php 
                              $msg = $this->session->flashdata('message');
                              if(!empty($msg)){
                                echo $msg;
                              }
                                $attributes = array('class' => 'form-horizontal','role'=>'form');
                                echo form_open('admin/Schedule_controller/save_schedule', $attributes);  
                             ?>

                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label"> Select Doctor :</label>
                                <div class="col-md-5">
                                    <select class="form-control" required name="doctor_id">
                                        <option value="">--select doctor--</option>
                                        <?php foreach($doctor as $value){
                                            echo '<option value="'.$value->doctor_id.'">'.$value->doctor_name.'</option>';
                                        }?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"> Select <?php echo display('day');?> :</label>
                                <div class="col-md-5">
                                    <div class="md-checkbox-inline">
                                        
                                           
                                    
                                            <input id="checkbox7" name="day[]" id="day" value="3" class="md-check" type="checkbox">
                                            <label for="checkbox7"> <?php echo display('monday');?> </label>

                                            <input id="checkbox8" name="day[]" id="day" value="4" class="md-check" type="checkbox">
                                            <label for="checkbox8"><?php echo display('tuesday');?> </label>
                                    
                                        
                                            <input id="checkbox9" name="day[]" id="day" value="5" class="md-check" type="checkbox">
                                            <label for="checkbox9"> <?php echo display('wednesday');?> </label>
                                        
                                            <input id="checkbox10" name="day[]" id="day" value="6" class="md-check" type="checkbox">
                                            <label for="checkbox10"> <?php echo display('thusday');?> </label>
                                        
                                            <input id="checkbox11" name="day[]" id="day" value="7" class="md-check" type="checkbox">
                                            <label for="checkbox11"><?php echo display('friday');?> </label>
                                            
                                             <input id="checkbox5" name="day[]" id="day" value="1" class="md-check" type="checkbox">
                                            <label for="checkbox5"><?php echo display('saturday');?> </label>
                                        
                                            <input id="checkbox6" name="day[]" id="day" value="2" class="md-check" type="checkbox">
                                            <label for="checkbox6"> <?php echo display('sunday');?> </label>
                                      
                                        <?php echo form_error('day', '<div class=" text-danger">', '</div>'); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group erromsg">
                                <?php 
                                  @$err = $this->session->flashdata('err');
                                   if($err){
                                       echo $err;
                                   }?>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo display('set_time');?> :</label>
                                <div class="col-md-5">
                                    <div class="input-group  input-daterange">
                                         <?php echo form_error('s_time', '<div class=" text-danger">', '</div>'); ?>
                                        
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="basic_example_1" placeholder="<?php echo display('start_time');?>" name="s_time">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time" ></span>
                                            </span>
                                        </div>
                                        
                                        <span class="input-group-addon"> to </span>

                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="basic_example_2" placeholder="<?php echo display('end_time');?>" name="e_time" >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <?php echo form_error('e_time', '<div class=" text-danger">', '</div>'); ?>
                                    <!-- /input-group -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"> <?php echo display('set_per_patient_time');?> :</label>
                                <div class="col-md-5">
                                    <div class=" input-daterange">
                                        <input type="text" name="p_time" class="form-control" placeholder="Set per patient time">
                                        <span class="help-block"> <?php echo display('set_time_msg');?> </span>
                                        <?php echo form_error('p_time', '<div class=" text-danger">', '</div>'); ?>
                                    </div> 
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo display('visibility');?> :</label>
                                <div class="col-md-5" >
                                        <input type="radio" id="checkbox2_5" value="1" name="visible" value="1" class="md-radiobtn">
                                        <label for="checkbox2_5"> <?php echo display('yes');?> </label>
                                   
                                        <input type="radio" id="checkbox2_10" value="0" name="visible" value="0" class="md-radiobtn">
                                        <label for="checkbox2_10"> <?php echo display('no');?> </label>
                                </div>
                                    <?php echo form_error('visible', '<div class=" text-danger">', '</div>'); ?>
                                </div>
                                
                            </div>


                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-3 col-sm-6">
                                    <button type="reset" class="btn btn-danger"><?php echo display('reset');?></button>
                                    
                                    <button type="submit" class="btn btn-success"><?php echo display('submit');?></button>
                          
                            </div>
                        </div>
                    <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>           
    </section>
</div>











