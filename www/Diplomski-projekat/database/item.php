<?php


class Item{

	public $db=null;
	
	public function __construct(DBController $db)
	{
		if(!isset($db->con)) return null;
		$this->db=$db;
		
	}
	
	
	//Fetch Item data using getDataMethod
	public function getData($table='`woman-t-shirts`'){
		
		$result=$this->db->con->query("SELECT * FROM{$table}");
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