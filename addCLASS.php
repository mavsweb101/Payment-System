<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Student</title>
</head>
<style>
#addstudent{
	background-color:#0FF;	
}


form{
	margin-left: 100px;
	font-size: 15px;
	font-family: Keep Calm;
}

#page2{
	position: absolute;
	margin-top:220px;
	margin-left:280px;
	
}

button{
	position:absolute;
	margin-left:300px;
	margin-top:300px;
	width:100px;
	height:50px;
	border-radius:10px;

}

#save {
	margin-top:330px;
	margin-left:550px;
}

#COURSE {
	position:relative;
	margin-left:-160px;
	margin-top:10px;
	
}


.fees{
	margin-top:30px;
	position:absolute;
	margin-left:-40px;
}

option, input{
	font-family: Keep Calm;
	font-size:12px;
}

#pangalan{
	margin-left:-700px;
	 font-family: Keep Calm;
	 font-size: 25px;
 }

</style>
<body>
<?php include ('header2.php');?>

<?php include ('database.php');

if(isset($_POST['submitBtn']))
{
	$course = $_POST['course'];
	$year = $_POST['year'];
	$registration = $_POST['registration'];
	$tuition = $_POST['tuition'];
	$laboratory = $_POST['laboratory'];
	$library = $_POST['library'];
	$entrance = $_POST['entrance'];
	$counceling = $_POST['counceling'];
	$falp = $_POST['falp'];
	$med_dental = $_POST['med_dental'];
	$univsbo = $_POST['univsbo'];
	$univorgan = $_POST['univorgan'];
	$journal = $_POST['journal'];
	$fine = $_POST['fine'];
	$athletics = $_POST['athletics'];
	$pe = $_POST['pe'];
	$id = $_POST['id'];
	$nstp = $_POST['nstp'];
	$sociocultural = $_POST['sociocultural'];
	$total = $_POST['total'];

$insert= "INSERT INTO class(id_viewCLASS, course, year, registration, tuition, laboratory, library, entrance, counceling, falp, med_dental, univsbo, univorgan, journal, fine, athletics, pe, id, nstp, sociocultural, total)VALUES(NULL, '$course', '$year','$registration', '$tuition', '$laboratory', '$library', '$entrance', '$counceling', '$falp', '$med_dental', '$univsbo','$univorgan', '$journal', '$fine', '$athletics', '$pe', '$id', '$nstp', '$sociocultural', '$total')";
		$result=mysql_query($insert);
		
		if($result){
			echo"<script>alert('success')</script>";
		}else{
			echo"<script>alert('not success')</script>";
		}
			}
?>
<center>
<div id="main">

			
</div>

<div id="page2">

<form method="post">
    <div class="fees" id="COURSE">
		<label>Course</label>
			<select name="course"> 
			<option value=""> Select Course </option>
				<?php
						
				
						$query = mysql_query ("SELECT * FROM enrolment_dept_course");
							while ($row = mysql_fetch_array($query))
							{
								$course = $row['course_title'];	
				?>
			<option value="<?php echo $row['course_title']; ?>" > <?php echo $course; ?></option>
				<?php
							}
				?>
			</select>

		<label>Year Level</label>	
			<select name="year"> 
			<option value=""> Select Year </option><?php
				
						$query = mysql_query ("SELECT * FROM enrolment_year");
							while ($row = mysql_fetch_array($query))
							{
								$year = $row['year_level'];	
				?>
			<option value="<?php echo $row['year_level']; ?>" > <?php echo $year; ?></option>
				<?php
							}
				?>
			
			
			</select>
	</div>	
	
	<div class="fees">
	<label id="pangalan">Fees</label></br></br>
	<table border="0"  width="550px">
		<tr>
			<td>Registration</td>
			<td><input type="number" name="registration" class="number" autofocus="autofocus" /></td>
			<td>Tuition</td>
			<td><input type="number" name="tuition" class="number" required/></td>
		</tr>
		<tr>
			<td>Laboratory</td>
			<td> <input type="number" name="laboratory" class="number"  /></td>
			<td>Library</td>
			<td> <input type="number" name="library" class="number"  /></td>
		</tr>
		<tr>
			<td>Entrance</td>
			<td> <input type="number" name="entrance" class="number"  /></td>			
			<td>Counceling</td>
			<td> <input type="number" name="counceling" class="number"  /></td>
		</tr>	
		<tr>
			<td>FALP</td>
			<td> <input type="number"  name="falp" class="number"  /></td>
			<td>Med./Dental</td>
			<td> <input type="number" name="med_dental" class="number"  /></td>
		</tr>
		<tr>
			<td>Univ. SBO</td>
			<td> <input type="number" name="univsbo" class="number"  /></td>			
			<td>Univ. Organ</td>
			<td> <input type="number" name="univorgan" class="number"  /></td>
		</tr>	
		<tr>
			<td>Journal</td>
			<td> <input type="number" name="journal" class="number"  /></td>
			<td>Fine</td>
			<td> <input type="number" name="fine" class="number"  /></td>
		</tr>
		<tr>
			<td>Athletics</td>
			<td> <input type="number" name="athletics" class="number"  /></td>
			<td>P.E.</td>
			<td> <input type="number" name="pe" class="number"  /></td>
						
		</tr>
		<tr>
			<td>I.D.</td>
			<td> <input type="number" name="id" class="number"  /></td>
			<td>N.S.T.P.</td>
			<td> <input type="number" name="nstp" class="number"  /></td>
			
		</tr>	
		<tr>
			<td>Socio Cultural</td>
			<td> <input type="number" name="sociocultural" class="number"  />
			</td><td>Total</td>
			<td><input type="text" name="total" id="total"/></td>
		</tr>		
	</table>
		</div>
        <button name="submitBtn" class="btn">Save</button>
		
	
<script>
	$('.number').keyup(function() {
     var sum = 0;
    $('.number').each(function() {
        sum += Number($(this).val());
    });
    $('#total').val(sum);
     
});
</script>
		
	
		

</div>
</form>	
</center>
</body>
</html>