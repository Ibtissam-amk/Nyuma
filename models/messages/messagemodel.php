<?php
include_once 'config/dbhmodel.php';

class Message extends Dbh{
    public $_id;
    public $creatorId;
    public $creatorName;
    public $message;
    public $parentMessageId;
    public $deleteRequestBySender;
    //public $created_at; @ams: this should be currentTimeStamp and should be rename created_at
    
}