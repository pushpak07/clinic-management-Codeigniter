<style type="text/css" rel="print">

  @media print {
      a[href], 
      a[href]:after,
      a[href]:before, 
      .no-print{content:"" !important;display:none !important;visibility:hidden !important;}
  }

    
body{
    font-family: 'Poppins', sans-serif;
    background-color: #E0ECEA;
}

.container{
  background: #fff;
  width: 800px;
}

/*------------------------*/
/*header area*/
/*----------------------*/
.main-header{
  width: <?php echo $pattern->header_width; ?>px;
  height: <?php echo $pattern->header_height; ?>px;
}

.header_area{
  border-top: 7px solid #186AAB;
  border-bottom: 7px double #EAEAEA;
  padding: 10px;
  background-color: #186AAB;
  color: #fff;
  width: <?php echo $pattern->header_width; ?>px;
}


.patient_area{
  border-top: 7px double #EAEAEA;
  border-bottom: 2px solid #EAEAEA;
  width: <?php echo $pattern->header_width; ?>px;
}
.patient_area1{
  border-top: 1px solid  #EAEAEA;
  border-bottom: 2px solid #EAEAEA;
  width: <?php echo $pattern->header_width; ?>px;
}
/*----------------------------*/


/*----------------------------*/
.left-side{
  border:1px solid #EAEAEA;
  float: left;
  width: <?php echo $pattern->content_width_1;?>px;
  min-height: <?php echo $pattern->content_height_1;?>px;
  line-height: 0px;
}

.left-side h4{
  font-weight: bold;
  font-size: 16px;
}

.test-list ul li {
  list-style: none;
  font-size: 14px;
  color: #000;
  line-height: 7px;
  margin-left: -40px;   
}



/*----------------------------*/


/*----------------------------*/
.right-side{
  /*border:1px solid #EAEAEA;*/
  float: left;
  width: <?php echo $pattern->content_width_2;?>px;
  min-height: <?php echo $pattern->content_height_2;?>px;
  margin-top:5px;
}

/*-----------------------------------*/
.main-footer{
  border-top: 1px solid #ddd;
}
.footer{
  padding: 10px;
  border-top:5px solid #EAEAEA; 
  width: <?php echo $pattern->footer_width;?>px;
  height: <?php echo $pattern->footer_height;?>px;
}

.f1{
  float: left;
  width: 55%;
}
.f2{
  float: right;
  width: 45%;
}
/*--------------------------------*/
li { font-size: 16px;}
.social-icons ul, .social-icons ul li {
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-block;
    background: #074C83;
}

.social-icons ul li a {
    display: inline-block;
    font-size: 15px;
    color: #fff;
    line-height: 40px;
    text-align: center;
    padding: 0 12px;
    margin-left: -5px;
    transition: all .3s ease;
}
#link{
  margin-top: 50px;
}
#signature{
  border-top: 2px dashed rgb(0, 0, 0);
  margin-top: 50px;
  text-align: center;
}
/*============================= prescription pages ============================ */ 


li{
  font-size: 13px;
  list-style: none;
  line-height: 18px;
}
</style>