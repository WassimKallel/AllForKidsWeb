<?php 
use Core\Enum;
class AdminAlertHandler
{

    public static function show($message, $type) {
        $alert = array( "message" => $message,
                "type" => $type);
        $_SESSION["alerts"][] = $alert;
    }

}
class AlertType extends Enum
{
    const Error = 0;
    const Info = 1;
    const Success = 2;
    
    public static function getTypeClass($type)
    {
        switch ($type) {
            case AlertType::Error:
                return "alert-danger";
                break;
            case AlertType::Info:
                return "alert-primary";
                break;
            case AlertType::Success:
                return "alert-success";
                break;
            
        }
    }
}
 ?>