<?php
include_once MODELS . "/Store/Category.php";

class ProductController {

    public static function getAllCategories() {
       return  Category::all();
    }
    public static function getCategory($id){
        return Category::retrieveByPK($id);
    }
    public static function getAllProducts() {
        return  Product::all();
     }
     public static function getProduct($id){
         return Product::retrieveByPK($id);
     }
     public static function getProductsCount($id){
        return Product::sql('SELECT count(*) as count FROM :table')[0]->count;
     }

}
?>
