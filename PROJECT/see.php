<?php
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$author1=$_POST['author1'];
	$author2=$_POST['author2'];
	$author3=$_POST['author3'];
	$publisher=$_POST['publisher'];
	$year=$_POST['year'];
	$availability=$_POST['availability'];
	
echo $title,$author1,$author2,$author3,$publisher,$year,$availability;
}

?>