<!DOCTYPE html> <html> <head>
	<title>TCE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<p class="alumni">ALUMNI SCHOLARSHIP FORM</p>
<script src="js/jquery.min.js"></script>
<script>

$(document).ready(function(){

$("#bankloan").show();
$("#othersch").stop(true,true).show(500);

 if($('input[name=hstudy]:checked', '#sform').val() == "diplomo") {
        $("#diplomo").stop(true,true).show(500);
        $("#plustwo").stop(true,true).hide(500);
        $("#plustwos").stop(true,true).hide(500);
   } else {
        $("#diplomo").stop(true,true).hide(500);
        $("#plustwo").stop(true,true).show(500);
        $("#plustwos").stop(true,true).show(500);
   }


 if($('input[name=parent]:checked', '#sform').val() == "father") {

        $("#fname").stop(true,true).show(500);
        $("#focc").stop(true,true).show(500);
        $("#fincome").stop(true,true).show(500);

        $("#mname").stop(true,true).hide(500);
        $("#mocc").stop(true,true).hide(500);
        $("#mincome").stop(true,true).hide(500);

   } else if ($('input[name=parent]:checked', '#sform').val() == "mother") {

        $("#fname").stop(true,true).hide(500);
        $("#focc").stop(true,true).hide(500);
        $("#fincome").stop(true,true).hide(500);

        $("#mname").stop(true,true).show(500);
        $("#mocc").stop(true,true).show(500);
        $("#mincome").stop(true,true).show(500);
 
   } else {

        $("#fname").stop(true,true).show(500);
        $("#focc").stop(true,true).show(500);
        $("#fincome").stop(true,true).show(500);

        $("#mname").stop(true,true).show(500);
        $("#mocc").stop(true,true).show(500);
        $("#mincome").stop(true,true).show(500);

}

if($('input[name=sipl]:checked', '#sform').val() == "bro") {

        $("#bname").stop(true,true).show(500);
        $("#bocc").stop(true,true).show(500);

        $("#sname").stop(true,true).hide(500);
        $("#socc").stop(true,true).hide(500);

   } else if ($('input[name=sipl]:checked', '#sform').val() == "sis") {

        $("#bname").stop(true,true).hide(500);
        $("#bocc").stop(true,true).hide(500);

        $("#sname").stop(true,true).show(500);
        $("#socc").stop(true,true).show(500);
} else {

        $("#bname").stop(true,true).show(500);
        $("#bocc").stop(true,true).show(500);

        $("#sname").stop(true,true).show(500);
        $("#socc").stop(true,true).show(500);

}


$('#sform input').on('change', function() {

  if($('input[name=yes]:checked', '#sform').val() == "No") {
	$("#bankloan").stop(true,true).hide(500);
   } else {
	$("#bankloan").stop(true,true).show(500);
   }

 if($('input[name=hstudy]:checked', '#sform').val() == "diplomo") {
        $("#diplomo").stop(true,true).show(500);
	$("#plustwo").stop(true,true).hide(500);
	$("#plustwos").stop(true,true).hide(500);
   } else {
	$("#diplomo").stop(true,true).hide(500);
        $("#plustwo").stop(true,true).show(500);
	$("#plustwos").stop(true,true).show(500);
   }

 if($('input[name=yes1]:checked', '#sform').val() == "No") {
        $("#othersch").stop(true,true).hide(500);
   } else {
        $("#othersch").stop(true,true).show(500);
   }


 if($('input[name=parent]:checked', '#sform').val() == "father") {

        $("#fname").stop(true,true).show(500);
	$("#focc").stop(true,true).show(500);
	$("#fincome").stop(true,true).show(500);

	$("#mname").stop(true,true).hide(500);
        $("#mocc").stop(true,true).hide(500);
        $("#mincome").stop(true,true).hide(500);

   } else if ($('input[name=parent]:checked', '#sform').val() == "mother") {

        $("#fname").stop(true,true).hide(500);
        $("#focc").stop(true,true).hide(500);
        $("#fincome").stop(true,true).hide(500);

        $("#mname").stop(true,true).show(500);
        $("#mocc").stop(true,true).show(500);
        $("#mincome").stop(true,true).show(500);
 
   } else {

        $("#fname").stop(true,true).show(500);
        $("#focc").stop(true,true).show(500);
        $("#fincome").stop(true,true).show(500);

        $("#mname").stop(true,true).show(500);
        $("#mocc").stop(true,true).show(500);
        $("#mincome").stop(true,true).show(500);

}

if($('input[name=sipl]:checked', '#sform').val() == "bro") {

        $("#bname").stop(true,true).show(500);
        $("#bocc").stop(true,true).show(500);

        $("#sname").stop(true,true).hide(500);
        $("#socc").stop(true,true).hide(500);

   } else if ($('input[name=sipl]:checked', '#sform').val() == "sis") {

        $("#bname").stop(true,true).hide(500);
        $("#bocc").stop(true,true).hide(500);

        $("#sname").stop(true,true).show(500);
        $("#socc").stop(true,true).show(500);
} else {

        $("#bname").stop(true,true).show(500);
        $("#bocc").stop(true,true).show(500);

        $("#sname").stop(true,true).show(500);
        $("#socc").stop(true,true).show(500);

}



});

});

</script>
</head>
<body>
<?php
$conn = new mysqli('localhost', 'root', 'vj4321@*', 'alumni');

$a = $_GET["r"];
$o = base64_decode($a);
$sql = "select * from users where rollno='".$o."'";

$result = $conn->query($sql);

while($output = $result->fetch_assoc()){
if($sql){
?>
<form id="sform" action="insert.php" method="POST">

 <div class="form-group">
 <table border=0px><tr><td> <label>Name of the Student</label>
  <input type="text" id="name" name="name" class="form-control"></td>
  <td><label>Roll Number</label><input type="text" id="rollno" name="rollno" class="form-control"></td></tr></table>
 </div>

<table border=0px><tr><td>
  <div class="form-group">
    <label>Degree</label>
    <input type="text" id="degree" name="degree" class="form-control">
  </div></td>

  <td><div class="form-group">
       <label>Branch</label>
    <select id="branch" name="branch">
      <option>Civil</option>
      <option>Mech</option>
      <option>EEE</option>
      <option>ECE</option>
      <option>CSE</option>
      <option>IT</option>
      <option>Mechatronics</option>
    </select>

  </div></td></tr></table>

<table border=0px><tr><td>
   <label>Semester</label>
    <select id="sem" name="sem">
      <option>I</option>
      <option>II</option>
      <option>III</option>
      <option>IV</option>
      <option>V</option>
      <option>VI</option>
      <option>VII</option>
      <option>VIII</option>
    </select>
</td>
<td>
<p><div class="input-group">    <label>Admission Category</label>

   <select id="admission" name="admission">
      <option>Aided</option>
      <option>Self Supported</option>
    </select></div></p></td></tr></table>

<div class="input-group">
        <input type="radio" name="parent" value="father"> Father
        <input type="radio" name="parent" value="mother" /> Mother
	<input type="radio" name="parent" value="both" checked> Both
</div>

<table border=0px><tr><td>  <div id="fname" class="form-group">
    <label>Father's name</label>
    <input type="text" id="fname" name="fname" class="form-control"></td>
</div>

<td>
<div  id="focc"  class="form-group">
    <label>Occupation</label>
    <input type="text" id="foccupation" name="foccupation" class="form-control"></td>
</div>

<td>
<div  id="fincome"  class="form-group">
    <label>Annual Income</label>
    <input type="text" id="fincome" name="fincome" class="form-control">
  </div>
</td></tr></table>


<table border=0px><tr><td> 
  <div id="mname"  class="form-group">
    <label>Mother's name</label>
    <input type="text" id="mname" name="mname" class="form-control">
</div></td>
<td><div id="mocc" class="form-group">
    <label>Occupation</label>
    <input type="text" id="moccupation" name="moccupation" class="form-control">
</div></td>
<td><div id="mincome"  class="form-group">
    <label>Annual Income</label>
    <input type="text" id="mincome" name="mincome" class="form-control">
  </div></td></tr></table>



  <div class="form-group">
    <label>Percentage of marks in X std</label>
    <input type="text" id="tenth" name="tenth" class="form-control">
  </div>

   <input type="radio" name="hstudy" value="plus" checked> Plus Two
   <input type="radio" name="hstudy" value="diplomo" /> Diplomo

<table border=0px><tr><td> <div id="plustwo" class="form-group">
    <label>Percentage of marks in XII std</label>
    <input type="text" id="twelth" name="twelth" class="form-control">
</div></td>
<td><div id="plustwos" class="form-group">
    <label>Cut-off mark in Plus Two</label>
    <input type="text" id="cutoff" name="cutoff" class="form-control">
  </div></td></tr></table>


 <div id="diplomo" class="form-group">
    <label>percentage of marks in Diploma</label>
    <input type="text" id="diploma" name="diploma" class="form-control">
  </div>

   <div class="form-group">
    <label>CGPA till last semester</label>
    <input type="text" id="cgpa" name="cgpa" class="form-control" >
  </div>
   <div class="form-group">
    <label>Number of standing arrears if any</label>
    <input type="text" id="arrears" name="arrears" class="form-control">
  </div>
   <div class="form-group">
    <label>Percentage of Attendance in last semester</label>
    <input type="text" id="Attendance" name="Attendance" class="form-control">
  </div>

    <label>Bank loan availed</label>

	<input type="radio" name="yes" value="Yes" checked> Yes 
	<input type="radio" name="yes" value="No" /> No 

<div id="bankloan" class="form-group">
    <label>Amount</label>
    <input type="text" id="amount" name="amount" class="form-control">

    <label>Bank</label>
    <input type="text" id="bank" name="bank" class="form-control">
  </div>

<p>      <label>Other Scholarship availing</label>
    <input type="radio" id="yes1" name="yes1" value="Yes"  checked>Yes &nbsp;
    <input type="radio" id="yes1" name="yes1" value="No">No  &nbsp;</p>

<div id="othersch" class="form-group">  
  <label>Amount</label>
    <input type="text" id="amount1" name="amount1" class="form-control">&nbsp;
    <label>Scheme</label>
    <input type="text" id="scheme" name="scheme" class="form-control"> &nbsp;
  </div>

<div class="input-group">
        <input type="radio" name="sipl" value="bro"> Brother
        <input type="radio" name="sipl" value="sis" /> Sister
        <input type="radio" name="sipl" value="both" checked> Both
</div>


<table border="0px"><tr><td>  <div id="bname" class="form-group">
    <label>Number of Brothers</label>
    <input type="text" id="bro" name="bro" class="form-control">
</div>
</td><td>
<div id="bocc" class="form-group">
<label>Occupation</label>
    <input type="text" id="boccupation" name="boccupation" class="form-control">
  </div>

</td></tr></table>
  </div>


<table border=0px><tr><td>  <div  id="sname"  class="form-group">
    <label>Number of Sisters</label>
    <input type="text" id="sis" name="sis" class="form-control"></td>
</div>
 <td> <div id="socc"  class="form-group"><label>Occupation</label>
    <input type="text" id="soccupation" name="soccupation" class="form-control"></td></tr></table>
  </div>

   <div class="input-group">
    <label>First Graduate in your Family</label>
    <input type="radio" id="yes2" name="yes2" class="form-control" checked>Yes &nbsp;
    <input type="radio" id="yes2" name="yes2" class="form-control" checked>No<br>
  </div>

<table border="0px"><tr><td>
  <div class="form-group">
    <label>Address</label>
    <input type="text" id="address" name="address" class="form-control">
  </div></td>
<td>  <div class="form-group">
    <label>Mobile No</label>
    <input type="text" id="mno" name="mno" class="form-control" min="10">
  </div></td></tr></table>


  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


</body>
</html>
<?php
} else {
echo "Unauthorized user";
return ;
}
}
?>
