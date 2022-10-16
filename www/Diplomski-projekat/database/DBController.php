<?php

class DBController
{
    //Database properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'sara-shop';

    //connection property
    public $con = null;

    //call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error)
        {
            echo 'Failed connection on database.';
        }
		
    }

    
    
}

