
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Invoice Setup</h1>
            <small>Invoice Setup</small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
            $msg = $this->session->flashdata('message');
            if($msg){
                echo $msg;
            } 
        ?>

    <div class="row">

<div class="col-sm-12">
    <div  class="panel panel-default panel-form">
         

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 table-responsive">
                        <?php echo form_open('admin/Invoice/save_invoice',array('name'=>'invo'));?>
 
                        <table class="table table-striped">
                            <tfoot>
                                <tr>  
                                    <th width="40%">
                                        <ul class="list-unstyled"> 
                                            <li>
                                                <strong>Patient phone</strong>
                                                <input required="" autocomplete="off" name="phone" id="phone" class="invoice-input" type="text">
                                                <p class="text-center text-danger  invlid_patient_id">Patient Phone</p>
                                            </li>   
                                            <li><strong>Full Name</strong>
                                                <input class="invoice-input" id="patient_name" type="text">
                                            </li>  
                                            <li> 
                                            <strong>Address&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                <input class="invoice-input" id="patient_address" type="text">
                                            </li>  
                                            <input type="hidden" name="patient_id" id="patient_id" value="">
                                        </ul>
                                    </th> 

                                    <th class="text-center" width="20%"> 
                                        <strong style="border:1px solid #ccc;line-height:60px;padding:5px 10px;">Invoice</strong> 
                                    </th>  

                                    <th width="40%">
                                        <h4>
                                            Date :  
                                            <input name="date" required="" value="" class="datepicker1" id="" type="text"><br> 
                                            
                                        </h4>
                                    </th> 
                                </tr>
                            </tfoot>
                        </table>
                        <table id="invoice" class="table table-striped"> 
                            <thead>

                                <tr class="bg-primary">
                                    <th></th>
                                    <th></th>
                                    <th>Doctor Name</th>
                                    <th>Payment notes</th>
                                    <th width="120">Fee</th> 
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2"> </td>
                                    <td>
                                        <select name="doctor_id" class=" form-control" required="">
                                        <option value="" >Select Doctor</option>
                                        <?php foreach($doctor as $value){?>
                                        <option value="<?php echo $value->doctor_id?>"><?php echo $value->doctor_name?></option>
                                        <?php }?>
                                        </select>
                                    </td> 

                                    <td><textarea name="payment_notes" class="form-control" placeholder="Payment Notes"></textarea></td> 

                                    <td><input name="fee" required="" autocomplete="off" id="fee" name="doctor_fee" class="form-control" placeholder="Fee" type="text"></td>  
                                    
                                    
                                </tr>  
                            </tbody>
                            <tfoot> 
                               
                                <tr>  

                                    <th colspan="3" class="text-right">
                                        <select name="payment_method" class=" form-control" required="">
                                        <option value="" >Select Payment Method</option>
                                            <option value="visa_card">Visa Card</option>
                                            <option value="msater_card">Master Card</option>
                                            <option value="paypal">Paypal </option>
                                        </select>
                                    </th> 

                                    <td>
                                        <div class="input-group">
                                          <div class="input-group-addon"> Vat %</div>
                                          <input id="vatParcent" required="" name="m_tax" autocomplete="off" class="form-control" value="0" type="text">
                                        </div>
                                    </td> 
                                    <td><input name="vat" id="vat" required="" autocomplete="off" class="vatDiscount paidDue form-control" placeholder="Vat" value="0.00" type="text"></td>  
                                    <td></td> 
                                </tr>


                                <tr>  
                                    <th colspan="3" class="text-right">
                                    <textarea name="payment_method_notes" class="form-control" placeholder="Payment method Notes"></textarea>
                                    </th> 
                                    <td>
                                        <div class="input-group">
                                          <div class="input-group-addon">Discount %</div>
                                          <input id="discountParcent" name="m_discount" required="" autocomplete="off" class=" form-control" value="0" type="text">
                                        </div>
                                    </td> 

                                    <td><input name="discount" required="" autocomplete="off" id="discount" class="vatDiscount paidDue form-control" placeholder="Discount" value="0.00" type="text"></td> 
                                    <td></td>  
                                </tr> 
                                <tr class="bg-success">  
                                    <td colspan="3"></td>  
                                    <th class="text-right">Grand Total</th>  
                                    <th><input name="grand_total" readonly="" required="" autocomplete="off" id="grand_total" class="paidDue form-control" placeholder="Grand Total" value="0.00" type="text"></th> 
                                    <td></td>  
                                </tr>
                                <tr>  
                                    <td colspan="3"></td>  
                                    <th class="text-right">Paid</th>
                                    <td><input name="paid" id="paid" autocomplete="off" class="paidDue form-control" required="" placeholder="Paid" value="0.00" type="text"></td> 
                                    <td></td>  
                                </tr>
                                <tr class="bg-danger">  
                                    <td colspan="3"></td>  
                                    <th class="text-right">Due</th> 
                                    <td><input name="due" id="due" autocomplete="off" class="paidDue form-control" required="" placeholder="Due" value="0.00" type="text"></td> 
                                    <td></td>  
                                </tr>
                                <tr>  
                                    <td colspan="3">
                                        
                                    </td>  
                                    <td><button type="reset" class="btn btn-info btn-block">Reset</button></td>  
                                    <td><button class="btn btn-success btn-block">Save</button></td>  
                                    <td></td> 
                                </tr>
                            </tfoot>
                        </table>  
                    </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
        </div>
    </div>            
    </section>
</div>



<script type="text/javascript">
$(document).ready(function() {   

   

    //#------------------------------------
    //   STARTS OF CALCULATION 
    //#------------------------------------


   

    // vat in parcent
    $('body').on('keyup change', '#vatParcent', function() {

        var total       = $('#fee').val(); 
        $('#vat').val(parseFloat((total * $(this).val()) / 100).toFixed(2)); 
        // vat in parcent
        var vat         = $('#vat').val();
        var discount    = $('#discount').val(); 

        $("#grand_total").val(((parseFloat(total)+parseFloat(vat))-(parseFloat(discount))).toFixed(2));

        // paid and due
        var grand_total = $('#grand_total').val();
        var paid        = $('#paid').val();
        $('#due').val((parseFloat(grand_total)-parseFloat(paid)).toFixed(2)); 
    });

    // discount in parcent
    $('body').on('keyup change', '#discountParcent', function() {
        var total      = $('#fee').val(); 
        $('#discount').val(parseFloat((total * $(this).val()) / 100).toFixed(2)); 

        // vat in parcent
        var vat         = $('#vat').val();
        var discount    = $('#discount').val(); 
        $("#grand_total").val(((parseFloat(total)+parseFloat(vat))-(parseFloat(discount))).toFixed(2));

        // paid and due
        var grand_total = $('#grand_total').val();
        var paid        = $('#paid').val();
        $('#due').val((parseFloat(grand_total)-parseFloat(paid)).toFixed(2));  
    });

    // paid and due
    $('body').on('keyup change', '.paidDue', function() {
        var grand_total = $('#grand_total').val();
        var paid        = $('#paid').val();
        $('#due').val((parseFloat(grand_total)-parseFloat(paid)).toFixed(2)); 
    }); 
 


    //#------------------------------------
    //   PATIENT INFORMATION
    //#------------------------------------

    $('body').on('keyup change', '#phone', function() {
        var phone = $(this).val();

        if(phone.length > 0)
        $.ajax({

            'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/load_patient_info/'+phone,
            'type': 'GET',
            'dataType': 'JSON',
            'success': function(data){ 

                if (data.patient_id) { 
                    $('#patient_name').val(data.family_name);
                    $('#patient_address').val(data.address);
                    $('#patient_id').val(data.patient_id);
                    $(".invlid_patient_id").text(' Patient Pnone Number');
                } else {
                    $(".invlid_patient_id").text('Invalid Patient Phone Number');
                }
            }, error   : function() {
                alert('failed!');
            } 
           
        });
    });

});

 

/*-----------------------------------------------*/
/*   LOAD VAT/DISCOUNT PERCENT AUTOMATICALLY     */
/*-----------------------------------------------*/

$(window).on('load', function() {
    var total       = $('#total').val();
    var vat         = $('#vat').val();
    var discount    = $('#discount').val(); 
    $("#grand_total").val(((parseFloat(total)+parseFloat(vat))-(parseFloat(discount))).toFixed(2)); 
    //$("#vatParcent").val(parseFloat((vat/total) * 100).toFixed(2)); 
    //$("#discountParcent").val(parseFloat((discount/total) * 100).toFixed(2)); 
});
</script>



