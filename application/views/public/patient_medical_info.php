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
    



    </head>
    <body>

    <?php 
         @$js_data = json_decode($prescription->data);
         @$medicine_data =  (array) $js_data->medicine_data;
        
    ?>

<div id="PrintMe">
        <div class="container">
            <div class="row top-bar" style="border-bottom: 7px double #EAEAEA;">
                 
                <div class="social-icons pull-right">
                    <ul>
                        <li><a href="" onclick="printContent('PrintMe')" title="Print"><i class="fa fa-print"></i></a></li>
                    </ul>
                </div> 
            </div>
        </div>
        
        <section>
            <div class="container">
                <div class="row details-content">
                    <div class="patient-details text-center">
                        <h3>Name: <?php echo @$info->family_name .' '. @$info->given_name ;?>
                        &nbsp;Age: <?php echo @$info->birth_date;?>
                        &nbsp;Sex: <?php echo @$info->sex ;?> 
                        &nbsp;Patient ID: <?php echo @$info->patient_id;?>
                        </h3>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="table-responsive marg">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Efact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <td>Do you have allergies to any medicine or food ?</td>
                                        <td><?php echo @$info->food_allergies;?></td>
                                    </tr>

                                     <tr>
                                        <td> Do you have a tendency to bleed or buise easily ?</td>
                                        <td><?php echo @$info->bleed_tendency;?></td>
                                    </tr>
                                     <tr>
                                        <td>Heart Diseases</td>
                                        <td><?php echo @$info->heart_disease;?></td>
                                    </tr>

                                    <tr>
                                        <td>Diabetic</td>
                                        <td><?php echo @$info->diabetic;?></td>
                                    </tr>

                                     <tr>
                                        <td>HighBlood Pressure</td>
                                        <td><?php echo @$info->high_blood_pressure;?></td>
                                    </tr>
                                     <tr>
                                        <td>Any Surgeries</td>
                                        <td><?php echo @$info->surgeries;?></td>
                                    </tr>
                                    
                                     <tr>
                                        <td>Any Accidents</td>
                                        <td><?php echo @$info->accidents;?></td>
                                    </tr>
                                     
                                    
                                     <tr>
                                        <td>Others</td>
                                        <td><?php echo @$info->others;?></td>
                                    </tr>

                                    <tr>
                                        <td>Do you Consider yourself to be in a high risk group for infectious diseases?</td>
                                        <td><?php echo @$info->high_risk_diseases;?></td>
                                    </tr>
                                    <tr>
                                        <td>Please list any relevant family medical history and social history</td>
                                        <td><?php echo @$info->family_history;?></td>
                                    </tr>
                                    <tr>
                                        <td>Please list your current medical conditions and medications</td>
                                        <td><?php echo @$info->current_medication;?></td>
                                    </tr>
                                    <tr>
                                        <td>Are you under Private Health Insurance Extras covering Acupuncture or chiese Herbal Medicine?</td>
                                        <td><?php echo @$info->others_msurance;?></td>
                                    </tr>
                                    <tr>
                                        <td>Are you covered by Worksafe or Comcare?</td>
                                        <td><?php echo @$info->others_comcare;?></td>
                                    </tr>
                                    <tr>
                                        <td>Are you covered by TAC?</td>
                                        <td><?php echo @$info->others_tac;?></td>
                                    </tr>
                                    <tr>
                                        <td>Are you a Pensioner, Student, Low-Income Healtheare Card Holder</td>
                                        <td><?php echo @$info->others_low_income;?></td>
                                    </tr>

                                    <tr>
                                        <td>How do you know our clinic? Friend, Yellow Page, Google</td>
                                        <td><?php echo @$info->others_reffer;?></td>
                                    </tr>
                                    <tr>
                                        <td> Do you require a Sbscription on every visit?</td>
                                        <td><?php echo @$info->subscription;?></td>
                                    </tr>

                                    <tr>
                                        <td>Are you pregnant or is there apossibility to being pregnant?</td>
                                        <td><?php echo @$info->female_pregnent;?></td>
                                    </tr>

                                    <tr>
                                        <td>Are you breast feeding now?</td>
                                        <td><?php echo @$info->female_breast_feeding;?></td>
                                    </tr>

                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    


        
        <div class="container">
            <div class="row footer" style="border-top: 7px double #EAEAEA;">
               
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