<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('web_site_enable_disable');?></h1>
            <small><?php echo display('web_site_enable_disable');?></small>
            <ol class="breadcrumb">
               
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
          <!--  form area -->
        <div class="col-sm-12">
            <div class="panel panel-bd">
                <div class="panel-heading ">
                    <div class="panel-title" style="max-width: calc(100% - 180px);">
                        <h4></h4>
                    </div>
               </div>
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                            $msg = $this->session->flashdata('message');
                              if($msg !=''){
                                  echo $msg;
                              }
                              
                           ?>
                      <form class="form-horizontal">
                        <?php if (@$info->details=='on') {?>
                              <div class="form-body">
                                    <p><?php echo display('website_desable_msg');?></p>
                                    <a class="btn btn-lg btn-danger" href="<?php echo base_url();?>admin/Web_setup_controller/save_off"> <?php echo display('website_desable');?></a>
                              </div>
                              <?php } else{ ?>

                               <div class="form-body">
                                   <p><?php echo display('website_enable_msg');?></p>
                                    <a class="btn btn-lg btn-success" href="<?php echo base_url();?>admin/Web_setup_controller/save_on"> <?php echo display('website_enable');?></a>
                              </div>
                              <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
          <div class="panel panel-bd">   
            <div class="panel-heading ">
                <div class="panel-title" style="">
                    <h2><?php echo display('html_code_title');?> </h2>
                    <p><?php echo display('html_code_description');?></p>
                </div>
            </div>
            <div class="breadcrumbs ng-scope">
                
                  <?php 
                   $api_iframe = '<iframe id="sframe" src="'.base_url().'api" width="100%" height="800" marginwidth="0"marginheight="0" frameborder="0" scrolling="no" ></iframe>'; 
                  ?>

                  <div class="form-group">
                      <textarea class="form-control" name="problem"  id="problem" placeholder="Write your problem" maxlength="140" rows="7">
                        <?php echo $api_iframe;?>
                      </textarea>         
                  </div>
            </div>
            </div>
        </div>

         <div class="col-sm-6">
            <div class="panel panel-bd">
                <div class="panel-heading ">
                    <div class="panel-title">
                        <h2><?php echo display('js_code_title');?></h2>
                        <p><?php echo display('js_code_description');?></p>
                    </div>
               </div>
                  <?php 
                  $a ='<script type="text/javascript">';
                  $b = "var sfrm = document.createElement('iframe');
                  sfrm.setAttribute('id', 'sframe'); 
                  sfrm.setAttribute('src', '".base_url()."'Api); 
                  sfrm.setAttribute('width', '100%');
                  sfrm.setAttribute('height', '800px');
                  sfrm.setAttribute('frameborder', '0');
                  sfrm.setAttribute('scrolling', 'no');";
                  $c="document.write('<div id=".'"s384gh4r"'."></div>');";
                  $d="document.getElementById('s384gh4r').appendChild(sfrm);</script>"; 
                  ?>
                  <div class="form-group">
                      <textarea class="form-control" name="problem"  id="problem" placeholder="Write your problem" maxlength="140" rows="7">
                        <?php echo $a.$b.$c.$d;?>
                      </textarea>         
                  </div>
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="panel panel-bd">   
            <div class="panel-heading ">
                <div class="panel-title" style="">
                   <h2><?php echo display('use_thirt_parti_api');?> </h2>
                </div>
            </div>
                  <?php 
                  //query for logo 
                    $result = $this->db->select('*')->from('web_pages_tbl')->where('name','third_party_api')->where('status',1)->get()->row();
                  ?>
            <?php 
              $attributes = array('method'=>'post','role'=>'form');
              echo form_open_multipart('admin/Web_setup_controller/save_api', $attributes);
             ?>
                  <div class="form-group">
                      <textarea class="form-control" name="thard_parti_api"  rows="7">
                          <?php echo (!empty($result->details)?$result->details:null); ?>
                      </textarea>         
                  </div>
                  <input type="submit" value="Save" class="btn btn-lg btn-success">
                  <a href="<?php echo base_url()?>admin/Web_setup_controller/remove_api" class="btn btn-lg btn-danger full-right"> <?php echo display('reset');?></a>
              <?php echo form_close();?>
            </div>
        </div>

        <div class="col-sm-6">
           <div class="panel panel-bd">   
            <div class="panel-heading ">
                <div class="panel-title" style="">
                  <h2> <?php echo display('therd_parti_api_preview');?></h2><p></p>
                </div>
            </div>
                <div class="form-group">
                 <?php echo (!empty($result->details)?$result->details:null); ?>
                </div>
            </div>
        </div>
    </div>            
    </section>
</div>




