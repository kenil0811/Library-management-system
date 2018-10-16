<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];

$sql="select Category from LMS.user where RollNo='$rollno'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$category=$row['Category'];




$sql1="update LMS.record set Date_of_Return=curdate() where BookId='$bookid' and RollNo='$rollno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="update LMS.book set Availability=Availability+1 where BookId='$bookid'";
 $result=$conn->query($sql3);
 $sql5="insert into LMS.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for return of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=requests.php", true, 303);

}





?>