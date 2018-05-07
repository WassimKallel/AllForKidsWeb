<?php

use \Core\ORM\Model;


class Store extends Model {

    protected static $table= "stores";
    public $id;
    public $lon;
    public $lat;
    public $name;
    public $active;
    public function save() {
        if(!$this->active) {
            $this->active = 1;
        }
        parent::save();
    }
}

