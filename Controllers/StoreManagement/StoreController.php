<?php
include_once MODELS . "/Store/Store.php";

class StoreController {

    public static function getAllStores() {
        return  Store::all();
     }
     public static function getStore($id){
         return Store::retrieveByPK($id);
     }

}
?>
