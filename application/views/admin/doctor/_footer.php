
<?php 
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

<!-- End Core Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->
        <script src="<?php echo base_url()?>extra/sliptree-bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>extra/sliptree-bootstrap-tokenfield/docs-assets/js/scrollspy.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>extra/sliptree-bootstrap-tokenfield/docs-assets/js/affix.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>extra/sliptree-bootstrap-tokenfield/docs-assets/js/typeahead.bundle.min.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->

    </body>
</html>