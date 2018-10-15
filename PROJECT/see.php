<?php
session_start();

if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $Description=$_POST['Description'];
    $rollno=$_SESSION['RollNo'];

$sql1="insert into LMS.recommendations (Book_Name,Description,RollNo) values ('$title','$Description','$rollno')"; 

echo $rollno;

/*
if($conn->query($sql1) === TRUE){


echo "<script type='text/javascript'>alert('Success')</script>";
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}*/
    
}
?> 
