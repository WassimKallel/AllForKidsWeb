<?php
namespace Handlers;

class FileUploadHandler
{
    public static function saveFile($name, $rpath = "")
    {
        $path = $GLOBALS["AllForKids"]["data_directory"] . $rpath;
        if (isset($_FILES[$name])) {
            $file_name =  time() . "_" . basename($_FILES[$name]["name"]);
            if (FileUploadHandler::moveUploadedFile($_FILES[$name]["tmp_name"], $path, $file_name)) {
                return $rpath .  $file_name;
            }
        }
        return False;
    }

    private static function folderExist($folder)
    {
        $path = realpath($folder);
        return ($path !== false and is_dir($path)) ? $path : false;
    }

    public static function moveUploadedFile($uploaded_file, $path, $file)
    {
        if (!FileUploadHandler::folderExist($path)) {
            mkdir($path, 0777, true);
        }
        return move_uploaded_file($uploaded_file, $path.$file);
    }
}
