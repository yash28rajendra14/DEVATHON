<?php
session_start();
if(isset($_SESSION["name"]) && ($_SESSION["type"]=='public'))
{
?>
<html>
<head>
<style type="text/css">
	table,tr,th,td
	{
     border:1px solid black;
	border-collapse:collapse;
	padding:10px 10px 10px 10px;
}
input
{

border: none;
}

</style>
</head>
<body>
<form method="POST" action="">
<a href="logout.php">logout</a>

	<table>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th>gender</th>
		<th>address</th>
		<th>contact</th>
		
		</tr>
	


<?php
include('call.php');

$Id = $_SESSION["id"];

$a=mysqli_query($abc,"select * from registration1 where id='$Id'");
$b=mysqli_fetch_array($a);
echo " <center><h1> welcome ".$_SESSION["name"]."</h1></center>";

/*
while($b=mysqli_fetch_array($a))
{
	echo "<td>".$b['Id']."</td>";
    echo "<td>".$b['name']."</td>";
  	echo "<td>".$b['email']."</td>";
  	echo "<td>".$b['password']."</td>";
  	echo "<td>".$b['gender']."</td>";
  	echo "<td>".$b['address']."</td>";
  	echo "<td>".$b['contact']."</td>";
  	echo "<td>".$b['type']."</td>";
  	echo "<td>".$b['status']."</td>";
}
*/
?>

<td><input type="text" name="id" value="<?php echo $b[0]; ?>" ></td>

<td><input type="text" name="name" value="<?php echo $b[1]; ?>" ></td>

<td><input type="text" name="email" value="<?php echo $b[2]; ?>" ></td>

<td><input type="text" name="password" value="<?php echo $b[3]; ?>" ></td>

<td><input type="text" name="gender" value="<?php echo $b[4]; ?>" ></td>

<td><input type="text" name="address" value="<?php echo $b[5]; ?>" ></td>

<td><input type="text" name="contact" value="<?php echo $b[6]; ?>" ></td>



</table>
<p><input type="submit" value="update" name="update"></p>
</form>
</body>
</html>
<?php
}
else
{
	header("location:module.php");
}
?>

<?php
if(isset($_POST["update"]))
{
 include("call.php");
 $id=$_POST["id"];
 $name=$_POST["name"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $gender=$_POST["gender"];
 $address=$_POST["address"];
 $contact=$_POST["contact"];

$update=mysqli_query($abc,"update registration1 set name='$name',email='$email',password='$password',gender='$gender', address='$address', contact='$contact' where id='$id' ");
if(!($update))
{
echo "not update";

}
else
{
	echo "update";
	header("refresh:0");
}

}

?>
