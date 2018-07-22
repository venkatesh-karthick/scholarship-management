<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<style>
#name, #pass {
//margin-left: 480px;
padding : 10px 10px 10px;
margin-top : 115px;
width : 350px;
   border: none;
  border-bottom: 2px solid #605c5f;
//background-image: url("concrete-texture.png");

}
#name:focus{
//border: 2px solid #605c5f;
//border-radius : 6px;
border-bottom: 2px solid #000000;
}

.div1 {
 background: #FFF;
  width : 100%;
color: #605c5f;
//font-size: 45px;
position: relative;
font: bold 42px/70px Georgia, serif;
letter-spacing: 3px;
text-shadow: 2px 1px gray;
//margin-left : 450px;
//margin-top : 100px;

}

.div1 img {
  float: right;
  width: 70px;
  height: 70px;
  background: #555;
}

.forget {
font-size : 15px;
margin-top : 100px;
}

form {
    width: 400px;
    height : 460px;
    padding: 10px;
    border: 5px solid white;
    margin: 0;
    margin-left: 440px;
    margin-top : 80px;
    background : #FFF;
//background-image: url("concrete-texture.png");
	border: 1px solid #bbbbbb; color: #555; box-shadow: 0px 0px 5px #CCC,inset 0px 2px 4px #f3f3f3; -moz-box-shadow: 0px 0px 5px #CCC,inset 0px 2px 4px #f3f3f3;
}

button {
    //margin-left: 570px;
    padding : 5px 5px 5px;
    margin-top : 35px;
    background: #605c5f;
    text-transform: uppercase;
    color: #FFF;
    border: none;
    border-radius: 4px;
     font-size: 18px;
    padding: 15px;
/*    margin: 10px auto;  */
    display: block;
    width: 100px;
    text-align: center;
    border-style: solid;
    border-color: #605c5f;
//background-image: url("concrete-texture.png");
}
button:hover {
  background-color: #FFF;
    text-transform: uppercase;
    color: #605c5f;
}
/*
h1 {
color: rgb(185, 241, 109);
font-size: 40px;
margin-left : 500px;
}
*/

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

</style>

<body>

<form action="loginsub.php" method="post">
<div class="div1"> Sign In  <img src="v.jpeg" width="70px" height="70px"/></div>
<center><input type="text" name ="name" id="name" placeholder="User Name"></center>
<center><button>Next</button></center>

<div class="forget"><a href="regsiter.php" style="text-decoration:none">Not have an account?Sign Up </a></div>

</form>

</body>
</html>

