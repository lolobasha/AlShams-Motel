<?php
////// this maps our database///////////////////////////////////////
class Checked{

public $Id;
public $Ref_no;
public $Room_id;
public $Name;
public $Contact_no;
public $Date_in;
public $Date_out;
public $Booked_cid;
public $Status;
public $Date_updated;


///////////////////////some crud functions////////////////////////////////////////////////////////

function deletebyId($id)
    {
		$sql="delete  from checked where Id=".$id;
		$conn = new mysqli("localhost", "root", "","hotel_db");        
		$conn->query($sql) ;
    }

function updatebyId($id)
    {
		$sql="update checked set Id=".$id;
		$conn = new mysqli("localhost", "root", "","hotel_db");        
		$conn->query($sql) ;
    }




////////////////////////////this function convert the database into objects////////////////////////

function __construct($id)// this function is same as getuserById 
	
	{
		
		if ($id !="")
		{	
			$sql="select * from checked where Id=".$id;

			$conn = new mysqli("localhost", "root", "","hotel_db");
			$CheckedDataSet = $conn->query($sql) ;
			if ($row = mysqli_fetch_array($CheckedDataSet))
			{
                $this->Id=$id;
				$this->Ref_no=$row["ref_no"];
				$this->Room_id=$row["room_id"];
				$this->Name=$row["name"];
				$this->Contact_no=$row["contact_no"];
				$this->Date_in=$row["date_in"];
				$this->Date_out=$row["date_out"];
				$this->Booked_cid=$row["booked_cid"];
				$this->Status=$row["status"];
				$this->Date_updated=$row["date_updated"];

                
			}
		}
	}
}
///////////////////////////////////////unit testing/////////////////////////////////////////////////////////////////
//$Stobj=new Checked(12);
//echo $Stobj->Ref_no;
//include_once "db_mvc.php"; 
//$conn=returnConnection();



?>