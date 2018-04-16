<?php include "AutoLoad.php" ?>

<?php 
    if (!isset($_GET["page"])) {
        include  VIEWS . "/index.php";
    }
    else {
        $path = 'Views';
        $file_path = "";
        $obj_rdi = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        foreach ($obj_rdi as $file){
            if($file->getFileName() == $_GET["page"].".php") {
                $file_path = $file->getPathName();    
                break;
            }
        }
        if ($file_path != "") {
            include $file_path ;
        }
        else {
            header("Location: error?code=404");
        }
    }

?>