
<?php
    date_default_timezone_set(@$info->timezone->details);
?>

<!DOCTYPE html>
<html lang="it">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo (!empty($info->website_title->details)?$info->website_title->details:null); ?></title>
        <link rel="icon" href="<?php echo (!empty($info->fabicon->picture)?$info->fabicon->picture:null); ?>" sizes="16x16"> 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet">
        <!-- jquery-ui -->
        <link href="<?php echo base_url();?>public/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- font-awesome -->
        <link href="<?php echo base_url();?>public/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- owl carousel -->
        <link href="<?php echo base_url();?>public/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>public/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>public/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <!-- rypp -->
        <link href="<?php echo base_url();?>public/RYPP/css/RYPP.css" rel="stylesheet" type="text/css"/>
        <!-- Style -->
        <link href="<?php echo base_url();?>public/css/style_web.min.css" rel="stylesheet" type="text/css"/>
    </head>



    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="se-pre-con"></div>
        <header class="sTop hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <li><i class="fa fa-phone"></i> <a href=""><?php echo (!empty($info->phone->details)?$info->phone->details:null); ?></a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href=""><?php echo (!empty($info->email->details)?$info->email->details:null); ?></a></li>
                        </ul>
                    </div>

                    <div class="col-sm-6">
                        <ul class="social-icon hidden-xs">
                        <li><a href="<?php echo base_url();?>login" target="__blank"><span class="glyphicon glyphicon-log-in"></span> <?php echo display('login');?></a></li>
                            <li><a href="<?php echo (!empty($info->facebook->details)?$info->facebook->details:null); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo (!empty($info->twitter->details)?$info->twitter->details:null); ?>"><i class="fa fa-twitter"></i></a></li>
                            <!--<li><a href="<?php echo (!empty($info->google->details)?$info->google->details:null); ?>"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="<?php echo (!empty($info->linkedin->details)?$info->linkedin->details:null); ?>"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="<?php echo (!empty($info->youtube->details)?$info->youtube->details:null); ?>"><i class="fa fa fa-vine"></i></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display --> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo (!empty($info->logo->picture)?$info->logo->picture:null); ?>" class="img-responsive" alt="" style="width:250px; margin-top:-23px;"></a>
                    
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#slider-wrapper"><?php echo display('home');?></a></li>
                        <li><a class="page-scroll" href="#about"><?php echo display('about_menu');?></a></li>
                        <li><a class="page-scroll" href="#appointment"><?php echo display('font_appointment');?></a></li>
                        <li><a class="page-scroll" href="#hour"><?php echo display('working_hour');?></a></li>
                        <li><a class="page-scroll" href="#testimonial"><?php echo display('testimonial');?></a></li>
                        <li><a class="page-scroll" href="#contact"><?php echo display('contact');?></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="slider-wrapper">
            <div id="owl-slider" class="owl-carousel owl-theme">
                <!-- slider item one -->
                <?php 
                  foreach ($slider as  $value) {
                ?>
                    <div class="item" style="background-image: url(<?php echo (!empty($value->picture)?$value->picture:null); ?>)">
                        <div class="item-text-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <?php
                                            $exploded = implode(' ', array_slice(explode(' ', $value->details), 0, 30));
                                        ?>
                                        <h1>
                                        <span>
                                            <?php echo $fisrt = @explode(' ',trim($value->heading))[0]; ?>                                    
                                        </span>
                                            <?php echo @substr(strstr($value->heading," "), 1); ?>
                                        </h1>
                                        <p> <?php echo (!empty($exploded)?$exploded:null); ?></p>
                                        <?php echo '<a type="button" class="btn btn-blue" href="javascript:void(0)" onclick="view_slider('.@$value->id.')"> '.display('larnmore').'</a>'?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- /.slider item three -->
            </div>
        </section>

        <section class="counter-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="counter-box">
                                    <ul>
                                        <li><img src="<?php echo base_url();?>public/images/icon-1.png" class="img-responsive" alt=""></li>
                                        <li><span class="count"><?php echo @$total_appointment;?></span></li>
                                    </ul>
                                    <h4><?php echo display('total_appointment');?></h4>
                                    <p><?php echo (!empty($info->total_appointment_details->details)?$info->total_appointment_details->details:null); ?></p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="counter-box box-color">
                                    <ul>
                                        <li><img src="<?php echo base_url();?>public/images/icon-2.png" class="img-responsive" alt=""></li>
                                        <li><span class="count"><?php echo count(@$to_day_appointment);?></span></li>
                                    </ul>
                                    <h4><?php echo display('today_appointment');?></h4>
                                    <p><?php echo (!empty($info->today_appointment_details->details)?$info->today_appointment_details->details:null); ?></p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="counter-box">
                                    <ul>
                                        <li><img src="<?php echo base_url();?>public/images/icon-3.png" class="img-responsive" alt=""></li>
                                        <li><span class="count"><?php echo @$total_patient;?></span></li>
                                    </ul>
                                    <h4><?php echo display('total_patient');?></h4>
                                    <p><?php echo (!empty($info->total_patient_details->details)?$info->total_patient_details->details:null); ?> </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About section
        ================================ -->
        <section id="about" class="about-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-5 my-padding">
                        <div class="about-grid-inner">
                            <div class="about-grid" >
                                <div class="about-icon">
                                    <img src="<?php echo base_url();?>public/images/icon-4.png" alt="">
                                </div>
                                <div class="grid-detail">
                                    <h3><?php echo display('doctor_spciality');?></h3>
                                    <p><?php echo @$doctor_info->specialist;?></p>
                                </div>
                            </div>

                            <div class="about-grid" >
                                <div class="about-icon"><img src="<?php echo base_url();?>public/images/icon-5.png" alt=""></div>
                                <div class="grid-detail">
                                    <h3><?php echo display('doctor_degrees');?></h3>
                                    <p><?php echo @$doctor_info->degrees;?></p>
                                </div>
                            </div>
                            <div class="about-grid" >
                                <div class="about-icon"><img src="<?php echo base_url();?>public/images/icon-6.png" alt=""></div>
                                <div class="grid-detail">
                                    <h3><?php echo display('doctor_experience');?></h3>
                                    <p><?php echo @$doctor_info->doctor_exp;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="history-inner">
                            <h5><?php echo display('about_me');?></h5>
                            <h3><?php echo @$doctor_info->doctor_name;?></h3>
                            <!-- <p><?php echo $alert1 = @$doctor_info->about_me;?> -->
                            <?php
                               echo $about_details = @$doctor_info->about_me; 
                              // echo $exploded = implode(' ', array_slice(explode(' ', $about_details), 0, 90));
                            ?>
                                
                            </p>
                           
                        </div>
                    </div>

                    <div class="col-sm-4 hidden-xs hidden-sm">
                        <div class="about-img">
                            <img src="<?php echo (!empty($info->about_img->picture)?$info->about_img->picture:null); ?>" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Appointment section
        ==================================== -->
        <section id="appointment" class="appointment-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo (!empty($info->app_image->picture)?$info->app_image->picture:null); ?>" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6">

                   <?php if(!empty($info->third_party_api->details)){
                    echo $info->third_party_api->details;
                    } else { ?>
                        <div class="tab">
                            <ul class="tabs">
                                <li><a href="#"><?php echo display('font_appointment');?></a></li>
                                <li><a href="#"><?php echo display('register');?></a></li>
                            </ul>
                            <!-- / tabs -->
                            <div class="tab_content">
                                <div class="tabs_item">
                    <?php 
                      $mag = $this->session->flashdata('exception');
                      if($mag !=''){
                            echo $mag;
                        }
                        $patient_id = $this->session->flashdata('patient_id');

                        $attributes = array('method'=>'post','name'=>'app_form', 'onsubmit'=>'return validateForm()');
                        echo form_open('Welcome/appointment', $attributes);                
                    ?>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" value="<?php echo @$patient_id;?>" onkeyup="loadName(this.value)" name="patient_id" id="patient_id" required class="form-control" placeholder="<?php echo display('patient_id');?>">
                                        </div>

                                        <div class='p_name' ></div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="date" class="form-control datepicker3"  required placeholder="<?php echo display('date_placeholder');?>">
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                             <select onchange="loadSchedul()" class="form-control" required name="venue_id" id="venue_id">
                                                <option value=""><?php echo display('value');?></option>
                                                <?php foreach ($venue as $value) {
                                                    echo '<option value="'.$value->venue_id.'">'.$value->venue_name.'</option>';
                                                } ?>
                                            </select>
                                        </div>

                                        <div class="schedul1" ></div>
                                  

                                        <div class="form-group">
                                            <textarea class="form-control" name="problem"  id="problem" placeholder="<?php echo display('patient_cc');?>" maxlength="140" rows="7"></textarea>         
                                        </div>
                                        <input type="submit" class="btn btn-blue btn-block" disabled value="<?php echo display('appointment');?>">
                                    <?php echo form_close();?>
                                </div>



                                <!-- / tabs_item -->
                                <div class="tabs_item">
                                   <?php 

                                        $attributes = array('method'=>'post','name'=>'register_form', 'onsubmit'=>'return validateregister()');
                                        echo form_open_multipart('Welcome/registration', $attributes); 
                                   ?>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                                            <input type="text" class="form-control" id="full_name" name="name" placeholder="<?php echo display('name');?>" required>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                                            <input type="text" class="form-control" onkeyup="load_patient_id()" id="pat_id" autocomplete="off" name="pat_id" placeholder="<?php echo display('patient_id');?>" required>
                                            
                                        </div>
                                        <div class="input-group">
                                            <span class="p_id"></span>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="<?php echo display('phone_number');?>" required>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo display('email');?>">
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" name="birth_date" id="datepicker2" placeholder="<?php echo display('birth_date');?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label"><?php echo display('sex');?> </label>
                                            <label class="radio-inline"> 
                                                <input type="radio" value="Male" name="gender" required><?php echo display('male');?>
                                            </label>
                                            <label class="radio-inline"> 
                                                <input type="radio" value="Female" name="gender" required><?php echo display('female');?>
                                            </label> 
                                        </div>
                                       
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bold"></i></span>
                                            <select class="form-control" name="blood_group" id="blood_group">
                                                <option value=''>--<?php echo display('blood_group');?>--</option>
                                                <option value='A+'>A+</option>
                                                <option value='A-'>A-</option>
                                                <option value='B+'>B+</option>
                                                <option value='B-'>B-</option>
                                                <option value='O+'>O+</option>
                                                <option value='O-'>O-</option>
                                                <option value='AB+'>AB+</option>
                                                <option value='AB-'>AB-</option>
                                                <option value='Unknown'>Unknown</option>
                                            </select>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="file" class="form-control" name="picture" id="picture">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control"  id="address" name="address" placeholder="<?php echo display('address');?>" maxlength="140" rows="7"></textarea>         
                                        </div>
                                        <input type="submit" id="submit2" name="submit2" class="btn btn-blue btn-block" value="<?php echo display('register');?>">

                                    <?php echo form_close();?>
                                </div>
                                <!-- / tabs_item -->
                            </div>
                            <!-- / tab_content -->
                        </div>
                     <?php } ?>
                        <!-- / tab -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Working hours section
        ==================================== -->
        <section id="hour" class="content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <h1 class="titlle"><?php echo display('working_hour');?></h1>
                        <p> <?php echo (!empty($info->working_des->details)?$info->working_des->details:null); ?> </p>
                        <button type="button" class="btn btn-blue">
                            <span class="fa fa-ambulance"></span> <?php echo display('help_line_text');?> <?php echo (!empty($info->hotline->details)?$info->hotline->details:null); ?>
                        </button>
                        <div class="social">
                            <ul>
                                <li><a href="<?php echo (!empty($info->facebook->details)?$info->facebook->details:null); ?>"><i class="fa fa-lg fa-facebook"></i></a></li>
                                <li><a href="<?php echo (!empty($info->twitter->details)?$info->twitter->details:null); ?>"><i class="fa fa-lg fa-twitter"></i></a></li>
                                <!--<li><a href="<?php echo (!empty($info->google->details)?$info->google->details:null); ?>"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                <li><a href="<?php echo (!empty($info->linkedin->details)?$info->linkedin->details:null); ?>"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                <li><a href="<?php echo (!empty($info->youtube->details)?$info->youtube->details:null); ?>"><i class="fa fa-lg fa-youtube"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrap">
                            <table class="comparison-table">
                                <thead>
                                    <tr>
                                        <td class="marker"><?php echo display('day');?></td>
                                        <td class="marker"><?php echo display('venue');?></td>
                                        <td class="marker"><?php echo display('time');?></td>
                                    </tr>
                                </thead>
                                   <?php
                                   if(@$schedule!=NULL){
                                   foreach(@$schedule as $value){ ?>

                                        <tr>
                                            <td class="marker"><?php echo @$this->hash_model->day(@$value->day); ?> </td>
                                            <td class="marker"><?php echo @$value->venue_name ?></td>
                                           <td class="marker">
                                            <?php 
                                                echo date('h:i A', strtotime(@$value->start_time));
                                                echo " - ";
                                                echo date('h:i A', strtotime(@$value->end_time)); 
                                            ?> 
                                            </td> 
                                        </tr>
                                <?php } 
                                   }
                                ?>  
                            </table>
                        </div>
                        <!--end of .table-responsive-->
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial section
        ================================== -->
        <section id="testimonial" class="testimonialt-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <?php echo @$testimonial['details1'];?>
                                                <!-- <small>Someone famous</small> -->
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <?php echo @$testimonial['details2'];?>
                                                <!-- <small>Someone famous</small> -->
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <?php echo @$testimonial['details3'];?>
                                                <!-- <small>Someone famous</small> -->
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                    <img class="img-responsive " src=" <?php echo @$testimonial['picture1'];?>">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="<?php echo @$testimonial['picture2']?>">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="<?php echo @$testimonial['picture3']?>">
                                </li>
                            </ol>
                            
                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-post-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="titlle"><?php echo display('latest_news');?> <span></span></h1>
                    </div>             
                    <!-- Blog post -->
                    <?php
                         for($i=1;$i<=4; $i++) { 
                           
                    ?>
                        <div class="col-sm-6">
                            <div class="post-grid">
                                <?php echo '<a href="javascript:void(0)" onclick="view_post('.@$post['id'.@$i].')">
                                    <img src="'. @$post['picture'.$i].'" alt="">
                                </a>'?>
                                <div class="post-grid-detail">
                                    <h3>
                                <?php echo '<a href="javascript:void(0)" onclick="view_post('.@$post['id'.$i].')">'.@$post['title'.$i].'</a>'?>
                                    </h3>
                                    <div class="date">
                                        <ul>
                                            <li><?php echo @$post['post_date'.$i];?></li>
                                        </ul>
                                    </div>
                                   <?php echo $exploded = implode(' ', array_slice(explode(' ', @$post['details'.$i]), 0, 30));?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                     <div class="p_name"></div>
                </div>
            </div>
        </section>


<!--         <section class="news-post-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="owl-youtube">
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                          <div class="item"><img src="<?php echo base_url()?>public/owl-carousel/1.jpg" alt="Owl Image"></div>
                        </div>
                    </div>        
                </div>
            </div>
        </section> -->

<?php if(@$info->youtube_chanel_id->details!=NULL){ ?>
        <section class="news-post-inner">
            <div class="container">
                <div class="row">
                    <div id="rypp-demo-1" class="RYPP r16-9" data-playlist="<?php echo (!empty($info->youtube_chanel_id->details)?$info->youtube_chanel_id->details:null); ?>">
                        <div class="RYPP-video">
                          <div class="RYPP-video-player">
                            <!-- Will be replaced -->
                          </div>
                        </div>
                        <div class="RYPP-playlist">
                          <header>
                            <h2 class="_h1 RYPP-title">Playlist title</h2>
                            <p class="RYPP-desc">Playlist subtitle </p>
                          </header>
                          <div class="RYPP-items"></div>
                        </div>
                      </div>
                </div>
            </div>
        </section>
<?php }?>


        <footer id="contact">
            <div class="container">
                <div class="row footer-row">
                    <div class="col-md-3 col-sm-6 footer-col">
                        <div class="address-inner">
                           <img src="<?php echo (!empty($info->footer_picture->picture)?$info->footer_picture->picture:null); ?>" class="img-responsive" alt="">
                            
                            <?php $work = (!empty($info->working_des->details)?$info->working_des->details:null); ?>
                             <?php echo $exploded = implode(' ', array_slice(explode(' ', $work), 0, 30));?>
                             
                            <div class="address">
                                <i class="fa fa-map-marker"></i>
                                <p><?php echo (!empty($info->address->details)?$info->address->details:null); ?></p>
                            </div>
                            <div class="address">
                                <i class="fa fa-mobile"></i>
                                <p><?php echo (!empty($info->phone->details)?$info->phone->details:null); ?></p>
                            </div>
                            <div class="address">
                                <i class="fa fa-envelope-o"></i>
                                <p><a href="#"><?php echo (!empty($info->email->details)?$info->email->details:null); ?></a> </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 footer-col">
                        <h4 class="footer-title"><?php echo display('latest_news');?></h4>
                        <div class="post-widget">
                            <ul>
                            <?php  for($i=1;$i<=3; $i++) { 
                                if(!isset($post['title'.$i]))
                                continue;
                            ?>
                                <li>
                                <?php echo '<a href="javascript:void(0)" onclick="view_post('.$post['id'.$i].')">
                                    <img src="'. @$post['picture'.$i].'" alt="">
                                </a>'?>
                                     <?php echo '<a href="javascript:void(0)" onclick="view_post('.$post['id'.$i].')">'.@$post['title'.$i].'</a>'?>
                                 </li>
                            <?php } ?>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 footer-col">
                        <h4 class="footer-title"><?php echo display('latest_twitter');?></h4>
                        <div class="latest-tweet">
                                <?php echo (!empty($info->twitter_post->details)?$info->twitter_post->details:null); ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col">
                        <h4 class="footer-title"><?php echo display('google_map');?></h4>
                            <div class="google-map">
                                <?php echo (!empty($info->google_map->details)?$info->google_map->details:null); ?>
                            </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <?php echo (!empty($info->copy_right->details)?$info->copy_right->details:null); ?>
                    
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url();?>public/js/jquery-min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
        <!-- Scrolling Nav JavaScript --> 
        <script src="<?php echo base_url();?>public/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>public/js/scrolling-nav.js"></script>
        <script src="<?php echo base_url();?>public/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>public/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- RYPP.js -->
        <script src="<?php echo base_url();?>public/RYPP/js/RYPP.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url();?>public/js/custom.js" type="text/javascript"></script>        




<script>
    // load patient name
    function load_patient_id(){          
        var pat_id = document.getElementById('pat_id').value;
        if (pat_id!='') {            
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_patinet_id/'+pat_id.trim(),
                'type': 'GET', //the way you want to send data to your URL
                'data': {'pat_id': pat_id },
                'success': function(data) { 
                    var container = $(".p_id");
                    if(data==0){
                        container.html("<div class='alert alert-success'><span class='glyphicon glyphicon-ok'></span> <?php echo display('patient_id_msg')?></div>");
                        $('input[type=submit]').prop('disabled', false);
                    }else{ 
                        container.html(data);
                        $('input[type=submit]').prop('disabled', true);
                    }
                }
            });
        };
    }
</script>


        <!-- custom ajax jquery -->
       <script type="text/javascript">

       // validation
           function validateForm() {
            var patient_id = document.forms["app_form"]["patient_id"].value;
            var date = document.forms["app_form"]["date"].value;
            var sequence = document.forms["app_form"]["sequence"].value;
            var venue_id = document.forms["app_form"]["venue_id"].value;
            if (patient_id && date && sequence && venue_id == null || patient_id && date && sequence && venue_id  == "") {
                alert("Fild must be filled out");
                return false;
            }
        }

        // load patient name
        function loadName(){          
           var patient_id = $('#patient_id').val();
            if (patient_id!='') {
                $('input[type=submit]').prop('disabled', true);
                $.ajax({ 
                    'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_patinet_name/'+patient_id.trim(),
                    'type': 'GET', //the way you want to send data to your URL
                    'data': {'patient_id': patient_id },
                    'success': function(data) { 
                        var container = $(".p_name");
                        if(data==0){
                            container.html("<?php echo display('patient_name_load_msg')?>");
                        }else{ 
                            container.html(data);
                            $('input[type=submit]').prop('disabled', false);
                        }
                    }
                });
            };
        }

        // load load schedul
        function loadSchedul(){
            
            var venue_id = $('#venue_id').val();
            var date     = $('.datepicker3').val();
            
            if (venue_id!='') {
                $.ajax({ 
                    'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_schedul/'+venue_id+'/'+date,
                    'type': 'GET', //the way you want to send data to your URL
                    'data': {'patient_id': venue_id },
                    'success': function(data) {
                        var container = $(".schedul1");
                        container.html(data);
                    }
                    });
                };
        } 

            // myBooking sequence
            function myBooking(data){
               var id = $("#t_" + data).text();
               document.getElementById("msg_c").innerHTML = "<div style=' color:green; font-size:20px;'> <?php echo display('book_sequence')?> " +id +" </div>";
               document.getElementById('serial_no').value = id;        
            } 

            // load slider
            function view_slider(id){ 
                $.ajax({
                    url : "<?php echo site_url('Welcome/slider_by_id/')?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                        $('#title').html(data.heading);
                        $('#details').html(data.details);
                        $('#pic').html('<img src="' + data.picture + '" class="img-responsive" />');
                        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                      
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }

            function view_post(id)
            {
                //Ajax Load data from ajax
                $.ajax({
                    url : "<?php echo site_url('Welcome/post_by_id/')?>" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                        $('#title').html(data.title);
                        $('#details').html(data.details);
                        $('#pic').html('<img src="' + data.picture + '" />');
                        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                      
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }

        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });


            
       </script>

            <!-- Bootstrap modal -->
            <div class="modal fade" id="modal_form" role="dialog">
                <div class="modal-dialog" >
                      <!-- Modal content-->
                    <div class="modal-content" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title" id="title"></h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-img col-sm-6" id="pic"></div>
                                    <div class="post-data" id="details"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo display('close');?></button>
                        </div>
                    </div>
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

    </body>
</html>
                  