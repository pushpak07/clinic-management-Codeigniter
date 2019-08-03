<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1> <?php echo display('email_schedule_stup')?></h1>
            <small> <?php echo display('email_schedule_stup')?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
            <?php
                $msg = $this->session->flashdata('message');
                if($msg){
                    echo $msg;
                } 
            ?>

    <div class="row">
        <div class="col-md-12 ">
            <div  class="panel panel-bd panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                    <?php 
                        $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                        echo form_open_multipart('admin/email/Email/save_schedule', $attributes);  
                    ?>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('schedule_name');?> : </label>
                                    <div class="col-md-5">
                                        <input type="text" name="schedule_name" required="1" class="form-control" placeholder="<?php echo display('schedule_name');?>"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('template_name');?> : </label>
                                    <div class="col-md-5">
                                       <select class="form-control" name="template_id" required="1" >
                                            <option value="">--Select--</option>
                                            <?php foreach($template as $value1){?>
                                            <option value="<?php echo $value1->email_temp_id?>"><?php echo $value1->email_temp_name;?></option>
                                            <?php }?>
                                        </select>
                                   </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('time');?> : </label>
                                    <div class="col-md-5">
                                        <select name="day">
                                          <option value="0">--Day--</option>
                                          <?php for($i=1;$i<=30; $i++)
                                          echo '<option value="'.$i.'">'.$i.'</option>'
                                          ?>
                                        </select>
                                        <select name="hour">
                                          <option value="0">--Hour--</option>
                                          <?php for($i=1;$i<=23; $i++)
                                            echo '<option value="'.$i.'">'.$i.'</option>'
                                          ?>
                                        </select>
                                        <select name="minute">
                                          <option value="0">--Minute--</option>
                                          <?php for($i=1;$i<=59; $i++)
                                            echo '<option value="'.$i.'">'.$i.'</option>'
                                          ?>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>

                           <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="reset" class="btn btn-danger"><?php echo display('reset')?></button>
                                    <button type="submit" class="btn btn-success"><?php echo display('submit')?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
         </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="" style="margin: 0px 0px 10px 0px; background: #997300;padding: 10px;
color: #fff;border: 3px dashed #1c506c;">
                <p>curl --request GET <?php echo base_url();?>admin/email/Email_sender/ 
                <br> <?php echo display('email_cronjob_msg')?> </p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            <div class="breadcrumbs ng-scope">
                <h2> <?php echo display('email_schedule_stup_list')?></h2>
            </div>
        </div>
    </div>
        

    <div class="row">
            <div class="col-md-12">
                
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="center">
                                    <th class="all"><?php echo display('schedule_name');?></th>
                                    <th class="all"><?php echo display('template_name');?></th>
                                    <th class="all"><?php echo display('time');?> </th>
                                    <th class="all"><?php echo display('action');?> </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($schedule_list as $value){?>
                                <tr>
                                    <td><?php echo $value->email_ss_name;?></td>
                                    <td><?php echo $value->email_temp_name;?></td>
                                    <td><?php echo $value->email_schedule;?></td>
                                    
                                    <td class="text-right">
                                        <a href="<?php echo base_url();?>admin/email/Email/delete_schedule/<?php echo $value->email_ss_id ;?>" onclick="return confirm('Are you want to delelte?');" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <?php }?>
                               
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>



