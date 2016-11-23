<?php
$connection=mysqli_connect("localhost",'root','9433');
if(!$connection)
{
echo " Not connected to server";
}


if(!mysqli_select_db($connection,'world'))
{
echo "Database not selected ";
}

$sql= "select * from city";
$result=mysqli_query($connection,$sql);
while($name=mysqli_fetch_array($result))
{
$nam=$name['Name'];
$cc=$name['CountryCode'];
$dd=$name['District'];
$pp=$name['Population'];
//$emai=$name['Email'];

echo "Name : $nam ";
echo  "CountryCode :$cc ";
echo "District : $dd ";
echo "Population : $pp ";
echo "<br>";   

}

?>

