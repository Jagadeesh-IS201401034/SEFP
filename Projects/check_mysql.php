<?php
$link=mysqli_connect('localhost', 'root', '9433','world') or die('Could not connect the database : Username or password incorrect');
echo 'Database Connected successfully';

$sql= "select name from  country";
$result=mysqli_query($link,$sql);
while($name=mysqli_fetch_array($result))
{
$nam=$name['Name'];
$cc=$name['CountryCode'];
$dd=$name['District'];
$pp=$name['Population'];
//$emai=$name['Email'];

echo "Country Name : $nam ";
echo  "CountryCode :$cc ";
echo "District : $dd ";
echo "Population : $pp ";
echo "<br>";   

}

mysqli_close($link);
?>


