<?php
class Thread {
    public $id, $title, $topic_id;

    function __construct($id, $title, $topic_id){
			$this->id=$id;
			$this->title=$title;
			$this->topic_id=$topic_id;
    }
}

