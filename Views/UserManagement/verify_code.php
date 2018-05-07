
<?php 

if(isset($_SESSION["code"])) {
    if($_POST["code"] == $_SESSION["code"]){
        echo "OK";
        unset($_SESSION["code"]);
    }else{
        echo "NOT OK";
    }
}else {
    echo "NOT OK";
}