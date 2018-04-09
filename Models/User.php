<?php
use \Core\ORM\Model;


class User extends Model {
    protected  static  $table= "personne";
    public $id, $nom, $prenom;
}

