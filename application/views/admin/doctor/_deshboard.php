

            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon">
                        <i class="pe-7s-world"></i>
                    </div>
                    <div class="header-title">
                        <h1><?php echo display('doctoress_dashboard');?></h1>
                        <small><?php echo display('doctoress_dashboard');?></small>
                        <ol class="breadcrumb">
                            
                            <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
                        </ol>
                    </div>
                </section>

                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                            <a href="<?php echo base_url();?>admin/doctor/Patient_controller/patient_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count(@$total_patient)?></span> </h2>
                                            <div class="small"> <?php echo display('total_patient');?> </div>
                                        <div class="sparkline1 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>    
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                            <a href="<?php echo base_url();?>admin/doctor/Appointment_controller/today_gate_appointment_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count(@$to_day_get_appointment);?></span> </h2>
                                            <div class="small"> Today Get Appointment </div>
                                        <div class="sparkline1 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>    
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                                <a href="<?php echo base_url();?>admin/doctor/Appointment_controller/today_appointment_list">
                                    <div class="panel-body">
                                        <div class="statistic-box">
                                            <h2><span class="count-number"><?php echo count(@$today_appointment);?></span> </h2>
                                                <div class="small"> <?php echo display('today_appointment')?> </div>
                                            <div class="sparkline1 text-center"></div>
                                        </div>
                                        <div class="icon"><i class="ti-user"></i></div>
                                    </div>
                                </a>    
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd">
                            <a href="<?php echo base_url();?>admin/doctor/Appointment_controller/appointment_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count($total_appointment);?></span> </h2>
                                        <div class="small"><?php echo display('total_appointment')?></div>
                                        <div class="sparkline2 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                         <!-- Bar Chart -->
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4><?php echo display('appointment_chart')?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="barChart" height="140"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </section> <!-- /.content -->
            </div> <!-- /.content-wrapper -->
<script>


$(document).ready(function () {
    //bar chart
    var ctx = document.getElementById("barChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Last 30 days", "Last 15 days", "Last 7 days", "Today"],
            datasets: [
                {
                    label: "<?php echo display('appointment_generated');?>",
                    data: [<?php echo @$last_30;?>, <?php echo @$last_15;?>, <?php echo @$last_7;?>, <?php echo count(@$to_day_get_appointment);?>],
                    borderColor: "#223F4A",
                    borderWidth: "0",
                    backgroundColor: "#223F4A"
                },
                {
                    label: "<?php echo display('appointment_deleted');?>",
                    data: [<?php echo @$last_30;?>, <?php echo @$last_15;?>, <?php echo @$last_7;?>, <?php echo count(@$to_day_get_appointment);?>],
                    borderColor: "#57787D",
                    borderWidth: "0",
                    backgroundColor: "#57787D"
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });

});

</script>            