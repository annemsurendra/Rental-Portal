<?php
$area=$_POST["area"];
$flat=$_POST["flat"];


$conn=new mysqli('localhost:3308','root','','rental_portal');
if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connect_error);
}
else
{
$sql="select * from rental_table where Area='$area' and Flat='$flat'";
$result=mysqli_query($conn,$sql);
while($rows=$result->fetch_assoc())
{

$Name=$rows['Name'];
$Mobile_Number=$rows['Mobile_Number'];
$Address=$rows['Address'];
echo "Name: ".$Name."<br>"." Mobile_Number: ".$Mobile_Number."<br>"." Address: ".$Address;
echo "<br>";
echo "<br>";
}

}
	$conn->close();
?>