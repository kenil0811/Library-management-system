<?php
require('dbconn.php');

$bookid=$_GET['id1'];

$rollno=$_GET['id2'];

$sql="delete from LMS.record where RollNo='$rollno' and BookId='$bookid'";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:1; url=requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=requests.php", true, 303);

}




?>