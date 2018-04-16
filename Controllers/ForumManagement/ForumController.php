<?php 
include_once MODELS . "/Forum/Post.php";
include_once MODELS . "/Forum/Thread.php";
include_once MODELS . "/Forum/Topic.php";
include_once MODELS . "/UserManagement/User.php";


class ForumController {

    public static function getThreadByID($thread_id) {
        return Thread::retrieveByPK($thread_id);
    }

    public static function getThreadPosts($thread) {
        return Post::sql('SELECT * FROM :table WHERE thread_id = ?', array($thread->id));
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

    public static function getTopicThreads($topic) {
        return Thread::sql('SELECT * FROM :table WHERE topic_id = ?', array($topic->id));
    }

    public static function saveThread($topic, $post_data) {
        $thread = new Thread();
        $thread->title = $post_data['thread-title'];
        $thread->topic_id = $topic->id;
        $thread->save();
        ForumController::saveThreadPost($thread, $post_data);
    }

    public static function getAllTopics() {
        return Topic::all();
    }
}