<?php
include_once MODELS . "/Store/Category.php";
include_once MODELS . "/Store/Product.php";

class ProductController {

    public static $limit = 6;

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
     public static function getProductsCount(){
        return Product::sql('SELECT count(*) as count FROM :table')[0]->count;
     }
     public static function getProductsCountByCategory($id){
        return Product::sql('SELECT count(*) as count FROM :table where category_id=?',array($id))[0]->count;
     }
     public static function getMostSelledProducts($limit){
        return Product::sql('SELECT * FROM :table limit ?', array($limit) );
     }
     public static function getRelatedProducts($id,$limit){
        return Product::sql('SELECT * FROM :table where category_id= ?  limit ?',  array($id,$limit) );
     }
     public static function getProductsByCategory($id,$offset = 0)
     {
         return Product::sql("SELECT * from :table where category_id=? ORDER BY creation_date DESC LIMIT ? OFFSET ?;", array($id,ProductController::$limit, $offset));
     }
     public static function getAllProductsWithPagination($offset = 0)
     {
         return Product::sql("SELECT * from :table ORDER BY creation_date DESC LIMIT ? OFFSET ?;", array(ProductController::$limit, $offset));
     }

}
?>
