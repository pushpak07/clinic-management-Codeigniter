<?php
$cache_file = "json/product.json";
    header('Content-Type: text/javascript; charset=utf8');
?>

var productList = <?php echo file_get_contents($cache_file); ?> ; 


APchange = function(event, ui){
	$(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    function invoice_productList(cName) {

		var qnttClass = 'ctnqntt'+cName;
		var priceClass = 'price_item'+cName;
		var total_tax_price = 'total_tax_'+cName;
		var available_quantity = 'available_quantity_'+cName;

        $( ".productSelection" ).autocomplete(
		{

            source: productList,
			delay:300,
			focus: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				return false;
			},
			select: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				
				var id=ui.item.value;
				var base_url = $('.baseUrl').val();
				var csrf_test_name = $("[name=csrf_test_name]").val();
				
				$.ajax
				   ({
						type: "POST",
						url: base_url+"admin/Service/retrieve_service",
						data: {product_id:id,csrf_test_name:csrf_test_name},
						cache: false,
						success: function(data)
						{
							var obj = jQuery.parseJSON(data);
							$('.'+priceClass).val(obj.service_price);
							$('.'+total_tax_price).val(obj.tax);
							$('.'+available_quantity).val(obj.total_product);
							//This Function Stay on others.js page
							quantity_calculate(cName);
						} 
					});
				
				$(this).unbind("change");
				return false;
			}
		});
		$( ".productSelection" ).focus(function(){
			$(this).change(APchange);
		
		});
    }


