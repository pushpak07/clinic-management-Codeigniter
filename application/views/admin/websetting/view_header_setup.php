
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('web_setting');?></h1>
            <small><?php echo display('web_setting');?></small>
           <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
              <div class="row">
        <!--  form area-->
        <div class="col-sm-12">
          <?php
          $msg = $this->session->flashdata('message');
              if($msg !=''){
                  echo $msg;
              }
              if($this->session->flashdata('exception')!=""){
                 echo $this->session->flashdata('exception');
            }
          ?>
            <div class="panel panel-bd panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                             
                            $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                            echo form_open_multipart('admin/Web_setup_controller/save_header', $attributes);                
                         ?>
                         
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('phone_number');?></label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->phone->details)?$info->phone->details:null); ?>" name="phone" class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('email');?></label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->email->details)?$info->email->details:null); ?>" name="email" class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('address');?> </label>
                                   <div class="col-md-8">
                                   <textarea class="form-control" name="address" rows="3" cols="4">
                                       <?php echo (!empty($info->address->details)?$info->address->details:null); ?>
                                   </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('time_zone_setup');?> :</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="timezone">
                                            <option value="">--<?php echo display('time_setup');?>--</option>
                                            <?php 
                                                $zones = timezone_identifiers_list();
                                                $i = 0;
                                                foreach($zones as $name){
                                                    echo'<option '.($name==$info->timezone->details?'selected':'').' value="'.$name.'">'.$name.'</option>'; 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <span> Social link</span>
                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('facebook_link');?></label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->facebook->details)?$info->facebook->details:null); ?>" name="facebook"  class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('twitter_link');?></label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->twitter->details)?$info->twitter->details:null); ?>" name="twitter"  class="form-control"> 
                                    </div>
                                </div>


                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('youtube_link');?></label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->youtube->details)?$info->youtube->details:null); ?>" name="youtube"  class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('linkedin_link');?></label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->linkedin->details)?$info->linkedin->details:null); ?>" name="linkedin"  class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('google_link');?></label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->google->details)?$info->google->details:null); ?>" name="google"  class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label">Youtube Chanel id </label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->youtube_chanel_id->details)?$info->youtube_chanel_id->details:null); ?>" name="youtube_chanel_id"  class="form-control"> 
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('working_description');?></label>
                                   <div class="col-md-8">
                                   <textarea class="form-control" id="summernote" name="working_des" rows="3" cols="4">
                                       <?php echo (!empty($info->working_des->details)?$info->working_des->details:null); ?>
                                   </textarea>
                                    </div>
                                </div>

                                 <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('hotline');?></label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->hotline->details)?$info->hotline->details:null); ?>" name="hotline"  class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('copy_right');?></label>
                                   <div class="col-md-8">
                                      <textarea name="copy_right"  class="form-control"><?php echo (!empty($info->copy_right->details)?$info->copy_right->details:null); ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('logo');?> </label>
                                    <div class="col-md-8">
                                        <img src="<?php echo (!empty($info->logo->picture)?$info->logo->picture:null); ?>">
                                        <input type="file" name="picture">       
                                        <input type="hidden" name="pic" value="<?php echo (!empty($info->logo->picture)?$info->logo->picture:null); ?>">      
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('footer_logo');?> </label>
                                    <div class="col-md-8">
                                        <img src="<?php echo (!empty($info->footer_picture->picture)?$info->footer_picture->picture:null); ?>" width="100">
                                        <input type="file" name="footer_picture">       
                                        <input type="hidden" name="footer_pic" value="<?php echo (!empty($info->footer_picture->picture)?$info->footer_picture->picture:null); ?>">      
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('favicon');?> </label>
                                    <div class="col-md-8">
                                        <img width="50" src="<?php echo (!empty($info->fabicon->picture)?$info->fabicon->picture:null); ?>">
                                        <input type="file" name="fabicon">       
                                        <input type="hidden" name="fabicon_pic" value="<?php echo (!empty($info->fabicon->picture)?$info->fabicon->picture:null); ?>">      
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('website_title');?> </label>
                                    <div class="col-md-8">
                                            
                                        <input type="text" class="form-control" name="website_title" value="<?php echo (!empty($info->website_title->details)?$info->website_title->details:null); ?>">      
                                    </div>
                                </div>

                                

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('appointment_image');?></label>
                                    <div class="col-md-8">
                                        <img width="100" src="<?php echo (!empty($info->app_image->picture)?$info->app_image->picture:null); ?>">
                                        <input type="file" name="app_img">       
                                        <input type="hidden" name="app_pic" value="<?php echo (!empty($info->app_image->picture)?$info->app_image->picture:null); ?>">      
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('about_image');?></label>
                                    <div class="col-md-8">
                                        <img width="100" src="<?php echo (!empty($info->about_img->picture)?$info->about_img->picture:null); ?>">
                                        <input type="file" name="about_img">       
                                        <input type="hidden" name="about_pic" value="<?php echo (!empty($info->about_img->picture)?$info->about_img->picture:null); ?>">      
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('google_map');?></label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="google_map" rows="3" cols="4">
                                           <?php echo (!empty($info->google_map->details)?$info->google_map->details:null); ?>
                                       </textarea>     
                                    </div>
                                </div>


                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('total_appointment_details');?> </label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->total_appointment_details->details)?$info->total_appointment_details->details:null); ?>" name="total_appoin"  class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('today_appointment_details');?> </label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->today_appointment_details->details)?$info->today_appointment_details->details:null); ?>" name="today_appoin"  class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('total_patient_details');?> </label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->total_patient_details->details)?$info->total_patient_details->details:null); ?>" name="tota_patient"  class="form-control"> 
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('twitter_post');?></label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="twitter_post" rows="3" cols="4">
                                           <?php echo (!empty($info->twitter_post->details)?$info->twitter_post->details:null); ?>
                                       </textarea>     
                                    </div>
                                </div>

                            </div>

                              <div class="form-group row">
                                  <div class="col-sm-offset-3 col-sm-6">
                                          <button type="reset" class="btn btn-danger"><?php echo display('reset');?></button>
                                          
                                          <button type="submit" class="btn btn-success"><?php echo display('submit');?></button>
                                   
                                  </div>
                              </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    </section>
</div>



