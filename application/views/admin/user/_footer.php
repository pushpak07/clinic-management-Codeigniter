
<?php 
    //query for logo 
     $result = $this->db->select('*')->from('web_pages_tbl')->where('name','copy_right')->where('status',1)->get()->row();

?>


            <footer class="main-footer">
                
               <p><?php echo @$result->details;?></p>
            
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- Start Core Plugins
        =====================================================================-->

        <!-- jquery-ui --> 
        <script src="<?php echo base_url()?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="<?php echo base_url()?>assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <!-- <script src="<?php echo base_url()?>assets/plugins/pace/pace.min.js" type="text/javascript"></script> -->
        <!-- SlimScroll -->
        <script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- AdminBD frame -->
        <script src="<?php echo base_url()?>assets/dist/js/frame.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="<?php echo base_url()?>assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="<?php echo base_url()?>assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Data maps js -->
        <script src="<?php echo base_url()?>assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="<?php echo base_url()?>assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- Emojionearea -->
        <script src="<?php echo base_url()?>assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="<?php echo base_url()?>assets/plugins/monthly/monthly.js" type="text/javascript"></script>
        <!-- ChartJs JavaScript -->
        <script src="<?php echo base_url()?>assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <!-- End Page Lavel Plugins-->

        <!-- End Page Lavel Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->

         <!-- summernote js -->
        <script src="<?php echo base_url()?>assets/plugins/summernote/summernote.min.js" type="text/javascript"></script>
        <!-- End Page Lavel Plugins-->


        <!-- Dashboard js -->
        <script src="<?php echo base_url()?>assets/dist/js/dashboard.min.js" type="text/javascript"></script>

         <!-- datatable -->
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>        
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables_custom.min.js" type="text/javascript"></script>        
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url()?>assets/custom.js" type="text/javascript"></script>

    <!-- date time picker -->
        <script src="<?php echo base_url()?>assets/plugins/ui-datetimepicker/jquery-ui-timepicker-addon.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/ui-datetimepicker/jquery-ui-sliderAccess.js"></script>

<script type="text/javascript">
    //bar chart
                var ctx = document.getElementById("barChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Last 30 days", "Last 15 days", "Last 7 days", "Today"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [<?php echo $last_30;?>, <?php echo $last_15;?>, <?php echo $last_7;?>, <?php echo count(@$to_day_get_appointment);?>],
                                borderColor: "rgba(55, 160, 0, 0.9)",
                                borderWidth: "0",
                                backgroundColor: "rgba(55, 160, 0, 0.5)"
                            },
                            {
                                label: "My Second dataset",
                                data: [<?php echo $last_30;?>, <?php echo $last_15;?>, <?php echo $last_7;?>, <?php echo count(@$to_day_get_appointment);?>],
                                borderColor: "rgba(0,0,0,0.09)",
                                borderWidth: "0",
                                backgroundColor: "rgba(0,0,0,0.07)"
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

                //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Total Patient", "Last 30 days", "Last 15 days", "Last 7 days"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [<?php echo @$total_patient;?>, <?php echo @$patient_30_day;?>, <?php echo @$patient_15_day;?>, <?php echo @$patient_7_day;?>]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "rgba(55, 160, 0, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(55, 160, 0, 0.5)",
                                pointHighlightStroke: "rgba(26,179,148,1)",
                                 data: [<?php echo @$total_patient;?>, <?php echo @$patient_30_day;?>, <?php echo @$patient_15_day;?>, <?php echo @$patient_7_day;?>]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
</script>

    </body>
</html>