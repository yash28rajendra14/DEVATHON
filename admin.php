<?php
session_start();
if(isset($_SESSION["name"]) && ($_SESSION["type"]=='admin'))
{
?>
<html>
<head>
<style>
table,th,td
{
border:1px solid black;
border-collapse:collapse;
padding:10px 10px 10px 10px;
}
</style>
</head>
<body> 
<form action="" method="get">
	<a href="logout.php">logout</a>
<table> 

<tr>
<th>Id</th>
<th>name</th>
<th>email</th>
<th>gender</th>
<th>address</th>
<th>contact</th>
<th>type</th>
<th>status</th>
</tr>
 


<?php

include("call.php");

echo " <center><h1> welcome ".$_SESSION['name']."</h1></center>";

$total=mysqli_query($abc,"select * from registration1 ");

while($total1=mysqli_fetch_array($total))

{

echo "<tr>";
echo "<td>".$total1['id']."</td>";
echo "<td>".$total1['name']."</td>";
echo "<td>".$total1['email']."</td>";
echo "<td>".$total1['gender']."</td>";
echo "<td>".$total1['address']."</td>";
echo "<td>".$total1['contact']."</td>";
echo "<td>".$total1['type']."</td>";

echo "<td>";
?>
<p> <?php echo $total1['status']? 'Active':'inactive';?></p>

<?php
echo "</td>";
echo "</tr>";
}
?>
</table>

</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="" method="post">
	<table>
		<tr><th>enter id</th><td><input type="text" name="id"></td></tr>
		<tr><th></th><td><input type="submit" name="id1" value="active">
		<input type="submit" name="id2" value="inactivite"></td></tr>
	</table>
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
if(isset($_POST['id1']))
{
include("call.php");
$id=$_POST['id'];
$a=mysqli_query($abc,"update registration1 set status='1' where id='$id' ");
if($a)
{
echo "<script> alert('update active successfully');</script>";
header('refresh:0');
}
else
{
echo "<script> alert(' not update Active successfully');</script>";	
}
}
?>

<?php
if(isset($_POST['id2']))
{
include("call.php");
$id=$_POST['id'];
$b=mysqli_query($abc,"update registration1 set status='0' where id='$id' ");
if($b)
{
echo "<script> alert('deactivate  successfully');</script>";
header('refresh:0');
}
else
{
echo "<script> alert('not deactivate  successfully');</script>";	
}
}
?>
