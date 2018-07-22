<?php error_reporting(E_ALL); ini_set('display_errors', TRUE); ini_set('display_startup_errors', TRUE);

$conn = new mysqli('localhost', 'root', 'vj4321@*', 'alumni');

if($conn->connect_error){
die("<b>Error</b> ".$conn->connect_error);
}

$name = $_POST["name"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];
$roll = $_POST["roll"];

if($pass != $cpass){
echo "Passwords Doesn't Match";
return;
}

$query = "select * from users where rollno='".$roll."'";

$output = $conn->query($query);

if($output->fetch_assoc()){
echo "Roll Number: ".$roll." Already Exists";
return;
}

$sql = "insert into users (username, password, rollno, role) VALUES ('".$name."','".$pass."','".$roll."','student')";

$result = $conn->query($sql);

if($result){
$msg =  "You've Registered Successfully, ";

$url = "/index.php";
redirect($url);
}

function redirect($url) {
$msg =  "User Created Successfully";
    ob_start();
    header('Location: '.$url."?a=".$msg);
    ob_end_flush();
    die();
}


?>
