
<!DOCTYPE html>
<html>
<head>
	<title>World Database</title>
</head>
<body>

</body>
</html>
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

$sql= "select distinct continent from country";
$result=mysqli_query($connection,$sql);
while($name=mysqli_fetch_array($result))
{
$nam=$name['continent'];
echo "Name : $nam ";
echo "<br>";   
}

?>

