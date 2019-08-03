
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">

        <title>Codeigniter Application</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- custom css  -->
        <link rel="stylesheet" href="assets/css/style.css"> 

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- begin of container -->
        <div class="container"> 

                <div class="row">
                 <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1"> 
                    <div class="app_title"> 
                        <h1><img src="assets/img/icon.png" alt="logo"> Please Wait ten seconds</h1>
                    </div>
                    <div class="app_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <strong><h2>Application is updating.................. </h2></strong>
                                </div>

                                <div class="divider"></div>

                                <h3 class="text-center" id="btn-before">&nbsp;</h3>
                                <div class="text-center hide" id="btn-complete">
                                    <a href="http://demonewspaper.bdtask.com/DemoNewsPaper365/" class="btn cbtn">Click to launch your application </a>
                                </div>

                            </div>
                        </div>
                    </div> 
                    <div class="app_footer"> 
                        <h3>Developed by bdtask</h3>
                    </div>
                </div>
               </div>
                <!-- ends of step3 -->
                </div>
            </div>

             <!-- start of javascript  -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            var wait = 11000; //10 second

            var time = 10;
            setInterval(function(){
             $("#btn-before").html("You need to wait "+time+" second before you can proceed");
             time--;
            }, 1000);

            setTimeout(function() {
                $("#btn-before").addClass('hide');
                $("#btn-complete").removeClass('hide');
            }, wait);

        });
        </script>
        
    </body>
</html>