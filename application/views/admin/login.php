<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo display('login');?></title>

      <?php 
            //query for logo 
            $result = $this->db->select('*')->from('web_pages_tbl')->where('name','fabicon')->where('status',1)->get()->row();
        ?>
        <!-- favicon -->
        <link rel="icon" href="<?php echo (!empty($result->picture)?$result->picture:null); ?>" sizes="16x16"> 
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!-- <link href="<?php echo base_url();?>assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/> -->
        <!-- Pe-icon-7-stroke -->
        <link href="<?php echo base_url();?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="<?php echo base_url();?>assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!-- <link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/> -->
        
         <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>

    </head>


    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
     
            <div class="container-center">
                <div class="panel panel-bd">

                 <?php 
                        $exception = $this->session->flashdata('exception');
                        if(!empty($exception)){
                                 echo '<div class="alert alert-danger">
                                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>WOPS!</strong> '.$exception.'
                              </div>';
                        }
                    ?>

                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong><?php echo display('login_title');?></strong></small>
                            </div>
                        </div>
                    </div>
                   
                    <?php 
                        $result = $this->db->select('*')->from('web_pages_tbl')->where('name','footer_logo')->where('status',1)->get()->row();
                    ?>

                    <div class="panel-body">
                        <?php
                            $attributes = array('method'=>'post','role'=>'form');
                            echo form_open_multipart('authentication', $attributes); 
                        ?>

                                <div class="form-group">
                                    <input class="form-control" id="eml" placeholder="<?php echo display('email');?>" name="email" type="email" autofocus required />
                                    <span><?php echo form_error('email');?></span>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" id="pass" placeholder="<?php echo display('password');?>" name="password" type="password" required />
                                     <span><?php echo form_error('password');?></span>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="type" required>
                                        <option value="">Select One</option>
                                        <option value="1">Admin</option>
                                        <option value="2"><?php echo display('Doctor');?></option>
                                        <option value="3"> User</option>
                                    </select>
                                     <span><?php echo form_error('type');?></span>
                                </div>

                                <div class=" form-group">
                                    <input name="remember" type="checkbox"> <?php echo display('remember_me')?>
                                </div>

                                <button type="submit" class="btn btn-lg btn-success btn-block"> <?php echo display('login');?></button>
                                
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
       
        <!-- bootstrap js -->
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>