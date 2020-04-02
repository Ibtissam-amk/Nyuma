<?php
include_once 'config/dbhmodel.php';

class Finance extends Dbh{
    
    public $_id;
    public $user_id;
    public $type;
    public $amount;
    public $topic;
    public $transactionDate;
    
}