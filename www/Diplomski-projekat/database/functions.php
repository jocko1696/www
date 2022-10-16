<?php

//Require MySql database Connection
include_once('DBController.php');

class Item{

    public $db=null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    //Fetch Item data using getDataMethod
    public function getData($table='`woman-t-shirts`' , $searchString = ''){

        $result=$this->db->con->query("SELECT * FROM{$table} WHERE `item-name` LIKE '%{$searchString}%'");
        $resultArray=array();

        //Fetch data one by one
        if($result){
            while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){//this function return 1 row
                $resultArray[]=$item;
            }
            return $resultArray;
        }

    }

}

//Create object of DBController
$db=new DBController();

//Create Item object
$item=new Item($db);



