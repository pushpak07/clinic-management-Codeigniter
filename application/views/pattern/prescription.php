<?php
    $phone = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','phone')
            ->get()
            ->row();

        $email = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','email')
            ->get()
            ->row();  
        $timezone = $this->db->select('*')
            ->from('web_pages_tbl')
            ->where('name','timezone')
            ->get()
            ->row();           
    date_default_timezone_set(@$timezone->details);
?>


<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> Prescription </title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>extra/prescription/css/bootstrap.min.css" rel="stylesheet">
        <!-- flaticon -->
        <link href="<?php echo base_url();?>extra/prescription/css/flaticon.css" rel="stylesheet">
        <!-- font-awesome -->
        <link href="<?php echo base_url();?>extra/prescription/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- style -->
        <link href="<?php echo base_url();?>extra/prescription/css/style.css" rel="stylesheet">
        <!--gogole fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,800italic,600,400italic,300italic,600italic,700italic,300|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Raleway:400,100,100italic,200,300,200italic,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>extra/prescription/js/bootstrap.min.js"></script>
 
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







    </body>
</html>