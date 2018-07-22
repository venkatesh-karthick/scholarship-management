<?php 
error_reporting(E_ALL); 
ini_set('display_errors', TRUE); 
ini_set('display_startup_errors', TRUE);

$conn = new mysqli('localhost', 'root', 'vj4321@*', 'alumni');

if($conn->connect_error){
die("<b>Error</b> ".$conn->connect_error);
}

$rollno = $_POST["rollno"];
$pass = $_POST["pass"];

function redirect($url, $rollno) {
$a = base64_encode($rollno);
    ob_start();
    header('Location: '.$url."?r=".$a);
    ob_end_flush();
    die();
}

$sql = "select * from users where rollno='".$rollno."'";

$result = $conn->query($sql);

while($output = $result->fetch_assoc()){
if($output["password"] == $pass){
$url = "/form.php";
if($rollno == "99XX9912"){
$url = "retrivefront.php";
}
redirect($url, $rollno);
} else {
echo "Incorrect Username or Password";
}
}
?>
