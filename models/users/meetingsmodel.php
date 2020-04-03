<?php
include_once 'config/dbhmodel.php';

class Meetings extends Dbh{
    
    public $_id;
    public $from;
    public $to;
    public $proposedTIme;
    public $proposedDate;
    public $proposedBy;
    public $status;
    //public $created_at; @ams: this should be currentTimeStamp with the first create operation
    //public $updated_at; @ams: this should be currentTimeStamp with an update operation
        
}