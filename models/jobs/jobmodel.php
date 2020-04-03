<?php
include_once 'config/dbhmodel.php';

class Job extends Dbh{
    
    public $_id;
    public $user_id;
    public $title;
    public $tasks;
    public $start_date;
    public $end_date;
    public $price;
    //public $created_at; @ams: this should be currentTimeStamp on the db with the first create operation
    //public $updated_at; @ams: this should be currentTimeStamp on the db with an update operation

}