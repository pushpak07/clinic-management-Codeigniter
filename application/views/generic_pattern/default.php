
<?php

  $start = @$v_info->start_time;
  $end =  @$v_info->end_time;
  $pp_time = @$v_info->per_patient_time;
  $patient_time = date('h:i A', strtotime($start));
  $end_time = date('h:i A', strtotime($end));
?>

<?php 
 foreach ($patient_info as  $value) { } 
?>

    <div id="dif_p" class="container" style="border-bottom: 1px solid #ddd">
        <div class="row">
             <a class="btn btn-primary" href="<?php echo base_url();?>admin/Generic_controller/create_new_generic"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('create_generic')?> </a>
            <div class="social-icons pull-right">
                <label class="radio-inline btn btn btn-primary"  id="pad"><?php echo display('pad_print');?></label>
                <ul>
                    <li><a href="" onclick="printContent('div1')" title="Print"><i class="fa fa-print"></i></a></li>
                </ul>
            </div> 
        </div>
    </div>

    <div id="div1">
    <?php if(!empty($patient_info)){ ?>
    <!--   -->
    <!-- start hoder area -->
    <!--  -->        
        <div class="container">
        	<div class="main-header">
    	        <div class="row header_area">
    	            <div class="hed-1 ">
    	                <b><?php echo display('date');?> :</b> 
    	                    <?php 
    	                         $date1 =  date_create(@$value->create_date_time);
    	                         echo $newDate = date_format($date1,"d-M-Y h:i:sa l");
    	                    ?>
    	            </div>
    	           <div class="hed-2">                      
    	                <?php echo display('patient_id');?>: <?php echo @$value->patient_id;?>,
    	                <?php echo display('appointment_id');?>: <?php echo @$value->appointment_id;?> 
    	                <a style="color: rgb(255, 255, 255);margin-left: 70px;
    	                font-weight: bold;
    	                font-size: 15px;"  target="_blank" href="<?php echo base_url();?>History_controller/patient_history/<?php echo @$value->patient_id;?>"><?php echo display('patient_history');?></a>
    	            </div>
    	        </div>

    	        <div class="row address_area">
    	            <div class="a-one">
    	                <h4 ><?php echo @$value->doctor_name;?></h4>
    	                <?php echo @$value->degrees;?><br>
    	                <b><?php echo @$value->specialist;?></b><br>
    	                <?php echo @$value->designation;?><br>
    	                <b><?php echo @$value->service_place;?></b>
    	            </div>

    	            <div class="a-two">
    	                <b><?php echo @$v_info->venue_name;?></b><br>
    	                <?php echo @$v_info->venue_address;?>,
    	                <?php echo @$v_info->venue_contact;?>
    	            </div>
    	        </div>

    	        <div class="row patient_area">
    	            <div class="col-md-12">
    	                <h5 style="padding-left:10px;">
    	                <strong><?php echo display('patient_name');?>:</strong> <b><?php echo @$value->patient_name;?></b>,
    	                 &nbsp; <strong><?php echo display('age');?> :</strong> 
    	                 <?php
    	                    $date1=date_create(@$value->birth_date);
    	                    $date2= date_create( date('y-m-d'));
    	                    $diff=date_diff($date1,$date2);
    	                    echo @$diff->format("%Y-Y:%m-M:%d-D");
    	                  ?>,
    	                 &nbsp;<strong><?php echo display('sex');?> :</strong> <?php echo @$value->sex;?>, 
    	                 &nbsp;<strong><?php echo display('patient_weight');?> :</strong> <?php echo @$value->weight;?>, 
                         &nbsp;<strong><?php echo display('patient_bp');?> :</strong> <?php echo @$value->pressure;?>
    	                 </h5>
    	            </div>
    	        </div>
            </div>
        </div>

    <!--   -->
    <!-- end hoder area -->
    <!--  -->



    <!--   -->
    <!-- start content area -->
    <!--  -->  
            <div class="container">
                <div class="row">
                	<!-- laft sideber -->
                    <div class="col-md-4 col-sm-4 left-side">
		                    <?php if(!empty($value->problem)){?>
		                        <div class="problem">
		                            <h4><b><?php echo display('patient_cc');?></b></h4>
		                            <?php 
		                                $cc =  explode(",",$value->problem);
		                                for ($i=0; $i<count($cc); $i++) {
		                                     echo '<li style="margin-left:20px;">'.@$cc[$i].'</li>';
		                                }
		                            ?>
		                        </div>
		                      <?php } ?>

                                <?php if(!empty($value->history)){?>
                                <div class="history">
                                    <h4><b><?php echo display('history');?> </b></h4>
                                    <?php 
                                        $hs =  explode(",",$value->history);
                                        for ($i=0; $i<count($hs); $i++) {
                                             echo '<li style="margin-left:20px;">'.@$hs[$i].'</li>';
                                        }
                                    ?>
                                </div>
                                <?php } ?>

		                        <?php if(!empty($value->temperature)){?>
		                         <div class="temperature">
		                              <h4><b><?php echo display('temperature');?> : </b><?php echo($value->temperature?$value->temperature."<sup>&deg</sup>C":'');?></h4>
		                            
		                        </div>
		                        <?php } ?>

                                <?php if(!empty($value->oex)){?>
                                        <h4><?php echo display('oex');?></h4>
                                        <?php  
                                        $o =  explode(",",$value->oex);
                                        for ($i=0; $i<count($o); $i++) {
                                         echo '<li style="margin-left:20px;">'.@$o[$i].'</li>';
                                        }       
                                        ?>
                                <?php }?>

                                <?php if(!empty($value->pd)){?>
                                       <h4><?php echo display('pd');?></h4> 
                                       <?php 
                                            $p =  explode(",",$value->pd);
                                            for ($i=0; $i<count($p); $i++) {
                                             echo '<li style="margin-left:20px;">'.@$p[$i].'</li>';
                                            }
                                       ?> 
                                <?php }?>

                                <?php  if(!empty($t_info)) { ?>
		                       
		                        <div class="test-list">
		                             <h4><b><?php echo display('test');?></b></h4>
		                            <ul>
		                                <?php  $i=1; foreach ($t_info as $value2) { ?>
		                                
		                               <li><?php echo $i++.' . '.@$value2->test_name;?></li>
		                               <?php echo @$value2->test_assign_description;?>

		                                <?php } ?>
		                            </ul>
		                        </div>
                                 <?php } ?>

		                  <?php if(!empty($a_info)) { ?>
                            <div class="advice-details">
                                <h4><b><?php echo display('advice');?></b></h4>
                                <ul>
                                    <?php  $i=1; foreach ($a_info as $value2) { ?>
                                    <li><?php echo @$value2->advice;?></li>

                                    <?php } ?>
                                </ul>
                            </div>
                             <?php } ?>
                    </div><!--end left sideber-->



                    <!-- right sideber -->
                    <div class="col-md-8 col-sm-8 right-side">
                        <div class="table-responsive marg">
                            <table  class="table table-bordered table-hover">
                                
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl');?></th>
                                        <th><?php echo display('type');?></th>
                                        <th><?php echo display('generic_name');?></th>
                                        <th><?php echo display('mgml');?></th>
                                        <th><?php echo display('dose');?> </th>
                                        <th><?php echo display('day');?></th>
                                        <th><?php echo display('medicine_comment');?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php $i=1; foreach ($patient_info as $value1) {  ?>
                                    <tr>
                                        <td><?php echo @$i++;?></td>
                                        <td><?php echo @$value1->medicine_type;?></td>
                                        <td><?php echo @$value1->group_name;?></td>
                                        <td><?php echo @$value1->mg;?></td>
                                        <td><?php echo @$value1->dose;?></td>
                                        <td><?php echo @$value1->day;?></td>
                                        <td><?php echo @$value1->medicine_com;?></td>
                                    </tr>
                                <?php } ?> 
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="7" class="text-center"><?php echo @$value1->pres_comments; ?></a>.</td>
                                    </tr>
                                </tfoot>
                                
                            </table>
                        </div>
                    </div><!-- end right sideber-->

                </div>
            </div>
        <?php } else{ ?>
        <section>
            <div class="container">
                <div class="row details-content">
                    <div class="patient-details text-center">
                        <div class="alert alert-block alert-danger fade in">
                             <strong><?php echo display('prescription_empty_msg');?></strong>
                        </div>
                    </div>
                </div>
            </div>
         </section>               
        <?php } ?>

<!--   -->
<!-- start footer area -->
<!--  -->  
        <div class="container">
            <div class="row main-footer">
                 <div class="col-sm-7 f1">
                    <p id="link"><?php echo base_url();?></p>
                </div>

                <div class="col-sm-5 f2">
                    <p id="signature"><?php echo display('Signature');?></p>
                </div>           
            </div>
	            <div class="col-sm-12 footer1">
	                <?php echo display('chamber_time');?> :
	                <?php echo display('start_time');?>: <?php echo date('h:i A', strtotime(@$chember_time->start_time));?>,
	                <?php echo display('end_time');?> : <?php echo date('h:i A', strtotime(@$chember_time->end_time));?>
	            </div>
            </div> 
        </div> 
<!--   -->
<!-- end footer area -->
<!--  -->  
        </div>


