
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('create_appointment')?></h1>
            <small><?php echo display('create_appointment')?></small>
            <ol class="breadcrumb">
                
                <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <!--  form area -->
        <div class="col-sm-12">
            <?php 
                $mag = $this->session->flashdata('exception');
                      if($mag !=''){
                            echo '<div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                 <strong>'.$mag.'</strong>
                            </div>';
                        }
            ?>
            <div  class="panel panel-bd panel-form">
                
                <div class="panel-heading">
                    <div ><a href="<?php echo base_url();?>admin/doctor/Patient_controller/create_new_patient" class="btn btn-success pull-right">Create New Patient</a></div>
                    <div class="panel-title" >
                        <h4><?php echo display('create_appointment')?> </h4>
                    </div>
                </div>

                <div class="panel-body">

                    <div class="portlet-body form">
                    <?php 
                        $attributes = array('class' => 'form-horizontal','target'=>'_blank','name'=>'p_info');
                        echo form_open('admin/doctor/Appointment_controller/save_appointment', $attributes);                
                    ?>

                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label"> <?php echo display('phone_number')?> </label>
                                <div class="col-md-5">
                                    <input type="text" onkeyup="loadName()" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control" required> 
                                    <span class="error-msg patient_name"> </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo display('date')?> :</label>
                                <div class="col-md-5">
                                   <input type="text" id="date" onchange="loadSchedul(this.value);" value="<?php echo set_value('date'); ?>" name="date" class="form-control datepicker3"  placeholder="<?php echo display('date_placeholder')?>" required>
                                    <span class="error-msg"><?php echo form_error('date'); ?> </span>
                                 </div>
                            </div>

                            <input type="hidden" id="doctor_id" value="<?php echo $this->session->userdata('doctor_id');?>" name="doctor_id">


                            <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo display('choose_serial')?> :</label>
                                <div class="col-md-5 schedul"> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"><?php echo display('notes')?>:</label>
                                <div class="col-md-5">
                                     <textarea name="problem" class="form-control" rows="3">
                                     </textarea>
                                      <span class="error-msg"><?php echo form_error('problem'); ?> </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="reset" class="btn btn-danger"><?php echo display('reset')?></button>
                                    <button type="submit" disabled class="btn btn-success"><?php echo display('appointment')?></button>
                                </div>
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

<style type="text/css">
    .p_name{
        color:red;
    }
</style>


<script>
    // load patient name
    function loadName(){          
        var phone = document.getElementById('phone').value;

        if (phone!='') {

            $('button[type=submit]').prop('disabled', true);

            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_patinet_name/'+phone.trim(),
                'type': 'GET', //the way you want to send data to your URL
                'data': {'phone': phone },
                'success': function(data) { 
                    var container = $(".patient_name");
                    if(data==0){
                        container.html("<?php echo display('patient_name_load_msg')?>");
                    }else{ 
                        container.html(data);
                        $('button[type=submit]').prop('disabled', false);
                    }
                }
            });
        };
    }

// load load schedul
    function loadSchedul(date){

        var doctor_id = $('#doctor_id').val();
        
        
        if (doctor_id!='') {
            $.ajax({ 
                // 'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_schedul/'+doctor_id.trim(),
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_schedul/'+doctor_id+'/'+date,
                'type': 'GET', //the way you want to send data to your URL
                'data': {'doctor_id': doctor_id },
                'success': function(data) {
                    var container = $(".schedul");
                    container.html(data);
                }
                });
            };
        }

// sequence uncion
    function myBooking(data){
        var id = $("#t_" + data).text();
       document.getElementById("msg_c").innerHTML = "<div style=' color:green; font-size:20px;'><?php echo display('book_sequence')?> " +id +"</div>";
       document.getElementById('serial_no').value = id;        
    }     

</script>