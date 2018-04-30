<?php
include_once CONTROLLERS . "/UserManagement/UserController.php";
include_once CONTROLLERS . "/OrderManagement/OrderController.php";
include_once CONTROLLERS . "/ProductManagement/ProductController.php";
include_once CONTROLLERS . "/ForumManagement/ForumController.php";
include_once CONTROLLERS . "/BlogManagement/BlogController.php";


use Handlers\FileUploadHandler;
use Handlers\FieldType;

class DashboardController
{
    public static function getUsersCount()
    {
        return count(UserController::getAllUsers());
    }

    public static function getBlogPostsCount()
    {
        return BlogController::countAllPosts();
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
