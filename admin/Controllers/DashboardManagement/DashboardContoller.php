<?php
include_once CONTROLLERS . "/UserManagement/UserController.php";
include_once CONTROLLERS . "/OrderManagement/OrderController.php";
include_once CONTROLLERS . "/StoreManagement/ProductController.php";
include_once CONTROLLERS . "/BlogManagement/BlogController.php";


use Handlers\FileUploadHandler;
use Handlers\FieldType;

class DashboardController
{
    public static function getUsersCount()
    {
        return count(UserController::getAllUsers());
    }

    public static function getPostsCount()
    {
        return count(Post::all());
    }
    public static function getCommentsCount()
    {
        return count(Comment::all());
    }
    public static function getCustomersCount()
    {
        return count(User::retrieveByField("is_customer" , 1));
    }
    public static function getProductsCount()
    {
        return ProductController::getProductsCount();
    }
    public static function getOrdersCount()
    {
        return OrderController::getOrdersCount();
    }
}
