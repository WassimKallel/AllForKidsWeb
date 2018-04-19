<?php

namespace  Handlers;
class ErrorHandler
{


    public static function getErrorCode($code)
    {
        if($code == 400)
              return array("Code" => 400 ,
                  "Title" => "Malformed Request",
                  "Message" => "The server cannot or will not process the request due to an apparent client error."
              );
        else  if($code == 503)
            return array("Code" => 503 ,
                "Title" => "Feature unavailable",
                "Message" => "The requested feature is disabled or inaccessible currently. Generally, this is a temporary state."
            );
        else  if($code == 403)
            return array("Code" => 403,
                "Title" => "Access denied",
                "Message" => "The request was a valid request, but the server is refusing to respond to it. The user might be logged in but does not have the necessary permissions for the resource."
            );
        else if($code == 401)
            return array("Code" => 401 ,
                "Title" => "Unauthorized",
                "Message" => "The request has not been applied because it lacks valid authentication credentials for the target resource."
            );
        else if($code == 500)
            return array("Code" => 500 ,
                "Title" => "Internal Error",
                "Message" => "The server has encountered an unknown error."
            );
        else return array("Code" => 404,
            "Title" => "Not found",
            "Message" => "The requested resource could not be found but may be available in the future. Subsequent requests by the client are permissible."
        );
    }
}