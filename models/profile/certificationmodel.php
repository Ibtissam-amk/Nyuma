<?php
include_once 'config/dbhmodel.php';

class Certification extends Dbh{
    
    public $_id;
    public $profile_id;
    public $title;
    public $description;
    public $issuedBy;
    public $issuedOn;

}