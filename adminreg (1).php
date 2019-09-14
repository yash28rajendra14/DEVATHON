

<html>
<body>
<form method=post>
Enter the Admin email<input type="email" name="name"><br><br>
               <input type="submit" name="botton" value="submit">
</form>
</body>
</html>

<?php

if(isset($_POST["botton"]))
{
include("call.php");
$email=$_POST["name"];
$s=mysqli_query($abc,"select * from registration1 where email='$email' ");
$p=mysqli_num_row($s);
$all=mysqli_fetch_array($s);
?>

<html>
<body>
<form action="" method="post">
<table>

<tr><th>NAME</th><td><input type="text" name="name" value="<?php echo $all[1]; ?>"></td></tr>

<tr><th>email</th><td><input type="text" name="email" value="<?php echo $all[2]; ?>"></td></tr>

<tr><th>pass</th><td><input type="text" name="pass" value="<?php echo $all[3]; ?>"></td></tr>

</table>
</body>
</html>
<?php
}
?>