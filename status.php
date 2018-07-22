
<html>
<body>
<center><h2>Submitted Forms</h2></center>
</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$conn = new mysqli('localhost', 'root', 'vj4321@*', 'alumni'	);

if($conn->connect_error){
die("<b>Error</b> ".$conn->connect_error);
}

$sql = "select * from scholar_form where rollno='".$_GET['rollno']."'";

$result = $conn->query($sql);

while($output = $result->fetch_assoc()){

echo "<b>Student Name: ".$output['student_name']."</b>";
echo "<br>";
echo "--------------------------------------------------";
echo "<table border='1px'><tr><th>student_name</th><td>".$output['student_name']."</td></tr><tr><th>degree</th><td>".$output['degree']."</td></tr><th>branch<td>".$output['branch']."</td></th></tr><th>admission_category<td>".$output['admission_category']."</td></th></tr><th>fathers_name<td>".$output['fathers_name']."</td></th></tr><th>father_occupation<td>".$output['father_occupation']."</td></th></tr><th>father_income</th><td>".$output['father_income']."</td></tr><th>mother_name<td>".$output['mother_name']."</td></th></tr><th>mother_occupation</th><td>".$output['mother_occupation']."</td></tr><th>mother_income<td>".$output['mother_income']."</td></th></tr><th>tenth_marks<td>".$output['tenth_marks']."</td></th></tr></tr>
<tr><th>twelth_marks</th><td>".$output['twelth_marks']."</td></tr>
<tr><th>Roll No</th><td>".$output['rollno']."</td></tr>
<tr><th>diploma_marks</th><td>".$output['diploma_marks']."</td></tr>
<tr><th>twelth_cutoff</th><td>".$output['twelth_cutoff']."</td></tr>
<tr><th>cgpa</th><td>".$output['cgpa']."</td></tr>
<tr><th>arrears</th><td>".$output['arrears']."</td></tr>
<tr><th>lastsem</th><td>".$output['lastsem']."</td></tr>
<tr><th>loan</th><td>".$output['loan']."</td></tr>
<tr><th>loan_amount</th><td>".$output['loan_amount']."</td></tr>
<tr><th>loan_bank</th><td>".$output['loan_bank']."</td></tr>
<tr><th>other_schloarship</th><td>".$output['other_schloarship']."</td></tr>
<tr><th>otsch_amount</th><td>".$output['otsch_amount']."</td></tr>
<tr><th>otsch_scheme</th><td>".$output['otsch_scheme']."</td></tr>
<tr><th>no_bro</th><td>".$output['no_bro']."</td></tr>
<tr><th>bro_occupation</th><td>".$output['bro_occupation']."</td></tr>
<tr><th>no_sis</th><td>".$output['no_sis']."</td></tr>
<tr><th>sis_occupation</th><td>".$output['sis_occupation']."</td></tr>
<tr><th>first_grad</th><td>".$output['first_grad']."</td></tr>
<tr><th>address</th><td>".$output['address']."</td></tr>
<tr><th>mobile_number</th><td>".$output['mobile_number']."</td></tr>
<tr><th>Finanical Marks</th><td>".$output['fin_marks']."</td></tr>
<tr><th>Arrear Marks</th><td>".$output['arrear_marks']."</td></tr>
<tr><th>Scholarship Marks</th><td>".$output['sch_marks']."</td></tr>
<tr><th>Attendance Marks</th><td>".$output['att_marks']."</td></tr>
<tr><th>CGPA Marks</th><td>".$output['cgpa_marks']."</td></tr>
<tr><th>Conduct Marks</th><td>".$output['conduct_marks']."</td></tr>
<tr><th>Total Marks</th><td>".$output['total_marks']."</td></tr>

<table>";

echo "<br>";
}

?>
