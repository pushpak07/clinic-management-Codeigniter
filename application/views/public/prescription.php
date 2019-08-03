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


<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> Prescription </title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>extra/prescription/css/bootstrap.min.css" rel="stylesheet">
        <!-- flaticon -->
        <link href="<?php echo base_url();?>extra/prescription/css/flaticon.css" rel="stylesheet">
        <!-- font-awesome -->
        <link href="<?php echo base_url();?>extra/prescription/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- style -->
        <link href="<?php echo base_url();?>extra/prescription/css/style.css" rel="stylesheet">
        <!--gogole fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,800italic,600,400italic,300italic,600italic,700italic,300|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Raleway:400,100,100italic,200,300,200italic,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
 
    </head>

<body>

    <?php 
        //print_r($prescription);
         @$js_data = json_decode($prescription->data);
         @$medicine_data =  (array) $js_data->medicine_data;

        
    ?>

<div id="PrintMe">
        <div class="container">
            <div class="row top-bar" style="border-bottom: 7px double #EAEAEA;">
                <div class="left-text pull-left">
                    <p>
                    <b><?php echo display('date');?> :</b> 
                        <?php 
                             $date1 =  date_create(@$value->create_date_time);
                             echo $newDate = date_format($date1,"d-M-Y h:i:sa l");
                        ?>
                        </p>
                </div>  
                <div class="social-icons pull-right">
                    <ul>
                        <li><a href="" onclick="printContent('PrintMe')" title="Print"><i class="fa fa-print"></i></a></li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="container header" style="padding: 30px 20px;">
            <div class="logo pull-left">
               
                <h4 ><?php echo @$doctor->doctor_name;?></h4>
                    <?php echo @$doctor->degrees;?><br>
                    <b><?php echo @$doctor->specialist;?></b><br>
                    <?php echo @$doctor->designation;?><br>
                    <b><?php echo @$doctor->service_place;?></b>
            </div>
            <div class="header-right-info pull-right clearfix">
                <div class="single-header-info" style="padding-top: 16px;">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>EMAIL</h3>
                        <p><?php echo @$email->details;?></p>
                    </div>
                </div>
                <div class="single-header-info" style="padding-top: 16px;">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-telephone"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Call Now</h3>
                        <p><b>  <?php echo @$phone->details;?></b></p>
                    </div>
                </div>
            </div>


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
                        
                        <div itemscope="" itemtype="" class="grid-one-fourth attributionBlock">
                            <p id="signature"><?php echo display('Signature');?>............................</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    


        
        <div class="container">
            <div class="row footer" style="border-top: 7px double #EAEAEA;">
                <p>  </p>
            </div>
        </div>

    </div>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>extra/prescription/js/bootstrap.min.js"></script>


<script type="text/javascript">
    
    //print a div
    function printContent(el){
        var restorepage  = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        location.reload();
    }

</script>


    </body>
</html>