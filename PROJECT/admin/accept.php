<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];
$category=$_SESSION['Category'];

echo $category,$bookid,$rollno;

/*if($category == 'GEN' || $category == 'OBC' )
{$sql1="update LMS.record set Date_of_Issue=curdate(),Due_Date=curdate()+60,Renewals_left=1 where BookId='$bookid' and RollNo='$rollno'";

if($conn->query($sql1) === TRUE)
{
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:1; url=requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=requests.php", true, 303);

}
}
else
{$sql2="update LMS.record set Date_of_Issue=curdate(),Due_Date=curdate()+180,Renewals_left=1 where BookId='$bookid' and RollNo='$rollno'";

if($conn->query($sql2) === TRUE)
{
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:1; url=requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=requests.php", true, 303);

}
}*/



?>