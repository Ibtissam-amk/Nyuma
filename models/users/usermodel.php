<?php
include_once 'config/dbhmodel.php';

class User extends Dbh{
    public $_id;
    public $account_id;
    public $name;
    public $birthdate;
    public $phone;
    public $email;
    public $adress;
    public $nationality;
}