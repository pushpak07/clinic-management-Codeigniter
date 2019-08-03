<!DOCTYPE html>
    <html lang="en">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title> Generic </title>
            <!-- Bootstrap -->
           <link href="<?php echo base_url(); ?>public/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
            <!-- style -->
            <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            
            <style type="text/css">
                body{
                    font-family: 'Poppins', sans-serif;
                    background-color: #E0ECEA;
                }
            </style>

            <?php require 'style-default.php';?>
            <?php require 'style-1.php';?>
            <?php require 'style-2.php';?>


            <script type="text/javascript">
                function printContent(el){
                    var restorepage = document.body.innerHTML;
                    var printcontent = document.getElementById(el).innerHTML;
                    document.body.innerHTML = printcontent;
                    window.print();
                    document.body.innerHTML = restorepage;
                }

                $(document).ready(function(){

                    $('#others').hide();
                    $('#pad_p').hide();

                    $("#pad").click(function(){
                        $('#div1').hide();
                        $('#dif_p').hide();
                        $('#others').show();
                        $('#pad_p').show();
                    });

                    $("#dif").click(function(){
                        $('#div1').show();
                        $('#dif_p').show();
                        $('#others').hide();
                        $('#pad_p').hide();
                    });
                })
            </script>
    </head>

    <body>
        <div class="container">
            <div id="default">
                <?php echo @$default;?>
            </div>

            <div id="others">
                <?php if(@$others!=NULL){
                    echo @$others;
                    }else{
                        echo "<div class='alert alert-danger'>There have no setup print pattern.</div>";
                    }
                ?>
            </div>
        </div>
     </body>
</html>

