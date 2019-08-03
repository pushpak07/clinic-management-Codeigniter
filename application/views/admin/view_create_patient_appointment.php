<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('create_appointment');?></h1>
            <small><?php echo display('create_appointment');?></small>
        </div>
    </section>


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
                    <div ><a href="<?php echo base_url();?>create_new_patient" class="btn btn-success pull-right">Create New Patient</a></div>
                    <div class="panel-title" >
                        <h4><?php echo display('create_appointment');?> </h4>
                    </div>
                </div>


                <div class="panel-body">
                    <div class="portlet-body form">
                    <?php 
                   
                        $attributes = array('class' => 'form-horizontal','target'=>'_blank','name'=>'p_info','role'=>'form');
                        echo form_open('admin/Appointment_controller/save_appointment', $attributes);                
                    ?>
                        <div class="form-body">

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('date');?></label>
                                    <div class="col-md-5">
                                       <input type="text" id="date" value="<?php echo set_value('date'); ?>" name="date" class="form-control datepicker3"  placeholder="yyyy-mm-dd" required>
                                        <span class="error-msg"><?php echo form_error('date'); ?> </span>
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> Phone </label>
                                    <div class="col-md-5">
                                        <input type="text" onkeyup="loadName()" value="<?php echo @$info['patient_phone'];?>" name="phone" id="phone" class="form-control" required> 
                                        <div class="p_name"></div>
                                    </div>
                                </div>
                                <input type="hidden" name="patient_id" value="<?php echo @$info['patient_id'];?>">

                                <div class="form-group">
                                    <label class="col-md-3 control-label "> Doctor </label>
                                    <div class="col-md-5">
                                        <select class="form-control doctor_id" id="doctor_id" onchange="loadSchedul(this.value);" name="doctor_id"  required>
                                            <option value="">--Select doctor--</option>
                                            <?php foreach ($doctor as $value) {
                                                echo '<option value="'.$value->doctor_id.'">'.$value->doctor_name.'</option>';
                                            }?>
                                        </select>
                                        <span class="error-msg"><?php echo form_error('doctor_id'); ?> </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('choose_serial');?></label>
                                    <div class="col-md-5 schedul">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Note</label>
                                    <div class="col-md-5">
                                         <textarea name="problem" class="form-control" rows="3">
                                         </textarea>
                                          <span class="error-msg"><?php echo form_error('problem'); ?> </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-offset-3 col-sm-6">
                                         <button type="reset" class="btn btn-danger"><?php echo display('reset')?></button>
                                        <button type="submit" class="btn btn-success"><?php echo display('submit')?></button>
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





<script>


    // load patient name
    function loadName(){          
        var phone = document.getElementById('phone').value;


        if (phone!='') {
            $('input[type=submit]').prop('disabled', true);
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_patinet_name/'+phone.trem(),
                'type': 'GET', //the way you want to send data to your URL
                'data': {'phone': phone },
                'success': function(data) { 
                    var container = $(".p_name");
                    if(data==0){
                        container.html("<?php echo display('patient_name_load_msg')?>");
                    }else{ 
                        container.html(data);
                        $('input[type=submit]').prop('disabled', false);
                    }
                }
            });
        };
    }



// load load schedul
    function loadSchedul(){
        var doctor_id = $('#doctor_id').val();
        var date     = $('#date').val();
        if (doctor_id!='') {
            $.ajax({ 
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
        
// sequence 
    function myBooking(data){
       var id = $("#t_" + data).text();
       document.getElementById("msg_c").innerHTML = "<div style=' color:green; font-size:20px;'><?php echo display('book_sequence')?> " +id +"</div>";
       document.getElementById('serial_no').value = id;        
    }     

</script>