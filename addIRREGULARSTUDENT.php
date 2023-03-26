<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Student</title>
</head>
<style>
body {
	background-color: blue;
}
</style>

<body>
<?php
include ('header2.php');
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<center>
</br></br>	
<?php

require_once "database.php";



if(isset($_POST['submit']))
{	

	$id_reg = $_POST['id_reg'];
	$reg_classification = $_POST['reg_classification'];
	$school_year = $_POST['school_year'];
	$semmester = $_POST['semmester'];
	$course = $_POST['course'];
	$major = $_POST['major'];
	$fname = $_POST['fname'];
	$gname = $_POST['gname'];
	$mname = $_POST['mname'];	
	
	$insert = mysql_query("INSERT INTO tbl_regularstudentinfo (id_reg,'reg_classification','school_year','semmester','course','major','fname','gname','mname') 
				VALUES($id_reg,'$reg_classification','$school_year','$semmester','$course','$major','$fname','$gname','$mname')");
}
	

?>
<form id="stud_info_FORM" method="post">							  
	<div class="fees">
	<label>Student Information</label></br></br>
	
	<table border="1" width="500px">
		<tr> <td colspan="2"> <label>Id:</label> 
				  <input name="id_reg" type="text"> 
			 </td> 
		</tr>
		<tr>
			<td>Classification</td>
			<td>
				<input name="reg_classification" value="First Year" type="radio">
					<label>1st Year</label>
				<input name="reg_classification" value="Second Year" type="radio">
					<label>2nd Year</label>
				<input name="reg_classification" value="Third Year" type="radio">
					<label>3rd Year</label>
				<input name="reg_classification"  value="Fourth Year" type="radio">
					<label>4th Year</label>
			</td>
		</tr>
		<tr>
			<td>School Year</td>
			<td><input type="text" id="rental" name="school_year" placeholder="School Year" required> 
			-
			<input type="text" id="rental" name="school_year" placeholder="School Year" required> </td>
		</tr>

		<tr>
			<td>Semmester </td>
			<td>
				<input name="semmester" value="First" type="radio">
			<label>1st</label>
				<input name="semmester" value="Second" type="radio">
			<labe>2nd</label>
				<input name="semmester" value="Summer" type="radio">
			<label>Sum</label>
			</td>
		</tr>
		<tr>
			<td>Course</td>
			<td><input type="text" name="course" placeholder="Degree/Course" required></td>
		</tr>
		<tr>
			<td>Major</td>
			<td><input type="text" name="major" placeholder="Major" required></td>
		</tr>
		
		<tr>
			<td>Family Name</td>
			<td><input type="text" name="fname" placeholder="Family Name" required></td>
		</tr>
		<tr>
			<td>Given Name</td>
			<td><input type="text" name="gname" placeholder="Given Name" required></td>
		</tr>
		<tr>
			<td>Middle Name</td>
			<td><input type="text" name="mname" placeholder="Middle Name" required></td>
		</tr>
		</table>
		</div>


		
		
		
			<div class="buttonSAVE">
				<button name="submit" class="btn btn-success">Save</button>
			</div>
		
</center>
</body>
</html>