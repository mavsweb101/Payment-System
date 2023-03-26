<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Log</title>
</head>
<style>

table{
	text-align: center;
	font-family: Keep Calm;
	margin-left: 400px;
	width:350px;
	position: absolute;
	margin-top:-15px;

}

#important{
		font-size:20px;
		background-color: black;
		color: white;
}

#IT {
	margin-left:50px;
}

#BSA {
	margin-left:500px;
	margin-top:-396px;
}


#main {
	border-radius: 10px;
	margin-left:30px;
	margin-top:-30px;
	background-color: white;
	position:absolute;
	width:1290px;
	height:470px;
	opacity: .6;
}

#back{
	font-size: 30px;
	font-family: Keep Calm;
	position: absolute;
	margin-left:1000px;
	margin-top:200px;
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

<div id="main">

</div>
	<table>
		<?php
			$id=$_REQUEST['id'];
			$year=$_REQUEST['year'];
			require_once "database.php";

				$query = mysql_query ("SELECT * FROM class where course='$id' and year='$year'");
					while ($row = mysql_fetch_array($query))
					{
						$course = $row['course'];
						$year = $row['year'];
						$registration = $row['registration'];
						$tuition =$row['tuition'];
						$laboratory = $row['laboratory'];
						$library = $row['library'];
						$entrance = $row['entrance'];
						$counceling = $row['counceling'];
						$falp = $row['falp'];
						$med_dental = $row['med_dental'];
						$univsbo = $row['univsbo'];
						$univorgan = $row['univorgan'];
						$journal =$row['journal'];
						$fine = $row['fine'];	
						$athletics = $row['athletics'];
						$pe = $row['pe'];
						$id = $row['id'];
						$nstp = $row['nstp'];
						$sociocultural = $row['sociocultural'];
						$total = $row['total'];
						$course_year = ucfirst($course).", ".ucfirst($year)." "?>
		<tbody>
			<tr>	
			<td colspan="2" id="important"> <?php echo $course_year ?> </td>
		<tr>
			<td>Registration:</td>
			<td><?php echo $registration ?> </td>
		</tr>
		<tr>
			<td>Tuition:</td>
			<td><?php echo $tuition ?> </td>
		</tr>
		<tr>
			<td>Laboratory:</td>
			<td><?php echo $laboratory?> </td>
		</tr>	
		<tr>
			<td>Library:</td>
			<td><?php echo $library ?> </td>
		</tr>
		<tr>
			<td>Entrance:</td>
			<td><?php echo $entrance ?> </td>
		</tr>	
		<tr>
			<td>Counceling:</td>
			<td><?php echo $counceling ?></td>
		</tr>
		<tr>
			<td>FALP:</td>
			<td><?php echo $falp ?></td>
		</tr>
		<tr>
			<td>Med./Dental:</td>
			<td><?php echo $med_dental ?></td>
		</tr>	
		<tr>
			<td>Univ. SBO:</td>
			<td><?php echo $univsbo ?></td>
		</tr>
		<tr>
			<td>Univ. Organ:</td>
			<td><?php echo $univorgan?></td>
		</tr>
		<tr>
			<td>Journal:</td>
			<td><?php echo $journal ?></td>
		</tr>
		<tr>
			<td>Fine:</td>
			<td><?php echo $fine ?></td>
		</tr>
		<tr>
			<td>Athletics:</td>
			<td><?php echo $athletics ?></td>
		</tr>
		<tr>
			<td>P.E.:</td>
			<td><?php echo $pe ?></td>
		</tr>
		<tr>
			<td>I.D.:</td>
			<td><?php echo $id ?></td>
		</tr>
		<tr>
			<td>N.S.T.P.:</td>
			<td><?php echo $nstp ?></td>
		</tr>						
			<td>Socio Cultural:</td>
			<td><?php echo $sociocultural ?></td>
		</tr>
		<tr>
			<td id="important">TOTAL FEES</td>
			<td id="important"><?php echo $total?></td>
		</tr>							
					<?php
						}
					?>
		</tbody>
	</table>
<div id="back">
	<a href="classReport.php">Back </a>
</div>
	
</body>

</html>