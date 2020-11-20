<?php
$user='root';
$pass='abcd123';
$db='ebook';
$item='';
$item=$_POST["book"];
$conn=mysqli_connect('localhost',$user,$pass,$db) or die("Unable to connect");
$sql="SELECT * FROM bookdetails WHERE Bname like '%".$item."%'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
$fitem=$row['Bname'];
$price=$row['Price'];
}if($fitem==$item)
{
session_start();
$_SESSION['bn']=$item;
$_SESSION['bp']=$price;
header("Location:pay.php");
}
?>