<?php 
include_once MODELS . "/Forum/Post.php";
include_once MODELS . "/Forum/Thread.php";
include_once MODELS . "/Forum/Topic.php";
include_once MODELS . "/Forum/Vote.php";
include_once MODELS . "/Forum/Report.php";
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

    public static function vote($post_data) {
        $vote = new Vote();
        $vote->user_id = AuthenticationController::getCurrentUser()->id;
        if($post_data) {
            $vote->vote = $post_data['vote'];
            $vote->post_id = $post_data['post_id'];
            $vote->save();
        }
    }

    public static function user_voted($post) {
        if(AuthenticationController::$is_logged_in) {
            $votes = Vote::sql('SELECT * FROM :table WHERE user_id = ? AND post_id = ?', array(AuthenticationController::getCurrentUser()->id, $post->id));
            return (count($votes) > 0);
        } 
        return true;
    }

    public static function count_score($post) {
        $votes = Vote::sql('SELECT * FROM :table WHERE post_id = ?', array($post->id));
        $score = 0;
        foreach ($votes as $vote) {
            $score += $vote->vote;
        }
        return $score;
    }

    public static function report($post_data) {
        $post_id = $post_data['post_id'];
        $post = Post::retrieveByPK($post_id);
        if($post == null) {
            return;
        }
        $report = new Report();
        $report->user_id = AuthenticationController::getCurrentUser()->id;
        $report->post_id = $post->id;
        $report->treated = 0;
        $report->save();
    }

    public static function isPostReportedbyConnectedUser($post) {
        if(!AuthenticationController::$is_logged_in) {
            return true;
        }
        $count = Model::sql(
            'SELECT count(*) as all_count FROM report WHERE post_id = ? AND user_id =  ?',
            array($post->id, AuthenticationController::getCurrentUser()->id)
        )[0]->all_count;
        return $count > 0;
    }

    public static function getReports() {
        return Report::retrieveByField('treated', 0);        
    }

    public static function getReportedPost($report) {
        return Post::retrieveByPK($report->post_id);
    }
}