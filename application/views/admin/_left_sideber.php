           
<script type="text/javascript">
    $(document).ready(function () {

        var segment_1 = '<?php echo $this->uri->segment(1); ?>';
        var segment_2 = '<?php echo $this->uri->segment(2); ?>';
        var segment_3 = '<?php echo $this->uri->segment(3); ?>';

        if (segment_3 === 'prescription_list' || segment_3 === 'create_new_generic'|| segment_3 === 'create_new_prescription') {
            $('.pres').addClass('active');
        }
       
        else if (segment_3 === 'Payment' || segment_3 === 'Payment_manage') {
            $('.payment').addClass('active');
        }
        else if (segment_2 === 'Appointment_controller' || segment_3 === 'appointment_list') {
            $('.appointment').addClass('active');
        }

        else if (segment_1 === 'create_new_patient' || segment_1 === 'patient_list') {
            $('.patient').addClass('active');
        }
        else if (segment_3 === 'add_schedule' || segment_3 === 'schedule_list' || segment_3 ==='schedul_edit') {
            $('.schedule').addClass('active');
        }
        else if (segment_2 === 'Emergency_stop_controller') {
            $('.emergency_stop').addClass('active');
        }
        else if (segment_2 === 'Venue_controller') {
            $('.venue').addClass('active');
        }
        else if (segment_2 === 'Disease_test_controller' || segment_2 === 'Setup_controller') {
            $('.setup_data').addClass('active');
        }
        else if (segment_2 === 'Users_controller' || segment_2 === 'Users_controller') {
            $('.users').addClass('active');
        }
        else if (segment_2 === 'Web_setup_controller' || segment_1 === 'profile') {
            $('.web_setting').addClass('active');
        }
        else if (segment_2 === 'Blog_controller' || segment_2 === 'Blog_controller') {
            $('.blog').addClass('active');
        }
        else if (segment_2 === 'Sms_setup_controller' || segment_2 === 'Sms_report_controller') {
            $('.sms_setup').addClass('active');
        }

        else if (segment_3 === 'Email') {
            $('.email').addClass('active');
        }
        else if (segment_2 === 'Doctor_controller') {
            $('.Doctor').addClass('active');
        }
        else if (segment_3 === 'Print_pattern_controller') {
            $('.print_pattern').addClass('active');
        } 
        else if (segment_2 === 'Invoice' || segment_2 === 'Service') {
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
                            <img src="<?php echo $this->session->userdata('doctor_picture');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <p><?php echo $this->session->userdata('doctor_name'); ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url();?>admin/Dashboard"><i class="ti-home"></i> <span><?php echo display('deashbord');?></span>
                            </a>
                        </li>

                        <li class="treeview Doctor">
                            <a href="#">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i><span><?php echo display('doctor')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Doctor_controller/add_new_doctor"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('create_doctor')?> </a></li>
                                <li><a href="<?php echo base_url();?>admin/Doctor_controller/doctor_list"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('doctor_list')?> </a></li>
                            </ul>
                        </li>

                        
                        <li class="treeview patient">
                            <a href="#">
                                <i class="fa fa-child" aria-hidden="true"></i><span><?php echo display('patient')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>create_new_patient"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_new_patient')?></a></li>
                                <li><a href="<?php echo base_url();?>patient_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('patient_list')?></a></li>
                            </ul>
                        </li> 


                        <li class="treeview appointment">
                            <a href="#">
                                <i class="fa fa-codepen" aria-hidden="true"></i><span><?php echo display('appointment')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>admin/Appointment_controller"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('create_appointment')?></a></li>
                                <li><a href="<?php echo base_url()?>admin/Appointment_controller/appointment_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('appointment_list')?></a></li>
                            </ul>
                        </li>
                        

                        <li class="treeview pres">
                            <a href="#">
                                <i class="fa fa-codepen" aria-hidden="true"></i><span><?php echo display('prescription')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>admin/Prescription_controller/prescription_list"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('prescription_list')?></a></li>
                            </ul>
                        </li>

                        <li class="treeview payment">
                            <a href="#">
                                <i class="ti-paint-bucket"></i><span><?php echo display('payment');?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/payment_method/Payment"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('Payment_Setup');?> </a></li>
                                <li><a href="<?php echo base_url();?>admin/payment_method/Payment_manage"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('payment_list');?></a></li>
                            </ul>
                        </li>

                        <li class="treeview Invoice">

                            <a href="#">
                                <i class="ti-paint-bucket"></i><span>Invoice</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Invoice"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_new_invoice')?> </a></li>
                                <li><a href="<?php echo base_url();?>admin/Invoice/invoice_list"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('invoice_list')?> </a></li>
                                <li><a href="<?php echo base_url();?>admin/Service"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_service')?> </a></li>
                            </ul>
                        </li>


                        <li class="treeview schedule">
                            <a href="#">
                               <i class="fa fa-weixin" aria-hidden="true"></i><span><?php echo display('schedule')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Schedule_controller/add_schedule"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_schedule')?></a></li>
                                <li><a href="<?php echo base_url();?>admin/Schedule_controller/schedule_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('schedule_list')?></a></li>
                            </ul>
                        </li>

                        <li class="treeview emergency_stop">
                            <a href="#">
                               <i class="fa fa-hand-paper-o" aria-hidden="true"></i><span><?php echo display('emergency_stop')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Emergency_stop_controller/emergency_stop_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('emergency_stop_list')?></a></li>
                            </ul>
                        </li>

                        

                        <li class="treeview setup_data">
                            <a href="#">
                                <i class="fa fa-bar-chart-o fa-fw"></i><span> <?php echo display('setup_data')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_language" class="nav-link"> Add Laguage </a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_section" class="nav-link"> Add Section </a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_disease" class="nav-link"> Add Disease </a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_category" class="nav-link"> Add Category </a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_classification" class="nav-link"> Add Classification </a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_medicine" class="nav-link"> Add Medicine </a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/medicine_List" class="nav-link"> <?php echo display('medicine_List')?></a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_herbs" class="nav-link"> Add Herbs</a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/add_medicine_herbs" class="nav-link"> Add Medicine Herbs</a></li>
                                <li><a href="<?php echo base_url();?>admin/Setup_controller/medicine_herbs_list" class="nav-link">  Herbs Medicine List</a></li>
                            </ul>
                        </li>


                        <li class="treeview users">
                            <a href="#">
                                <i class="fa fa-cogs" aria-hidden="true"></i><span> <?php echo display('users')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Users_controller/create_new_user" class="nav-link"><?php echo display('add_new_user')?></a></li>  
                                <li><a href="<?php echo base_url();?>admin/Users_controller/user_list" class="nav-link"><?php echo display('user_list')?></a></li>  
                            </ul>
                        </li>                        


                        <li class="treeview web_setting">
                            <a href="#">
                                <i class="fa fa-cogs" aria-hidden="true"></i><span> <?php echo display('web_setting')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Web_setup_controller/header_setting" class="nav-link"><?php echo display('header_setup')?></a></li>  
                            </ul>
                        </li>

                        <li class="treeview sms_setup">
                            <a href="#">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo display('sms_setup')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>admin/Sms_setup_controller/sms_gateway" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('gateway')?></a></li>
                            <li><a href="<?php echo base_url();?>admin/Sms_setup_controller/sms_template" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('sms_template')?> </a></li>
                            <li><a href="<?php echo base_url();?>admin/Sms_setup_controller/sms_scheduler" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('sms_schedule')?> </a></li>
                            <li><a href="<?php echo base_url();?>admin/Sms_setup_controller/custom_sms" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('send_custom_sms')?> </a></li>
                             <li><a href="<?php echo base_url();?>admin/Sms_report_controller/custom_sms_list" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('custom_sms_report')?> </a></li>
                            <li><a href="<?php echo base_url();?>admin/Sms_report_controller/auto_sms_list" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('auto_sms_report')?> </a></li>
                            </ul>
                        </li>

                        <li class="treeview email">
                            <a href="#">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo display('email_setup')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>admin/email/Email/email_schedule_setup" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('email_schedule_setup')?>  </a></li>
                            <li><a href="<?php echo base_url();?>admin/email/Email/email_list" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('email_list')?> </a></li>
                            <li><a href="<?php echo base_url();?>admin/email/Email/custom_email" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('send_custom_email')?> </a></li>
                            <li><a href="<?php echo base_url();?>admin/email/Email/email_template_setup" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('email_template')?> </a></li>
                            <li><a href="<?php echo base_url();?>admin/email/Email/template_list" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('email_template_list')?>  </a></li>
                            <li><a href="<?php echo base_url();?>admin/email/Email/email_config_setup" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('email_configaretion')?></a></li>
                            </ul>
                        </li>

                        <li class="treeview print_pattern">
                            <a href="#">
                                <i class="fa fa-print" aria-hidden="true"></i> <?php echo display('print_pattern')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                               <li><a href="<?php echo base_url();?>admin/print_pattern/Print_pattern_controller/view_setup" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> Setup Pattren</a></li>
                               <li><a href="<?php echo base_url();?>admin/print_pattern/Print_pattern_controller/view_setup_list" class="nav-link"> <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo display('pattern_list')?></a></li>
                            </ul>
                        </li>


                        <li class="Language">
                            <a href="<?php echo base_url();?>Language"><i class="fa fa-language" aria-hidden="true"></i> <?php echo display('language_setting')?> </a>
                        </li>

                   </ul>
                </div> <!-- /.sidebar -->
            </aside>

 