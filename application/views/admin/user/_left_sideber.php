           
<script type="text/javascript">
    $(document).ready(function () {

        var segment_1 = '<?php echo $this->uri->segment(1); ?>';
        var segment_2 = '<?php echo $this->uri->segment(2); ?>';
        var segment_3 = '<?php echo $this->uri->segment(3); ?>';

    
        else if (segment_3 = 'Appointment_controller') {
            $('.appointment').addClass('active');
        }

        else if (segment_3 = 'Patient_controller') {
            $('.patient').addClass('active');
        }

        else if (segment_3 = 'Users_controller') {
            $('.users').addClass('active');
        }

        else if (segment_3 = 'Invoice') {
            $('.Invoice').addClass('active');
        } 

    });

</script>


            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel text-center">
                        <div class="image">
                            <img src="<?php echo $this->session->userdata('picture');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <p><?php echo $this->session->userdata('name'); ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">

                        <li class="treeview patient ">
                            <a href="#">
                                <i class="fa fa-child" aria-hidden="true"></i><span><?php echo display('patient')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>admin/user/Patient_controller/create_new_patient"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_new_patient')?></a></li>
                                <li><a href="<?php echo base_url();?>admin/user/Patient_controller/patient_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('patient_list')?></a></li>
                            </ul>
                        </li> 


                        <li class="treeview appointment ">
                            <a href="#">
                                <i class="fa fa-codepen" aria-hidden="true"></i><span><?php echo display('appointment')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>admin/user/Appointment_controller"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('create_appointment')?></a></li>
                                <li><a href="<?php echo base_url()?>admin/user/Appointment_controller/appointment_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('appointment_list')?></a></li>
                            </ul>
                        </li>
                        

                        <li class="treeview Invoice">

                            <a href="#">
                                <i class="ti-paint-bucket"></i><span><?php echo display('invoice')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/user/Invoice"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_new_invoice')?> </a></li>
                                <li><a href="<?php echo base_url();?>admin/user/Invoice/invoice_list"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('invoice_list')?> </a></li>
                                <li><a href="<?php echo base_url();?>admin/user/Service"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_service')?> </a></li>
                            </ul>
                        </li>

                   </ul>
                </div> <!-- /.sidebar -->
            </aside>
      