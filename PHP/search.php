<?php
$user='root';
$pass='abcd123';
$db='ebook';
$flag=0;
$sitem='';
$fitem='';
$conn=mysqli_connect('localhost',$user,$pass,$db) or die("Unable to connect");
if(isset($_POST["find"]))
{
$sitem=$_POST["find"];
}
$sql="SELECT * FROM bookdetails WHERE Bname like '%".$sitem."%'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
$fitem=$row['Bname'];
if($sitem==$fitem)
{ 
$flag=1;
header("Location:$sitem.html");
break;
}
}
if($flag==0)
{
echo"NOT FOUND :(";
}
?>