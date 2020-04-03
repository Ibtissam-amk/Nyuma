<?php
include_once 'config/dbhmodel.php';

class Course extends Dbh{
    
    public $_id;
    public $title;
    public $description;
    public $content;
    //public $created_at; @ams: this should be currentTimeStamp on the db
    
}