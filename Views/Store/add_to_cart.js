
function addToCart(product_id) {
  console.log($("#quantity_select")[0].value)
    $("#product-preview").modal("hide")
    $.post( "add_to_cart", { product_id: product_id })
    .success(function( data ) {
      $("#modal_container").html(data)
      $("#product-preview").modal("show")
      $.get("cart")
      .success(function( data ) {
        $("#cart_list").html(data)
        $('#count').html($("tr[id^=line_]").length)
      });
    });
}

function deleteLineItem(element,line_item_id){
  console.log(element)
    $.post("delete_line_item", {line_item_id : line_item_id})
    .success(function(data){
      $("#" + element).remove()
      $('#count').html($("tr[id^=line_]").length)
    }) 
}

function previewProduct(product_id) {
    $.post( "preview_modal", { product_id: product_id })
    .success(function( data ) {
      $("#modal_container").html(data)
      $("#product-preview").modal("show")
    });
}

