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

    $logo = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','logo')
            ->get()
            ->row();

        $timezone = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','timezone')
            ->get()
            ->row();  
        $google_map = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','google_map')
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
        <title> information </title>

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
   
        <style type="text/css">
            /*map*/
             .google_map > iframe{
                width:350px!important;
                height:350px!important;
            }
        </style>         
    </head>

    <body>

    <div id="PrintMe">
        <div class="container">
            <div class="row top-bar">
                <div class="left-text pull-left">
                    <p><b><?php echo display('date')?> : <?php echo @$print->get_date_time;?></p>
                </div>  

                <div class="social-icons pull-right">
                    <ul>
                        <li><a href="" onclick="printContent('PrintMe')" title="Print"><i class="fa fa-print"></i></a></li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="container header">

            <div class="logo pull-left">
                <a href="#">
                    <img src="<?php echo @$logo->picture;?>" class="img-responsive" alt="Awesome Image">
                </a>
            </div>
            <div class="header-right-info pull-right clearfix">
                <div class="single-header-info">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>EMAIL</h3>
                        <p><?php echo $email->details;?></p>
                    </div>
                </div>
                <div class="single-header-info">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-telephone"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Call Now</h3>
                        <p><b><?php echo $phone->details;?></b></p>
                    </div>
                </div>
                
            </div>


        </div>
        <section>
            <div class="container">
                <div class="row information">
                    <div class="sec-title colored text-center">
                        <h2>Patient Information</h2>
                        <span class="decor">
                            <span class="inner"></span>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <div class="information-details">
                            <ul>
                                <li>Name :<span class="pull-right"><?php echo @$print->family_name .' '. @$print->given_name ;?></span></li>
                                <li>Appointment Id :<span class="pull-right"><?php echo $print->appointment_id;?></span></li>
                                <li>Patient Id :<span class="pull-right"><?php echo $print->patient_id;?></span></li>
                                <li>Date :<span class="pull-right"><?php echo $print->get_date_time;?></span></li>
                                <li>Time :<span class="pull-right"><?php echo $print->sequence;?></span></li>
                                <li>Doctor :<span class="pull-right"><?php echo $print->doctor_name;?></span></li>
                                <li>Department :<span class="pull-right"><?php echo $print->department;?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="google_map">
                            <?php echo $google_map->details;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <div class="container">
            <div class="row footer">
                <p></p>
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