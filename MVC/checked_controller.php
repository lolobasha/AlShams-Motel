<?php
include_once "checked_model.php";//get data/obj from the user
include_once "checked_view.php";//display data



$Id=$_GET["Id"];//data filled in the controller
$command=$_GET["Command"];// this gets a command from the url

if (isset($command))
{
    if ($command=="delete")
{
    $Stobj=new Checked($Id);
    $Stobj->deletebyId($Id);
}

    if ($command=="update")
    {
        $Stobj=new Checked($Id);
        $Stobj->updatebyId($Id);
    }
    if ($command=="showInfo")
    {
        if(isset($Id))
{
    $Stobj=new Checked($Id);//we take the variable id from the class checked in the (checked_model.php) page and put it in an object/variable 
    $checkedviewobj=new CheckedView();//we construct a variable using the class checkedview
    $checkedviewobj->showCheckedDetails($Stobj);//we use the function SCD from the view page and 
}
    }
    
    
}

?>

