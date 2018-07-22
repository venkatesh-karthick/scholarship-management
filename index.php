<html> 
<head> 
<style type="text/css">
 .background{ 
box-sizing: border-box; 
width: 100%; 
height: 100%;
padding: 3px; 
background-image:url("/tce/17.jpg");
border: 1px solid black; 
background-size: 100% 100%;
}
</style>
</head>
<body>
<div class="background">
<!--<center><h2>User Signin</h2></center>

<form action="loginsub.php" method="POST">
<center><p><label>User Name: </label><input type="text" name="name" id="name" required="true"></p></center>
<center><p><label>Password: </label><input type="password" name="pass" id="pass"  required="true"></p></center>
<center><p><input type="submit" value="Sign In" Onclick="this.value='Loading...'"></p></center>
</form>
-->


<form action="loginsub.php" method="POST">
<link rel="stylesheet" type="text/css" href="style1.css">
<h1><?php echo $_GET['a']?> Sign in here </h1>
<input placeholder="Roll Number" type="text" name="rollno" id="rollno" required="">
<input placeholder="Password" type="password" name="pass" id="pass" required="">
<button>Submit</button><br><br>
<label style= "color: white;"> &nbsp; &nbsp; Not a Member &nbsp;</text>  </label><a href="register.php" style= "color: red; font-size:20px;"><b>Sign up</b></a> 
</form>
</div>
</body>
</html>
