<?php 
include_once MODELS . "/Blog/Comment.php";
include_once MODELS . "/Blog/Post.php";
include_once MODELS . "/Blog/Tag.php";
include_once MODELS . "/UserManagement/User.php";

class BlogController {
    public static $limit = 6;
    public static function getPosts($offset = 0)
    {
        return Post::sql("SELECT * from :table ORDER BY creation_date DESC LIMIT ? OFFSET ?;", array(BlogController::$limit, $offset));
    }

    public static function loadAuthor($post) {
        return User::retrieveByPK($post->user_id);
    }

    public static function getComments($post) {
        return Comment::retrieveByField('post_id', $post->id);
    }


    public static function countAllPosts() {
        return count(Post::all());
    }

    public static function getPost($id) {
        return Post::retrieveByPK($id);
    }

    public static function loadCommentAuthor($post) {
        return User::retrieveByPK($post->user_id);
    }
}
