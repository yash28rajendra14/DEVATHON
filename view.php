<html>
<head>
</head>
<body>
<form action="" method="post">
<table>
<tr><th>EMAIL ID</th><td><input type="email" name="email"></td></tr>
<tr><th></th><td><input type="submit" name="submit" value="view"></td></tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
 include("call.php");
 $email=$_POST["email"];
 $count=mysqli_query($abc,"select * from `registration1` where email='$email' ");
 $fetch=mysqli_fetch_array($count);
?>
<html>
<body>
<form action="" method="post">
<table>

<tr><th>NAME</th><td><input type="text" name="name" value="<?php echo $fetch[1]; ?>" readonly></td></tr>

<tr><th>EMAIL</th><td><input type="text" name="email" value="<?php echo $fetch[2];?>"></td></tr>


<tr><th>PASSWORD</th><td><input type="text" name="pass" value="<?php echo $fetch[3];?>"></td></tr>


<tr><th>GENDER</th><td><input type="text" name="gender" value="<?php echo $fetch[4]; ?>"readonly></td></tr>

<tr><th>ADDRESS</th><td><input type="text" name="add" value="<?php echo $fetch[5];?>"></td></tr>

<tr><th>CONTACT</th><td><input type="text" name="cont" value="<?php echo $fetch[6]; ?>"></td></tr>

<tr><th></th><td><input type="submit" name="update" value="update"></td></tr>

</table>
</form>
</body>
</html>

<?php
}
?>



<?php
if(isset($_POST["update"]))
{

include("call.php");

$name=$_POST["name"];

$email=$_POST["email"];

$password=$_POST["pass"];

$gender=$_POST["gender"];

$address=$_POST["add"];

$contact=$_POST["cont"];

$updte=mysqli_query($abc,"update `registration1` set name='$name',password='$password',gender='$gender',address='$address',contact='$contact' where email='$email' ");
if(!($updte))
{
echo "not update record";
}
else
{
echo "<i>UPDATE LATEST RECORD</i>";

$count=mysqli_query($abc,"select * from `registration1` where email='$email' ");
 $fetch=mysqli_fetch_array($count);

}

?>


<html>
<body>
<form action="" method="post">
<table>

<tr><th>NAME</th><td><input type="text" name="name" value="<?php echo $fetch[1]; ?>" readonly></td></tr>

<tr><th>EMAIL</th><td><input type="text" name="email" value="<?php echo $fetch[2];?>" readonly></td></tr>

<tr><th>PASSWORD</th><td><input type="text" name="pass" value="<?php echo $fetch[3];?>" readonly></td></tr>

<tr><th>GENDER</th><td><input type="text" name="gender" value="<?php echo $fetch[4]; ?>"readonly></td></tr>

<tr><th>ADDRESS</th><td><input type="text" name="add" value="<?php echo $fetch[5];?>"readonly></td></tr>

<tr><th>CONTACT</th><td><input type="text" name="cont" value="<?php echo $fetch[6]; ?>" readonly></td></tr>

</table>
</form>
</body>
</html>


<?php
}
?>



