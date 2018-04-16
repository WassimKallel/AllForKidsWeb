<?php 
include_once MODELS . "/Blog/Comment.php";
include_once MODELS . "/Blog/Post.php";
include_once MODELS . "/Blog/PostTag.php";
include_once MODELS . "/Blog/Tag.php";
include_once MODELS . "/UserManagement/User.php";
use \Core\ORM\Model;

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

    public static function getLatestMonths() {
        $posts = Post::sql('SELECT creation_date FROM :table WHERE creation_date > curdate() - interval (dayofmonth(curdate()) - 1) day - interval 6 month ORDER BY 1 ASC');
        $dates = [];
        foreach ($posts as $post) {
            $date = new DateTime($post->creation_date);
            $fomatted_date = $date->format('F') . ' ' . $date->format('Y');
            if(!in_array($fomatted_date, $dates)) {
                array_push($dates, $fomatted_date);
            }
        }
        return $dates;
    }

    public static function getPostsOfMonth($month_and_year, $limit, $offset=0) {
        $date = DateTime::createFromFormat('F Y', $month_and_year);
        $month = intval($date->format('m'));
        $year = intval($date->format('Y'));
        return Post::sql('SELECT * FROM :table WHERE MONTH(creation_date) = ? AND YEAR(creation_date) = ? LIMIT ? OFFSET ?', array($month, $year, $limit, $offset));
    }

    public static function getPostsOfMonthCount($month_and_year) {
        $date = DateTime::createFromFormat('F Y', $month_and_year);
        $month = intval($date->format('m'));
        $year = intval($date->format('Y'));
        return Model::sql('SELECT count(*) as all_count FROM blog_post WHERE MONTH(creation_date) = ? AND YEAR(creation_date) = ?', array($month, $year))[0]->all_count;
    }
}
