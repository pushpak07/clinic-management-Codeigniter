<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo (!empty($info->website_title->details)?$info->website_title->details:null); ?></title>
        <link rel="icon" href="<?php echo (!empty($info->fabicon->picture)?$info->fabicon->picture:null); ?>" sizes="16x16">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
          <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- flaticon -->
        <link href="<?php echo base_url(); ?>assets/public_css/css/flaticon.css" rel="stylesheet">
        <!-- font-awesome -->
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- style -->
        <link href="<?php echo base_url(); ?>assets/public_css/style2.css" rel="stylesheet">
    

</head>  

<body>



 <div id="div1">

     <div class="container" >
          <div class="row top-bar">
              <div class="left-text pull-left">
                  <p><?php echo date("Y-m-d h:i:s");?></p>
              </div>  
          </div>
      </div>
		
	
      <div class="container header" style="background-color:#ffffff;" >
        <div style="">
              <a href="<?php echo base_url();?>"><img style="height:50px; max-height:100px; " src="<?php echo (!empty($info->logo->picture)?$info->logo->picture:null); ?>" ></a>
        </div>
      </div>

		
				<div class="container" style="font-size: 20px; color: red;" >
          <p>Sorry!</p>
          <p>We did not recive your payment. It's may be error or thre is not enough money of your account.</p>
        </div>
		

			<div class="container inners">
			

         <div style="float: right; margin-top: 20px ">
         Pay with paypal
              <a target="_blank" href="<?php echo base_url();?>">
              <img style="height:50px; max-height:100px; " src="<?php echo base_url()?>assets/images/paypal.png" class="img-responsive" style="text-align:top;" alt=""></a>
        </div>
			</div> 
		</div>
		
	</body>
</html>