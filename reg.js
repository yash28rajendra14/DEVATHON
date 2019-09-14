function reg()
{

name=document.getElementById("name").value;
email=document.getElementById("email").value;
pass=document.getElementById("pass").value;
cpass=document.getElementById("cpass").value;
g1=document.getElementById("g1");
g2=document.getElementById("g2");
address=document.getElementById("address").value;
contact=document.getElementById("contact").value;
select=document.getElementById("select").value;
var a=/^[a-z A-Z]+$/;
var e=/^[a-z A-Z 0-9]+[@]+[a-z]+[.]+[a-z]+$/;
var p=/^[a-z A-Z 0-9]+[@\$\#]+$/;
if(name=="")
{
	alert("name can't be empty");
	return false;
}
	else if(!name.match(a))
	{
		alert("please match (a-z A-Z)");
		return false;
	}

	else if (email=="") 
	{
		alert("email can't be empty");
		return false;
	}
	else if(!email.match(e))
	{
		alert("pls match [a-z A-Z 0-9]+[@]+[a-z]+[.]+[a-z] this partten");
		return false;
	}
	 else if (pass=="") 
	{
		alert("password can't be empty");
		return false;
	}
	else if (!pass.match(p))
	{
		alert("pls match  [a-z A-Z 0-9]+[@,$,#] the partten");
		return false;
	}

 	 else if (cpass=="") 
	{
		alert("Re-password can't be empty");
		return false;
	}
	else if(pass!==cpass)
	{
		alert("match parten");
		return false;
	}
	else if (g1.checked==false && g2.checked==false) 
	{
		alert("please select the gender");
		return false;
	}
	 else if (address=="") 
	{
		alert("address can't be empty");
		return false;
	}
	 else if (contact=="") 
	{
		alert("contact can't be empty");
		return false;
	}
	 else if (select=="") 
	{
		alert("please select the any one of type");
		return false;
	}
	else
	{

		return true;
	}

	



}