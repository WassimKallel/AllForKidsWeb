<?php 
include_once MODELS . "/Blog/Comment.php";
include_once MODELS . "/Blog/Post.php";
include_once MODELS . "/Blog/PostTag.php";
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

    public static function saveComment($post_data, $post) {
        $comment = new Comment();
        $comment->user_id = AuthenticationController::getCurrentUser()->id;
        $comment->content = $post_data['comment'];
        $comment->post_id = $post->id;
        $comment->creation_date = date('Y-m-d H:i:s');
        $comment->save();
    }

    public static function searchPosts($keyword, $offset = 0) {
        return Post::sql("SELECT * from :table WHERE title LIKE ? ORDER BY creation_date DESC LIMIT ? OFFSET ?;", array('%'.$keyword.'%', BlogController::$limit, $offset));
    }

    public static function searchPostsCount($keyword) {
        return count(Post::sql("SELECT * from :table WHERE title LIKE ? ;", array('%'.$keyword.'%')));
    }

    public static function getMostUsedTags() {
        $postTags = PostTag::sql('SELECT tag_id, count(post_id) FROM :table GROUP BY tag_id ORDER BY 2 DESC LIMIT ?', array(BlogController::$limit));
        $tags = [];
        foreach ($postTags as $postTag) {
            array_push($tags, Tag::retrieveByPK($postTag->tag_id));
        }
        return $tags;
    }

    public static function getPostsByTag($tag_id, $offset = 0) {
        $tagPosts = PostTag::sql('SELECT post_id FROM :table WHERE tag_id = ? LIMIT ? OFFSET ?', array($tag_id, BlogController::$limit, $offset));
        $posts = [];
        foreach ($tagPosts as $tagPost) {
            array_push($posts, Post::retrieveByPK($tagPost->post_id));
        }
        return $posts;
    }

    public static function getPostsByTagCount($tag_id) {
        $tagPosts = PostTag::sql('SELECT post_id FROM :table WHERE tag_id = ?', array($tag_id));
        return count($tagPosts);
    }
}
