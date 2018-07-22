<html>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$conn = new mysqli('localhost', 'root', 'vj4321@*', 'alumni');

if($conn->connect_error){
die("<b>Error</b> ".$conn->connect_error);
}

$sql = "select * from scholar_form";
$a = base64_decode($_GET["r"]);
$query = "select rollno from users where rollno='".$a."'";

$s = $conn->query($query);
$as = $s->fetch_assoc();
$a = $as["rollno"];
if($a == "99XX9912"){
?>
<div data-role="main" class="ui-content">
    <form method="GET" action="retrive.php">
      <fieldset data-role="collapsible">
        <legend>Search By Roll Number</legend>

 <label for="name">Roll Number:</label>
 <input type="text" name="record" id="record">
<p> <input type="submit" data-inline="true" value="Search"></p>

</fieldset>
</div>
</form>


    <form>
      <fieldset>
        <legend>List Roll No.</legend>

<?php
$result = $conn->query($sql);

while($output = $result->fetch_assoc()){

echo "<br>";
echo "<table border='0px'><tr><td><a style='text-decoration:none' href='/retrive.php?record=".$output['rollno']."'>".$output['rollno']."</td></tr><table>";
echo "<br>";
}
} else {
echo "Unauthorized User";
return;
}
?>
</fieldset>
</form>
</body>
</html>

