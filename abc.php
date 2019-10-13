<?php

$uname = $_POST['uname'];
$password =$_POST['password'];
$dob =$_POST['DOB'];
$add =$_POST['address'];
$dept =$_POST['dept'];
$gen =$_POST['gender'];

echo $uname." ".$password. " " .$dob." ".$add." ".$dept." ".$gen;

if(isset($_POST['option']))
{
	 foreach ($_POST['option'] as $opt)  
                <br>print "You selected $opt<br/>"; 

}


?>