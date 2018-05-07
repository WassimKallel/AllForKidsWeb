
$("#send_verification").on("click",function() {
    if($("#phone").val().length > 0 ) {
        $.post("send_verification", {phone : $("#phone").val()}).success(function(data){
            $("#verify_button").show()
        })
    }
})

$("#verify_button").on("click",function(){
    $.post("verify_code", {code: $("#verification_code").val()}).success(function(data)   {
        if(data.trim() === "OK") {
            $("#verification_code").css("border" ,"1px solid green")
            $("#register_submit").show()
            $("#verify_button").hide()
            $("#send_verification").hide()
        }else {
            $("#verification_code").css("border", "1px solid red")
        }
    })
}) 