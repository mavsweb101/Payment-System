<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Record Report</title>
</head>
<style>



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

	
<form id="form2"method="POST">
<table border="1" id="BSIT">
		<tbody>
		<thbody>
		<tr>	
			<th>Course</th>
			<th> Year</th>
			<th> Update</th>
			<th> Delete</th>
		</tr>
		</thbody>
		
		<?php

			require_once "database.php";

				$query = mysql_query ("SELECT * FROM tbl_className");
					while ($row = mysql_fetch_array($query))
					{
						$course = $row['course'];
						$year = $row['year'];
					
		?>

		<tr>	
			<td><?php echo $course ?></td>
			<td><?php echo $year   ?></td>
			<td> <a href=""> Update </a></td>
			<td> <a href=""> Delete</a></td>
		</tr>
		
		
					
					<?php
						}
					?>
</tbody>
</table>
</form>









<?php

require_once "database.php";



if(isset($_POST['submit']))
{	


	$course = $_POST['course'];
	$year = $_POST['year'];
	
		$insert = "INSERT INTO tbl_className (id,course,year)
			VALUES (NULL, '$course', '$year')";
			
		$result=mysql_query($insert);
		
		if($result){
			echo"<script>alert('success')</script>";
			echo"<script>document.location='setting.php'</script>";
		}else{
			echo"<script>alert('not success')</script>";
		}
			}
	
?>


<form id="form1" method="post">
	<div id="cy">
		<labwxel> Course:</label> </br>
		<input type="text" name="course" placeholder="Course" required>
	</br>
		<label> Year</label></br>
		<input type="text" name="year" placeholder="Year" required>
	
	</div>
	
				<div class="buttonSAVE" id="save">
					<button name="submit" class="btn btn-success">Save</button>
				</div>
</form>
</body>
</html>