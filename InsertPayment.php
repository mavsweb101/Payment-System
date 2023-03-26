<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Log</title>
<link rel="stylesheet" type="text/css" href="css2.css" />
</head>
<style>


</style>

<body>

<?php
include ('header2.php');



$course=$_REQUEST['course'];
			$course=$_REQUEST['course'];
			$year=$_REQUEST['year'];
			require_once "database.php";

				$query = mysql_query ("SELECT * FROM class where course='$course' && year='$year' ");
					while ($row = mysql_fetch_array($query))
					{
						$total=$row['total'];
					}
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
<div style="width:100%;margin-top:0px; background-color:gray;">
	<form method="POST">
		<table style="width:500px;margin:auto;">
			<tr>
				<td>
				<?php
					echo"
						<input type='text' value='$total'/><br>
						<input type='text' value='$total'/><br>
						<input type='text' value='$total'/><br>
						<input type='text' value='$total'/><br>
					";
				?>	
				</td>
			</tr>
		</table>
	</form>
</div>	

 
</html>