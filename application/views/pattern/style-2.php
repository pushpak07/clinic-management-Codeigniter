<style type="text/css" rel="print">


@media print {
    a[href], 
    a[href]:after,
    a[href]:before, 
    .no-print{content:"" !important;display:none !important;visibility:hidden !important;}
}
.container{
  background: #fff;
  width: 800px;
}

/*------------------------*/
/*header area*/
/*----------------------*/
.main-header-2{
  width: <?php echo $pattern->header_width; ?>px;
  height: <?php echo $pattern->header_height; ?>px;
}

.header_area-2{
  border-top: 7px solid #186AAB;
  border-bottom: 7px double #EAEAEA;
  padding: 10px;
  background-color: #186AAB;
  color: #fff;
  width: <?php echo $pattern->header_width; ?>px;
}


.patient_area-2{
  border-top: 7px double #EAEAEA;
  border-bottom: 2px solid #EAEAEA;
  width: <?php echo $pattern->header_width; ?>px;
}
/*----------------------------*/


/*----------------------------*/
.left-side-2{
  float: left;
  border-top: 1px solid #EAEAEA;
  width: <?php echo $pattern->content_width_1;?>px;
  min-height: <?php echo $pattern->content_height_1;?>px;
  padding: 10px;
}

.test-list ul li {
  list-style: none;
  font-size: 15px;
  color: #000;
  line-height: 25px;
  margin-left: -40px;
   
}

.left1-2{
  width: 45%;
  float: left;
}
.left2-2{
  float: right;
  width: 45%;
}

/*----------------------------*/


/*----------------------------*/
.right-side-2{
  border-top:1px solid #EAEAEA;
  float: left;
  width: <?php echo $pattern->content_width_2;?>px;
  min-height: <?php echo $pattern->content_height_2;?>px;
  margin-top:5px;
  text-align: center;

}

#link{
  margin-top: 50px;
}
#signature{
  border-top: 2px dashed rgb(0, 0, 0);
  margin-top: 50px;
  text-align: center;
}

/*-----------------------------------*/

.footer-2{
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
/*============================= prescription pages ============================ */ 

li{
  font-size: 13px;
  list-style: none;
  line-height: 18px;
}
</style>