<html> 
<head> 
<style type="text/css">
 .background{ 
box-sizing: border-box; 
width: 100%; 
height: 100%;
padding: 3px; 
background-image:url("/tce/10.jpg");
border: 1px solid black; 
background-size: 100% 100%;
background-repeat: no-repeat;
background-attachment: fixed;
}
</style>
</head>
<body>
<div class="background">

<form action="registersub.php" method="POST">
<link rel="stylesheet" type="text/css" href="style2.css">
<h1>Sign in</h1>

<input placeholder="User name" type="text" name="name" id="name" required="">
<input placeholder="Roll no" type="varchar"name="roll" id="roll" required="">
<input placeholder="password" type="password" name="pass" id="pass" required="">
<input placeholder="Retype-password" type="password" name="cpass" id="cpass" required="">
<Button> Submit </Button><br> 	
<br><label style= "color: white;"> &nbsp; &nbsp; Already a Member &nbsp;</label><a href="login.php" style= "color: red; font-size:20px;"><b>Sign in</b></a>
</form>
</div>
</body>
</html>

