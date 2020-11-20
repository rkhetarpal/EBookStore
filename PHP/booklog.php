<?php
$user='root';
$pass='abcd123';
$db='ebook';
$email='';
$passw='';
$dbm='';
$dbp='';
$conn=mysqli_connect('localhost',$user,$pass,$db) or die("Unable to connect");
if(isset($_POST['mail']))
{
$email=$_POST['mail'];
}
if(isset($_POST['pass']))
{
$passw=$_POST['pass'];
}
$sql="SELECT * FROM userdetails WHERE email='$email' AND password='$passw'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
$dbm=$row['email'];
$dbp=$row['password'];
$uname=$row['name'];
}
if($email==$dbm && $passw==$dbp)
{ 
session_start();
$_SESSION['em']=$email;
$_SESSION['pa']=$passw;
$_SESSION['uname']=$uname;
header("Location:loggedin.php");
}
else
{
header("Location:notloggedin.php");
}
?>