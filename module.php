
<?php
session_start();
if(isset($_SESSION["name"]))
{	
	if($_SESSION["type"]=='public')
	{
	header('location:user1.php');
	exit();
	}
	else if($_SESSION["type"]=='admin')
	{
	header("location:admin.php");
	exit();
	}
}	


?>
<html>
<head>
<link rel="stylesheet" href="module1.css">
<style>
table,tb,th{
	color : red;
}
</style>
</head>
<body style="background-image:url('clouds.jfif');">
		<div id="four">
<ul style="color:red">
   <li>HOME</li>
   <li>ABOUT US</li>
   <li><a href="REG.php">REGISTRATION</a></li>
   <li>CONTACT</li>
</ul>
</div>
<form method="post" id="smallt">
<img src="2.png" id="img">
<div id="clogin">

<table >
<tr><th>LOGIN ID</th><td><input type="text" name="log"></td></tr>
<tr><th>PASSWORD</th><td><input type="password" name="cont"></td></tr>
<tr><th>Type</th><td>
<select name="type">
<option>admin</option>
<option>public</option>
</select>
</td></tr>
<tr><th></th><td><input type="submit" name="submit" value="LOGIN" id="a" class="a"></td></tr>
</table>
</div>
</form>
</body>
</html>



<?php
if(isset($_POST["submit"]))
{
include("call.php");

$email=$_POST["log"];
$password=$_POST["cont"];
$type=$_POST["type"];

$s=mysqli_query($abc,"select * from registration1 where binary email='$email' and binary password='$password' and status='1' and type='$type'");

$w=mysqli_query($abc,"select * from registration1 where binary email='$email' and binary password='$password'");

$row=mysqli_num_rows($w);

$fetch = mysqli_fetch_array($s);

$fetch1 = mysqli_fetch_array($w);

$que=mysqli_num_rows($s);


 if($que>0)
{ 	
	session_start();
		$_SESSION["name"]=$fetch["name"];
		$_SESSION["id"]=$fetch["id"];
		$_SESSION["type"]=$fetch["type"];
	if($type=='public')
	{
		header('location:user1.php');
	
	
	}
	else
	{	

	header("location:admin.php");
	}
}
 	
else if($row>0)
  {
 
    echo "<script type='text/javascript'> alert('you are not authorized ');</script> ";

   }

	else 
	{
	echo "<script type='text/javascript'> alert('email id and password does not access  ');</script> ";
	}	
     

 }
?>

