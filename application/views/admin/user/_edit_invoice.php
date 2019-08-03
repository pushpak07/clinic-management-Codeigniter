
<!-- Invoice js -->
<script src="<?php echo base_url()?>assets/my-assets/service.js.php" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/my-assets/invoice.js" type="text/javascript"></script>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>

        <div class="header-title">
            <h1><?php echo display('edit_invoice')?></h1>
            <small><?php echo display('edit_invoice')?></small>
        </div>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
        <?php
            $msg = $this->session->flashdata('message');
            if($msg){
                echo $msg;
            } 
        ?>
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('edit_invoice')?></h4>
                        </div>
                    </div>

                    <?php 
                    $att = array('name'=>'insert_invoice','class'=>'form-vertical','id'=>'insert_invoice');
                    echo form_open('admin/user/Invoice/update_invoice',$att);
                    ?>

                    <div class="panel-body">
                    <input type="hidden" value="<?php echo $invo->invoice_id;?>" name="invoice_id">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-5"><?php echo display('phone_number')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <input required="" autocomplete="off" value="<?php echo $invo->patient_phone;?>" name="phone" id="phone" class="form-control" type="text">
                                        <span id="csc" class="text-center invlid_patient_id"><?php echo display('phone_number')?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-5"><?php echo display('patient_name')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <input required="" value="<?php echo $invo->family_name;?>" name="patient_name" id="patient_name" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-5"><?php echo display('address')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <input required="" name="address" id="address" value="<?php echo $invo->address;?>" class="form-control" type="text">
                                    </div>
                                </div>

                                <input type="hidden" value="<?php echo $invo->patient_id;?>" name="patient_id" id="patient_id">

                            </div>
                          
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('date')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                           <input class="form-control" size="50" name="date" id="date" required="" value="<?php echo $invo->date_time;?>" type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('doctor')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="doctor_id" class=" form-control" required="">
                                        <option value="" >Select Doctor</option>
                                        <?php foreach($doctor as $value){?>
                                        <option value="<?php echo $value->doctor_id?>"><?php echo $value->doctor_name?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('service_info')?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('quantity')?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('price')?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('discount')?> </th>
                                        <th class="text-center"><?php echo display('total')?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('action')?></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">

                                <?php 
                                    $i=1;
                                    foreach($invo_product as $value){
                                ?>

                                    <tr>
                                    <input type="hidden" name="inv_p_id[]" value="<?php echo @$value->inv_p_id;?>">
                                        
                                        <td>
                                            <input name="product_name" value="<?php echo $value->service_name;?>" onkeypress="invoice_productList(<?php echo $i?>);" class="form-control productSelection" placeholder="Service Name" required="" id="product_name" type="text">
                                            <input class="autocomplete_hidden_value product_id_1" value="<?php echo @$value->product_id;?>" name="product_id[]" id="SchoolHiddenId" type="hidden">
                                            <input class="baseUrl" value="<?php echo base_url();?>" type="hidden">
                                        </td>
                        
                                        <td>
                                            <input name="product_quantity[]" onkeyup="quantity_calculate(<?php echo $i?>);" id="total_qntt_<?php echo $i;?>" class="form-control text-right" value="<?php echo $value->quantity;?>" min="1" type="number">
                                        </td>

                                        <td>
                                            <input name="product_rate[]" readonly="" value="<?php echo $value->price;?>" id="price_item_<?php echo $i;?>" class="price_item1 form-control text-right" type="text">
                                        </td>

                                        <!-- Discount -->
                                        <td>
                                            <input name="discount[]" onkeyup="quantity_calculate(<?php echo $i?>);" id="discount_<?php echo $i;?>" class="form-control text-right" placeholder="Discount" value="<?php echo $value->discount;?>" min="0" type="number">
                                        </td>
                                       
                                        <td>
                                            <input class="total_price form-control text-right" name="total_price[]" id="total_price_<?php echo $i;?>" value="<?php echo $value->grand_price;?>" tabindex="-1" readonly="readonly" type="text">
                                        </td>

                                         <td>
                                            <!-- Tax calculate start-->
                                            <input id="total_tax_<?php echo $i;?>" class="total_tax_1" value="<?php echo $value->tax;?>" type="hidden">
                                            <input id="all_tax_<?php echo $i;?>" class="total_tax" value="<?php echo $value->tax;?>" type="hidden">
                                            <!-- Tax calculate end -->
                                            <button style="text-align: right;" class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)"><?php echo display('delete')?></button>
                                        </td>

                                    </tr>

                                    <?php 
                                    $i++;
                                    }
                                     ?>

                                <tfoot>

                                    <tr>
                                        <td style="text-align:right;" colspan="4"><b><?php echo display('total_tax')?>:</b></td>
                                        <td class="text-right">
                                            <input id="total_tax_ammount" tabindex="-1" class="form-control text-right" name="total_tax" value="<?php echo $invo->total_tax;?>" readonly="readonly" type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4" style="text-align:right;"><b><?php echo display('grand_total')?>:</b></td>
                                        <td class="text-right">
                                            <input id="grandTotal" tabindex="-1" class="form-control text-right" name="grand_total_price" value="<?php echo $invo->grand_total;?>" readonly="readonly" type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                        
                                        <td style="text-align:right;" colspan="4"><b><?php echo display('paid_ammount')?>:</b></td>
                                        <td class="text-right">
                                            <input id="paidAmount" onkeyup="invoice_paidamount();" tabindex="-1" class="form-control text-right" name="paid_amount" value="<?php echo $invo->paid;?>" type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="center">
                                        <!--     <input id="add-invoice-item" class="btn btn-info" name="add-invoice-item" onclick="addInputField('addinvoiceItem');" value="Add New Service" type="button">
                                            <input name="baseUrl" class="baseUrl" value="<?php echo base_url();?>" type="hidden">
                                         --></td>
                                        <td style="text-align:right;" colspan="3"><b><?php echo display('due')?>:</b></td>
                                        <td class="text-right">
                                            <input id="dueAmmount" class="form-control text-right" name="due_amount" value="<?php echo $invo->due;?>" readonly="readonly" type="text">
                                        </td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-8">

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('payment_notes')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <textarea name="payment_notes" class="form-control" placeholder="<?php echo display('payment_notes')?>"><?php echo $invo->payment_notes;?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Select payment method <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="payment_method" class=" form-control" required="">
                                        <option value="" >-Select-</option>
                                        <option value="master_card" >Master Card</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('payment_method_notes')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <textarea name="payment_method_notes" class="form-control" placeholder="<?php echo display('payment_method_notes')?>"><?php echo @$invo->payment_method_notes;?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-4 col-sm-4">
                                <input id="add-invoice" class="btn btn-success" name="add-invoice" value="<?php echo display('save_and_paid')?>" type="submit">
                            </div>
                        </div>
                    </div>
                   <?php echo form_close();?>
                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">

    document.forms['insert_invoice'].elements['doctor_id'].value="<?php echo $invo->doctor_id?>";
    document.forms['insert_invoice'].elements['payment_method'].value="<?php echo $invo->payment_method?>";
    $(document).ready(function() {  
        
        $('.add-invoice').prop('disabled', true);

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
                        $('#address').val(data.address);
                        $('#patient_id').val(data.patient_id);
                        $('#csc').removeClass('text-danger');
                        $(".invlid_patient_id").text(' Patient Pnone Number is Valid').addClass("text-success");
                       
                    } else {
                        $('#csc').removeClass('text-success');
                        $(".invlid_patient_id").text('Invalid Patient Phone Number').addClass("text-danger");
                    }
                }, error   : function() {
                    alert('failed!');
                } 
               
            });
        });

    });

</script>




