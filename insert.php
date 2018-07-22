<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$conn = new mysqli('localhost', 'root', 'vj4321@*', 'alumni');

if($conn->connect_error){
die("<b>Error</b> ".$conn->connect_error);
}

$name = $_POST["name"];
$rollno = $_POST["rollno"];
echo "<br>";
$degree = $_POST["degree"];
echo "<br>";
$branch = $_POST["branch"];
echo "<br>";
$admission = $_POST["admission"];
echo "<br>";
$fname = $_POST["fname"];
echo "<br>";
$foccupation = $_POST["foccupation"];
echo "<br>";
$fincome = $_POST["fincome"];
echo "<br>";
$mname = $_POST["mname"];
echo "<br>";
$moccupation = $_POST["moccupation"];
echo "<br>";
$mincome = $_POST["mincome"];
echo "<br>";
$tenth = $_POST["tenth"];
echo "<br>";
$twelth = $_POST["twelth"];
echo "<br>";
$diploma = $_POST["diploma"];
echo "<br>";
$cutoff = $_POST["cutoff"];
echo "<br>";
$cgpa = $_POST["cgpa"];
echo "<br>";
$arrears = $_POST["arrears"];
echo "<br>";
$attendance = $_POST["Attendance"];
echo "<br>";
$yes = $_POST["yes"];
echo "<br>";
$amount = $_POST["amount"];
echo "<br>";
$bank = $_POST["bank"];
echo "<br>";
$yes1 = $_POST["yes1"];
echo "<br>";
$amount1 = $_POST["amount1"];
echo "<br>";
$scheme = $_POST["scheme"];
echo "<br>";
$bro = $_POST["bro"];
echo "<br>";
$boccupation = $_POST["boccupation"];
echo "<br>";
$sis = $_POST["sis"];
echo "<br>";
$soccupation = $_POST["soccupation"];
echo "<br>";
$yes2 = $_POST["yes2"];
echo "<br>";
$address = $_POST["address"];
echo "<br>";
$mno = $_POST["mno"];

$oincome = $fincome+$mincome;
$arr = $arrears;
$percentage = $cgpa;
$att= $attendance;
$schamount=$amount1;

if($oincome <= 50000){
$fmarks = 20;
} else if ($oincome > 50000 && $oincome <= 75000){
$fmarks = 16;
} else if ($oincome > 75000 && $oincome <= 100000) {
$fmarks = 12;
} else if ($oincome > 100000 && $oincome <= 150000) {
$fmarks = 8;
} else {
$fmarks = 4;
}

if($arr <= 1){
$amarks = 5;
} else if ($arr == 2){
$amarks = 4;
} else if ($arr == 3) {
$amarks = 3;
} else if ($arr == 4) {
$amarks = 2;
} else {
$amarks = 1;
}

if($percentage >= 8.0){
$cmarks = 10;
} else if ($percentage >= 7.5 && $percentage < 8.0){
$cmarks = 8;
} else if ($percentage >= 7.0 && $percentage < 7.5) {
$cmarks = 6;
} else if ($percentage >= 6.0 && $percentage < 7.0) {
$cmarks = 4;
} else {
$cmarks = 2;
}

if($att >= 95){
$attmarks = 5;
} else if ($att >= 90 && $att < 95){
$attmarks = 4;
} else if ($att >= 85 && $att < 90) {
$attmarks = 3;
} else if ($att >= 80 && $att < 85) {
$attmarks = 2;
} else if ($att >=75 && $att < 80){
$attmarks = 1;
}


if($schamount >= NULL){
$schmarks = 5;
} else if ($schamount <= 5000){
$schmarks = 4;
} else if ($schamount >= 5000 && $schamount <= 10000) {
$schmarks = 3;
} else {
$schmarks = 2;
}

$total = $schmarks+$attmarks+$cmarks+$fmarks+$amarks;

$sql = "insert into scholar_form (rollno, total_marks,fin_marks,sch_marks,arrear_marks,cgpa_marks,att_marks,student_name,degree,branch,admission_category,fathers_name,father_occupation,father_income,mother_name,mother_occupation,mother_income,tenth_marks,twelth_marks,diploma_marks,twelth_cutoff,cgpa,arrears,lastsem,loan,loan_amount,loan_bank,other_schloarship,otsch_amount,otsch_scheme,no_bro,bro_occupation,no_sis,sis_occupation,first_grad,address,mobile_number) VALUES ('".$rollno."','".$total."','".$fmarks."','".$schmarks."','".$amarks."','".$cmarks."','".$attmarks."','".$name."','".$degree."','".$branch."','".$admission."','".$fname."','".$foccupation."','".$fincome."','".$mname."','".$moccupation."','".$mincome."','".$tenth."','".$twelth."','".$diploma."','".$cutoff."','".$cgpa."','".$arrears."','".$attendance."','".$yes."','".$amount."','".$bank."','".$yes1."','".$amount1."','".$scheme."','".$bro."','".$boccupation."','".$sis."','".$soccupation."','".$yes2."','".$address."','".$mno."')";

$result = $conn->query($sql);

if($result){
echo "Values Inserted Successfully";
}

?>
