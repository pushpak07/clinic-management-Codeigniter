<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo (@$title)?@$title:'Admin panel'?></title>
        
        <?php 
            //query for logo 
            $result = $this->db->select('*')->from('web_pages_tbl')->where('name','fabicon')->where('status',1)->get()->row();
        ?>
        <!-- favicon -->
        <link rel="icon" href="<?php echo (!empty($result->picture)?$result->picture:null); ?>" sizes="16x16"> 
       
        <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
        <link href="<?php echo base_url()?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!-- <link href="<?php echo base_url()?>assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/> -->
        <!-- Lobipanel css -->
        <link href="<?php echo base_url()?>assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pace css -->
        <!-- <link href="<?php echo base_url()?>assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/> -->
        <!-- Font Awesome -->
        <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon -->
        <link href="<?php echo base_url()?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- Themify icons -->
        <link href="<?php echo base_url()?>assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->

        <!-- DataTables CSS -->
       <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
       <!-- datepiker -->
       <link href="<?php echo base_url()?>assets/plugins/ui-datetimepicker/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css"/>

       <!-- summernote css -->
        <link href="<?php echo base_url()?>assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
        

        <!-- Start page Label Plugins 
        =====================================================================-->
        <!-- Toastr css -->
        <link href="<?php echo base_url()?>assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="<?php echo base_url()?>assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
        <!-- Monthly css -->
        <link href="<?php echo base_url()?>assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
        <!-- End page Label Plugins 
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="<?php echo base_url()?>assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!-- <link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/> -->
        <!-- End Theme Layout Style
        =====================================================================-->
      <!-- jQuery -->
        <script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>

    </head>

<?php 
    $result = $this->db->select('*')->from('web_pages_tbl')->where('name','logo')->where('status',1)->get()->row();
?>

    <body class="hold-transition sidebar-mini">
    
    <div class="se-pre-con"></div>
        <!-- Site wrapper -->
        <div class="wrapper">


            <header class="main-header"> 
                <a href="<?php echo base_url();?>admin/user/Appointment_controller" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <!--<b>A</b>BD-->
                        <img src="<?php echo @$result->picture;?>" alt="">
                    </span>
                    <span class="logo-lg">
                        <!--<b>Admin</b>BD-->
                        <img src="<?php echo @$result->picture;?>" alt="">
                    </span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="pe-7s-keypad"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- settings -->
                            <li class="dropdown dropdown-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                                <ul class="dropdown-menu">

                                <li>
                                    <a href="<?php echo base_url();?>admin/user/Users_controller/update_profile"><i class="pe-7s-users"></i><?php echo display('profile');?></a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url();?>admin/user/Setting_controller/password_change"><i class="pe-7s-key"></i><?php echo display('change_password');?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>logout"><i class="fa fa-sign-out fa-fw"></i> <?php echo display('logout');?> </a>
                                </li>
                                </ul>
                            </li>
                        </ul>
   
                    </div>
                </nav>
            </header>

