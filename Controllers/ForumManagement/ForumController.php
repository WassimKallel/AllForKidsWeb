<?php 
include_once MODELS . "/Forum/Post.php";
include_once MODELS . "/Forum/Thread.php";
include_once MODELS . "/Forum/Topic.php";
include_once MODELS . "/UserManagement/User.php";
use \Core\ORM\Model;

class ForumController {

    public static $limit = 5;

    public static function getThreadByID($thread_id) {
        return Thread::retrieveByPK($thread_id);
    }

    public static function getThreadPosts($thread, $limit, $offset=0) {
        return Post::sql('SELECT * FROM :table WHERE thread_id = ? LIMIT ? OFFSET ?', array($thread->id, $limit, $offset));
    }

    public static function getPostAuthor($post) {
        return User::retrieveByPK($post->user_id);
    }

    public static function getThreadTopic($thread) {
        return Topic::retrieveByPK($thread->topic_id);
    }

    public static function saveThreadPost($thread, $post_data) {
        $post = new Post();
        $post->user_id = AuthenticationController::getCurrentUser()->id;
        $post->content = $post_data['post-content'];
        $post->thread_id = $thread->id;
        $post->creation_date = date('Y-m-d H:i:s');
        $post->save();
    }

    
    public static function getTopicByID($topic_id) {
        return Topic::retrieveByPK($topic_id);
    }

    public static function getTopicThreads($topic, $limit, $offset=0) {
        return Thread::sql('SELECT * FROM :table WHERE topic_id = ? LIMIT ? OFFSET ?', array($topic->id, $limit, $offset));
    }

    public static function saveThread($topic, $post_data) {
        $thread = new Thread();
        $thread->title = $post_data['thread-title'];
        $thread->topic_id = $topic->id;
        $thread->save();
        ForumController::saveThreadPost($thread, $post_data);
    }

    public static function getAllTopics($limit, $offset=0) {
        return Topic::sql('SELECT * FROM :table LIMIT ? OFFSET ?', array($limit, $offset));
    }

    public static function getLastThreadPostTime($thread) {
        $last_seen = Post::sql('SELECT * FROM :table WHERE thread_id = ? ORDER BY 1 DESC LIMIT 1', array($thread->id))[0]->creation_date;
        return new DateTime($last_seen);
    }

    public static function countAllPostsOfThread($thread) {
        return Model::sql('SELECT count(*) as all_count FROM post WHERE thread_id = ?', array($thread->id))[0]->all_count;
    }

    public static function countAllThreadsOfTopic($topic) {
        return Model::sql('SELECT count(*) as all_count FROM thread WHERE topic_id = ?', array($topic->id))[0]->all_count;
    }

    public static function countAllTopics() {
        return Model::sql('SELECT count(*) as all_count FROM topic')[0]->all_count;
    }
    public static function getTopics() {
        return Topic::all();
    }

}