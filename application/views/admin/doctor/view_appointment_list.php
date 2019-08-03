
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('appointment_list');?></h1>
            <small><?php echo display('appointment_list');?></small>
            <ol class="breadcrumb">
                
                <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <?php 
                $mag = $this->session->flashdata('exeption');
                if($mag !=''){
                    echo "<div class='alert alert-success msg'>".$mag."</div><br>";
                }
            ?>
            <div class="panel panel-bd">
                 <div class="panel-heading">
                    <div ><a href="admin/doctor/Appointment_controller" class="btn btn-success pull-right"><?php echo display('create_appointment')?></a></div>
                    <div class="panel-title" >
                        <h4><?php echo display('appointment_list')?> </h4>
                    </div>
                </div>
                
                <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover dt-responsive" id="appointment">
                            <thead>
                                <tr>
                                    <th class="all"><?php echo display('patient_name'); ?></th>
                                    <th class="all"><?php echo display('phone_number'); ?></th>
                                    <th class="all"><?php echo display('appointment_id'); ?></th>
                                    <th class="all"><?php echo display('sequence'); ?></th>
                                    <th class="all"><?php echo display('date'); ?></th>
                                    <th class="desktop"><?php echo display('action'); ?></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    foreach (@$appointmaent_info as $value) {   
                                    $result = $this->db->select('appointment_id,prescription_id')
                                     ->from('prescription_data')
                                     ->where('appointment_id',$value->appointment_id)
                                     ->get()
                                     ->row();
                                ?>

                                <tr <?php echo ($result)?'style="background-color: rgb(19, 203, 21)"':''?>>
                                    
                                    <td><?php echo @$value->family_name .' '. @$value->given_name ;?></td>
                                    <td><?php echo $value->patient_phone;?></td>
                                    <td><?php echo $value->appointment_id;?></td>
                                    <td><?php echo $value->sequence;?></td>
                                    <td><?php echo $value->date;?></td>
                   

                                    <td class="text-center" style="width: 100px;">
                                        <a class="btn btn-xs btn-success" data-original-title="View Appointment" target="_blank" href="<?php echo base_url();?>admin/Basic_controller/my_appointment/<?php echo $value->appointment_id; ?>"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-xs btn-info" data-original-title="View History" target="_blank" href="<?php echo base_url();?>History_controller/patient_history/<?php echo $value->patient_id; ?>"><i class="fa fa-history" aria-hidden="true"></i></a>
                                        <?php if($result){?>
                                        <a class="btn btn-xs btn-primary" target="_blank" href="<?php echo base_url();?>admin/doctor/Prescription_controller/my_prescription/<?php echo $result->prescription_id; ?>" ><i class="fa fa-indent" aria-hidden="true"></i></a>
                                        <?php } else{?>
                                        <a class="btn btn-xs btn-primary"  href="<?php echo base_url();?>admin/doctor/Prescription_controller/create_prescription/<?php echo $value->appointment_id; ?>" ><i class="fa fa-user-md" aria-hidden="true"></i></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>






<script type="text/javascript">

function sms_send(id){

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('admin/Ajax_controller/getInfo/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
             $('[name="to"]').val(data.patient_phone);
             $('[name="name"]').val(data.patient_name);
             $('[name="patient_id"]').val(data.patient_id);
             $('[name="appointment_id"]').val(data.appointment_id);
             $('[name="appointment_date"]').val(data.date);
             $('[name="sequence"]').val(data.sequence);
             $('[name="doctor_name"]').val(data.doctor_name);
             $('[name="per_patient_time"]').val(data.per_patient_time);
             $('[name="start_time"]').val(data.start_time);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('<?php echo display('sms');?>'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}


function reload()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}


//==================
function save(){
    
    $('#btnSave').text('Sending...'); 
    $('#btnSave').attr('disabled',true);

    var url = "<?php echo site_url('admin/Ajax_controller/sendSms')?>";
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status) //if success close modal and reload ajax table
            {
                
                $('#modal_form').modal('hide');
                 toastr.success('Success! - <?php echo display('sms_message');?>');
                    
                setTimeout(function(){
                    window.location.href = window.location.href;
                }, 2000);
            }

            $('#btnSave').text('Send'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
        },

        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error!');
            $('#btnSave').text('Send'); 
            $('#btnSave').attr('disabled',false); 
        }
    });
}


// load patient name
function getTeamplate(){          
    var teamplate_id = document.getElementById('tmp').value;
    
        $.ajax({ 
            'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_teamplate/'+teamplate_id,
            'type': 'GET', //the way you want to send data to your URL
            'data': {'teamplate_id': teamplate_id },
            'success': function(d) { 
                var container = $(".view_tmp");
                if(d){
                        container.html(d);
                    }else{ 
                        container.val(""); 
                    }
            }
        });  
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"><?php echo display('sms');?></h3>
            </div>
            <div class="modal-body form">

           <?php 
                $attributes = array( 'class' => 'form-horizontal','id'=>'form','method'=>'post');
                echo form_open_multipart('#', $attributes);
            ?>
                <input type="hidden" value="" name="appointment_id"/> 
                <input type="hidden" value="" name="doctor_name"/> 
                <input type="hidden" value="" name="patient_id"/> 
                <input type="hidden" value="" name="appointment_date"/> 
                <input type="hidden" value="" name="sequence"/> 
                <input type="hidden" value="" name="per_patient_time"/> 
                <input type="hidden" value="" name="start_time"/> 
                <input type="hidden" value="<?php echo $gateway_list->gateway_id?>" name="sms_gateway_id" >

                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3"><?php echo display('phone_number');?></label>
                            <div class="col-md-9">
                                <input name="to" id="to" placeholder="<?php echo display('phone_number');?>" class="form-control" required="1" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3"><?php echo display('patient_name');?></label>
                            <div class="col-md-9">
                                <input name="name" placeholder="<?php echo display('patient_name');?>" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
            
                        <div class="form-group">
                            <label class="control-label col-md-3"><?php echo display('sms_gateway');?></label>
                            <div class="col-md-9">
                                <input type="text" disabled name="gateway" value="<?php echo $gateway_list->provider_name?>" class="form-control">
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="control-label col-md-3"><?php echo display('sms_template');?></label>
                            <div class="col-md-9">
                                <select class="form-control" name="teamplate_id" id="tmp" onchange="getTeamplate()" required >
                                    <option value="">--Select Teamplate--</option>
                                    <?php 
                                    foreach ($teamplate as $t_list) {
                                       echo '<option value="'.$t_list->teamplate_id.'">'.$t_list->teamplate_name.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group view_tmp">
                          
                        </div>
                        
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary"><?php echo display('send');?></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo display('reset');?></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


