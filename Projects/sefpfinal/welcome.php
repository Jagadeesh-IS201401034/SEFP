<?php
session_start();

/*if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}*/

?>

<html>
<head>

    <title>
        Registration
    </title>

<style>
.logoutLblPos{

   position:fixed;
   right:10px;
   top:5px;
}
</style>
</head>

<body>
<h1>Welcome</h1><br>
<?php
echo $_SESSION['email'];
?>


<form align="right" name="form1" method="post" action="log_out.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>




<h1><a href="logout.php">Logout here</a> </h1>


</body>

</html>

