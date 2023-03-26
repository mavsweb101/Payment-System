<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Over All Reports</title>
</head>
<style>

table{

	width:650px;
	margin-left:300px;
	font-family: Keep Calm;
	font-size:20px;
	position:absolute;
	margin-top:80px;
	text-align:center;

}


#name{
		font-size:20px;
		background-color: black;
		color: white;
}
#main {
	border-radius: 10px;
	margin-left:230px;
	margin-top:-20px;
	background-color: white;
	position:absolute;
	width:910px;
	height:350px;
	opacity: .6;
}

label{
	font-family: Keep Calm;
	font-size:30px;
	margin-left:240px;
	position:absolute;
}

#back {
	margin-left: 1050px;
	margin-top:300px;
	font-family: Keep Calm;
	font-size: 20px;
	position: absolute;
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
<form method="POST">


<table border="0">
		<tbody>	
		<?php $name=$_REQUEST['name'];?>
		
		<label><?php echo "Student Name:". $name ?></label>
		
					
		<?php
			
			$id=$_REQUEST['id'];
			require_once "database.php";

					$query = mysql_query ("SELECT * FROM tbl_payment WHERE student_id = '$id'");
					while ($row = mysql_fetch_array($query))
					{
						$student_id=$row['student_id'];
						$fees = $row['fees'];
						$paid=$row['paid'];
						$total=$row['total'];
						
			?>
		<tr>
			<td>
			Total Tuition Fee
			</td>
			<td>
			<?php echo $fees ?>
			</td>
		</tr>
			<?php
		require_once "database.php";
			
						
						$query1 = mysql_query ("SELECT SUM(paid) AS value_sum FROM tbl_payment where student_id = '$id'");
						$rst= 0;
						While($num=mysql_fetch_assoc($query1)){
						$rst +=$num['value_sum'];
						}
		echo"	
				<tr>
				<td>
					Total Amount Paid
				</td>
				<td>
					$rst
				</td>
				</tr>";		
				
		?>		

		<tr>
			<td>
			Remaining Balace
			</td>
			<td>
			<?php echo $total ?>
			</td>
		</tr>
		
		
					<?php
						}
						
					?>
		</tbody>
	</table>
</form>
	<div id="back">
	<a href="OverAllREPORTS.php">Back </a>
</div> 
</body>

</html>