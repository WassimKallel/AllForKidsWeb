function deliveryUpdate(delivery_method_id) {
  $.post("delivery_price", {
    delivery_method_id: delivery_method_id
  }).success(function(data) {
    $("#shipping_cost").html(data)
  });
    $.post("recalculate_total", {
      delivery_method_id: delivery_method_id
    }).success(function(data) {
      $("#total_price").html(data)
    });

  
}

$("input[name=shipping_radio]").on("change", function() {
  deliveryUpdate(this.value);
  if(this.value != 0) {
    $("#address_field").show()
  }else{
    $("#address_field").hide()
  }
});
