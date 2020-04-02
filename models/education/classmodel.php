<?php
include_once 'config/dbhmodel.php';

class Klass extends Dbh{
    
    public $_id;
    public $user_id;
    public $title;
    public $start_date;
    public $end_date;
    public $price;
    public $number_lessons;
    public $rating;
    //public $created_at; @ams: this should be currentTimeStamp on the db
     
}