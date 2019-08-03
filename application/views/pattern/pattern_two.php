   
<?php
    $phone = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','phone')
            ->get()
            ->row();

        $email = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','email')
            ->get()
            ->row();  
        $timezone = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','timezone')
            ->get()
            ->row();           
    date_default_timezone_set(@$timezone->details);
?>

    <?php 
        //print_r($prescription);
         @$js_data = json_decode($prescription->data);
         @$medicine_data =  (array) $js_data->medicine_data;

    ?>

<div id="pad_p" class="container">
    <div class="row">
    <div class="social-icons pull-right">
         <label class="radio-inline btn btn-primary" id="dif"><?php echo display('default_print');?></label>
          <ul>
              <li style="background: green;"><a href="" onclick="printContent('print2')" title="Print"><i class="fa fa-print"></i></a></li>
          </ul>
      </div> 
    </div>
</div>

<div id="print2">

        <div class="container header" style="padding: 30px 20px; height: <?php echo @$pattern->header_height?>px;">

        </div>

        <section>
            <div class="container">
                <div class="row details-content">
                    <div class="patient-details text-center">
                        <h3>Name: <?php echo @$patient->family_name .' '. @$patient->given_name ;?>, 
                        &nbsp;Age: 
                        <?php
                            $date1=date_create(@$patient->birth_date);
                            $date2= date_create( date('y-m-d'));
                            $diff=date_diff($date1,$date2);
                            echo @$diff->format("%Y-Y:%m-M:%d-D");
                          ?>,
                        &nbsp;Sex: <?php echo @$patient->sex ;?>, 
                        &nbsp;Patient ID: <?php echo @$patient->patient_id;?> 
                        </h3>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="table-responsive marg">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Medicine</th>
                                        <th>Herbs</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($medicine_data['medicine'] as $key => $val){?>
                                    <tr>
                                        <td><?php echo @$val->medicine;?></td>
                                        <td><?php echo @$val->harbs;?></td>
                                        <td><?php echo @$val->comment;?></td>
                                    </tr>
                                <?php }?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center"><?php echo @$js_data->overall_comment;?></a>.</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                     
                    </div>
                </div>
            </div>
        </section>
    
        
        <div class="container" style="">
            <div class="row footer" style="background:#fff;border-top: 7px double #EAEAEA; height: <?php echo @$pattern->footer_height;?>px;">
               
            </div>
        </div>

    </div>   