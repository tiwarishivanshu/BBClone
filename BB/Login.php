<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style>
body{
	background:#272727;
        font-family: Arial, Helvetica, sans-serif;
}
#box{
height:400px;
width:350px;

margin-left:auto;
margin-right:auto;
margin-top:10%;
}
a{
color:#929292;
}
input{
border:none;
background:#272727;
border-bottom:1px solid white;
caret-color:#272727;
font-size:17px;
color:white;
}
input:focus
{
outline-style:none;
cursor:none;
color:white;
background:#272727;
}
button{
background:none;
border:none;
color:#929292;
font-size:15px;
}

#btnn
{
width:280px;
height:40px;
border:2px solid white;
}
#btnn:hover
{
cursor:pointer;
background:white;
color:black;
}
button:focus{
outline-style:none;
}
::placeholder
{
	color:white;
}

</style>
<script>
function clickMe(id){
	document.getElementById(id).style.display="block";

}
</script>
</head>
<body>

	<div id="box">
	<h1 style="color:white;font-size: 55px;">Blackboard</h1>
	<form action="BBrest" method="post"></form>
	
	<p style="color:white;text-align:left;display:none;" id="r1">UserName</p><input type="text" size="25" name="username" placeholder="UserName" style="margin-top:20px;" onfocus="clickMe('r1');this.placeholder='';this.style.marginTop='0px'">

	<p style="color:white;text-align:left;display:none" id="r2">Password</p><input type="password" size="25" name="psswd" placeholder="Password" style="margin-top:20px;" onfocus="clickMe('r2');this.placeholder='';this.style.marginTop='0px';">
	<p id='btn' style="margin-top:70px;"><button type="submit" id="btnn">Sign in</button></p>
	
	
	</form>
	
	<p style="color:#929292;margin-left:18%;margin-top:30px;"><a href="sdftg" >View Cource Catalog</a></p>
	<div style="margin-top:70px;">
	<p style="color:#929292;margin-left:0%;font-size:13px;">&#169 1997-2020 Blackboard Inc. All Rights Reversed.</p>
	<p style="color:#929292;margin-left:10%;margin-top:-13px;font-size:13px;"> <a href="123">Help</a><a href="123" style="padding-left:30px;">Privacy and Terms of Use</a></p>
	</div>
	</div>
</body>
</html>