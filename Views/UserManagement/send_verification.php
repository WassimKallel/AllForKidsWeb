<?php

$code = "";
if(isset($_SESSION["code"])) {
  $code = $_SESSION["code"];
}else {
  $code = $GLOBALS["AuthController"]->generateRandomString(4);
  $_SESSION["code"] = $code;
}

require_once ROOT_DIR . '/vendor/autoload.php';

$sid = "ACa25fbb93334166510c15ac231a97bc8d"; // Your Account SID from www.twilio.com/console
$token = "acfd770f0c46633373bfe364d450309e"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '+216' . $_POST["phone"], // Text this number
  array(
    'from' => '+17192498112 ', // From a valid Twilio number
    'body' => 'Your Registration code is : ' . $code
  )
);
