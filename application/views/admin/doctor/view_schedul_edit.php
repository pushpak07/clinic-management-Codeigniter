
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('edit_schedule');?></h1>
            <small><?php echo display('edit_schedule');?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <!--  form area-->
        <div class="col-sm-12">
            <?php
                $mag = $this->session->userdata('message');
                   if($mag){
                       echo "<div class='alert alert-success msg'>".$mag."</div><br>";
                       $this->session->unset_userdata('message');
                   }
            ?>
            <div  class="panel panel-default panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                            $attributes = array('class' => 'form-horizontal','name'=>'s_info','role'=>'form');
                            echo form_open('admin/doctor/Schedule_controller/edit_schedul_stup', $attributes);                
                        ?>

                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label"> <?php echo display('set_time');?> </label>
                                <div class="col-md-5">
                                    <div class="input-group  input-daterange">
                                         <?php echo form_error('s_time', '<div class=" text-danger">', '</div>'); ?>
                                        
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="basic_example_1"  value="<?php echo $schedul_info->start_time;?>"  name="s_time">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                        
                                        <span class="input-group-addon"> to </span>

                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="basic_example_2" value="<?php echo $schedul_info->end_time;?>" name="e_time" >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <?php echo form_error('e_time', '<div class=" text-danger">', '</div>'); ?>
                                    <!-- /input-group -->
                                </div>
                            </div>

                           <input type="hidden" value="<?php echo $schedul_info->start_time;?>" name="doctor_id">

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('day');?></label>
                                    <div class="col-md-5">
                                        <select class="form-control" name="day" id="day" onchange="loadError(this.value);">
                                            <option value=''>--Select day--</option>
                                            <option value='1'><?php echo display('saturday');?></option>
                                            <option value='2'><?php echo display('sunday');?></option>
                                            <option value='3'><?php echo display('monday');?></option>
                                            <option value='4'><?php echo display('tuesday');?></option>
                                            <option value='5'><?php echo display('wednesday');?></option>
                                            <option value='6'><?php echo display('thusday');?></option>
                                            <option value='7'><?php echo display('friday');?></option>
                                        </select>
                                        <?php echo form_error('day', '<div class=" text-danger">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('set_per_patient_time');?> </label>
                                    <div class="col-md-5">
                                      
                                    <div class=" input-daterange">
                                        <input type="text" name="p_time" value="<?php echo $schedul_info->per_patient_time;?>" class="form-control">
                                        <span class="help-block"> <?php echo display('set_time_msg');?> </span>
                                        <?php echo form_error('p_time', '<div class=" text-danger">', '</div>'); ?>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('visibility');?></label>
                                    <div class="col-md-5">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox2_5" value="1" name="visible" <?php echo ($schedul_info->visibility=='1')?'checked':'' ?>  value="1" class="md-radiobtn">
                                                <label for="checkbox2_5">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> <?php echo display('yes');?>
                                                </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="checkbox2_10" value="0" name="visible"  <?php echo ($schedul_info->visibility=='0')?'checked':'' ?> value="0" class="md-radiobtn">
                                                <label for="checkbox2_10">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> <?php echo display('no');?>
                                                </label>
                                            </div>
                                            <?php echo form_error('visible', '<div class=" text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $schedul_info->schedul_id;?>">
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success"><?php echo display('Update');?></button>
                                </div>
                            </div>
                         <?php echo form_close();?>
                     </div>
                </div>
            </div>
        </div>
    </div> <!-- /#page-wrapper -->            
    </section>
</div>


<script type="text/javascript">
    document.forms['s_info'].elements['day'].value="<?php echo $schedul_info->day;?>";
    document.forms['s_info'].elements['doctor_id'].value="<?php echo $schedul_info->doctor_id;?>";
</script>