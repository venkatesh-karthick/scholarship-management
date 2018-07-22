<!DOCTYPE html>
<html>
<head>
	<title>TCE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1>ALUMNI SCHOLARSHIP FORM</h1>
<script src="js/jquery.min.js"></script>
<script>

$(document).ready(function(){

$("#bankloan").show();
$("#diplomo").stop(true,true).hide(500);
$("#plustwo").stop(true,true).show(500);


$('#sform input').on('change', function() {

  if($('input[name=yes]:checked', '#sform').val() == "No") {
	$("#bankloan").stop(true,true).hide(500);
   } else {
	$("#bankloan").stop(true,true).show(500);
   }
 if($('input[name=hstudy]:checked', '#sform').val() == "diplomo") {
        $("#diplomo").stop(true,true).show(500);
	$("#plustwo").stop(true,true).hide(500);
   } else {
	$("#diplomo").stop(true,true).hide(500);
        $("#plustwo").stop(true,true).show(500);
   }
});

});

</script>
</head>
<body>

<form id="sform" action="insert.php" method="POST">
 <div class="form-group">
    <label>Name of the Student</label>
<input type="text" id="name" name="name" class="form-control">
<label>Roll Number</label><input type="text" id="rollno" name="rollno" class="form-control">
  </div>
  <div class="form-group">
    <label>Degree</label>
    <input type="text" id="degree" name="degree" class="form-control">
  </div>
  <div class="form-group">
    <label>Branch</label>
    <input type="text" id="branch" name="branch" class="form-control">
  </div>
  <div class="form-group">
    <label>Admission Category</label>
    <select id="admission" name="admission" onchange="pagechange()">
      <option>Aided</option>
      <option>Self Supported</option>
    </select>
  </div>
  <div class="form-group">
    <label>Father's name</label>
    <input type="text" id="fname" name="fname" class="form-control">
    &nbsp;<label>Occupation</label>
    <input type="text" id="foccupation" name="foccupation" class="form-control">
    &nbsp;<label>Annual Income</label>
    <input type="number" id="fincome" name="fincome" class="form-control">
  </div>
  <div class="form-group">
    <label>Mother's name</label>
    <input type="text" id="mname" name="mname" class="form-control">
    &nbsp;<label>Occupation</label>
    <input type="text" id="moccupation" name="moccupation" class="form-control">
    &nbsp;<label>Annual Income</label>
    <input type="number" id="mincome" name="mincome" class="form-control">
  </div>
  <div class="form-group">
    <label>Percentage of marks in X std</label>
    <input type="number" id="tenth" name="tenth" class="form-control">
  </div>

   <input type="radio" name="hstudy" value="plus" checked> Plus Two
   <input type="radio" name="hstudy" value="diplomo" /> Diplomo

   <div id="plustwo">
    <label>Percentage of marks in XII std</label>
    <input type="number" id="twelth" name="twelth" class="form-control">
    <label>Cut-off mark in Plus Two</label>
    <input type="number" id="cutoff" name="cutoff" class="form-control">
  </div>

 <div id="diplomo">
    <label>percentage of marks in Diploma</label>
    <input type="number" id="diploma" name="diploma" class="form-control">
  </div>

   <div class="form-group">
    <label>CGPA till last semester</label>
    <input type="range" min="0" max="10" id="cgpa" name="cgpa" class="form-control" >
  </div>
   <div class="form-group">
    <label>Number of standing arrears if any</label>
    <input type="number" id="arrears" name="arrears" class="form-control">
  </div>
   <div class="form-group">
    <label>Percentage of Attendance in last semester</label>
    <input type="number" id="Attendance" name="Attendance" class="form-control">
  </div>

    <label>Bank loan availed</label>

	<input type="radio" name="yes" value="Yes" checked> Yes 
	<input type="radio" name="yes" value="No" /> No 

 <div id="bankloan">
    <label>Amount</label>
    <input type="text" id="amount" name="amount" class="form-control"  checked> &nbsp;
    <label>Bank</label>
    <input type="text" id="bank" name="bank" class="form-control" checked> &nbsp;
  </div>

   <div class="input-group">
    <label>Other Scholarship availing</label>
    <input type="radio" id="yes1" name="yes1" class="form-control"  checked>Yes &nbsp;
    <input type="radio" id="yes1" name="yes1" class="form-control">No  &nbsp;
    <label>Amount</label>
    <input type="text" id="amount1" name="amount1" class="form-control">&nbsp;
    <label>Scheme</label>
    <input type="text" id="scheme" name="scheme" class="form-control"> &nbsp;
    

  </div>
  <div class="form-group">
    <label>Number of Brothers</label>
    <input type="number" id="bro" name="bro" class="form-control">
    &nbsp;&nbsp;<label>Occupation</label>
    <input type="number" id="boccupation" name="boccupation" class="form-control">
 
  </div>

  </div>
  <div class="form-group">
    <label>Number of Sisters</label>
    <input type="number" id="sis" name="sis" class="form-control">
    &nbsp;&nbsp;<label>Occupation</label>
    <input type="number" id="soccupation" name="soccupation" class="form-control">
  </div>
   <div class="input-group">
    <label>First Graduate in your Family</label>
    <input type="radio" id="yes2" name="yes2" class="form-control" checked>Yes &nbsp;
    <input type="radio" id="yes2" name="yes2" class="form-control" checked>No<br>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" id="address" name="address" class="form-control">
  </div>
  <div class="form-group">
    <label>Mobile No</label>
    <input type="number" id="mno" name="mno" class="form-control" min="10">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


</body>
</html>

