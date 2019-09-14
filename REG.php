<html>
<head>
	<script type="text/javascript" src="reg.js"></script>
<style>
th, td {
  padding: 15px;
}
</style>
</head>
<body style="background-color: lightblue">
<center>
<u>
<h1>REGISTRATION FORM</h1>
</u>
<center>
<center>
<div>
<form  method="post">
<table >
<b>
<tr><th>NAME</th><td><input type="text" name="name" id="name"></td></tr>

<tr><th>EMAIL</th><td><input type="text" name="email" id="email"></td></tr>

<tr><th>PASSWORD</th><td><input type="password" name="pass" id="pass"></td></tr>

<tr><th>RE-PASSWORD</th><td><input type="password" name="pass1" id="cpass"></td></tr>

<tr><th>GENDER</th><td><input type="radio" name="gender" value="male" id="g1">MALE<input type="radio" name="gender" value="female" id="g2">FEMALE</td></tr>

<tr><th>ADDRESS</th><td><input type="text" name="add" id="address"></td></tr>

<tr><th>CONTACT</th><td><input type="text" name="cont" id="contact"></td></tr>

<tr><th>TYPE</th>
<td>
<select name="type" id="select">
<option></option>
<option value="admin">admin</option>
<option value="public">public</option>
}
</select>

</td></tr>

<tr><th></th><td><input type="submit" name="submit" onclick="return reg()"></td></tr>
</b>

</table>
</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
 
 include("call.php");

$name=$_POST["name"];

$email=$_POST["email"];

$pass=$_POST["pass"];

$gender=$_POST["gender"];

$address=$_POST["add"];

$contact=$_POST["cont"];

$type=$_POST["type"];

$a = mysqli_query($abc,"insert into registration1(name,email,password,gender,address,contact,type) values('$name','$email','$pass','$gender','$address','$contact','$type')");


if(!($a))
{
echo "record not inserted";
}
else
{
echo "inserted";
}

}
?>
