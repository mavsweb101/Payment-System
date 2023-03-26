<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Log</title>
</head>
<style>

table{
	text-align: center;
	margin-left: 360px;
	width:500px;
	font-size:20px;
	font-family: Keep Calm;
								
}

#important{
		font-size:20px;
		font-family: Keep Calm;
		background-color: black;
		color: white;
}

#IT {
	margin-left:70px;
	position: absolute;
}

#BSA {
	margin-left:500px;
	margin-top:-396px;
}

#style{
	margin-top:-46px;
	background-color:white;
	border-radius: 10px;
	margin-left:3px;
	width:1360px;
	height:490px;
	position:absolute;
	opacity:.6;
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

<div id="style">

</div>
	
<form method="POST" id="IT">
<table border="0" id="BSIT">
	
		<tbody>
				<thbody>
		<tr>	
			<th colspan="2" id="important">Id</th>
			<th id="important"> Course and Year</th>
		</tr>
		</thbody>
		<?php

			require_once "../classDB.php";
				$db = new classDB;
				$db->connect();
				$query = mysql_query ("SELECT * FROM class");
					while ($row = mysql_fetch_array($query))
					{
						$id_viewCLASS = $row['id_viewCLASS'];
						$course = $row['course'];
						$year = $row['year'];
						$course_year = ucfirst($course).", ".ucfirst($year)." "?>
		<tr>	
			<td colspan="2" > <?php echo $id_viewCLASS ?> </td>
			
			<?php 
				echo"<td colspan='2' ><a href='class.php?id=$course&year=$year'>$course_year</a> </td>";
			?>
		</tr>
			
					<?php
						}
					?>
				
</tbody>

</table>
</form>

</body>

</html>