<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Payment Details</title>
</head>
<style>
label {
	font-family: Keep Calm;
	position: absolute;
	margin-top:220px;
	margin-left:100px;
	font-size:30px;
}

#important{
		font-size:20px;
		font-family: Keep Calm;
		background-color: black;
		color: white;
}
table{
	text-align: center;
	font-family: Keep Calm;
	position: absolute;
	margin-top:300px;
	margin-left: 480px;
}

#main {
	border-radius: 10px;
	margin-left:30px;
	margin-top:180px;
	background-color: white;
	position:absolute;
	width:1290px;
	height:470px;
	opacity: .6;
}


</style>

<body>
<?php
include ('header2.php');
?>

<div id="main">

</div>
<table border="0">
		<tbody>	
		<?php $name=$_REQUEST['name'];?>
		
		<label><?php echo "Student Name:". $name ?></label>
		
					
		<?php
			
			$id=$_REQUEST['id'];
			require_once "database.php";

					$query = mysql_query ("SELECT * FROM payments WHERE student_id = '$id'");
					while ($row = mysql_fetch_array($query))
					{
						$student_id=$row['student_id'];
						$date=$row['date'];
						$paid=$row['paid'];
						
			?>
	
		
		<tr>
			<td id="important">Date of Payment</td>
			<td><?php echo $date ?> </td>
		</tr>
		<tr>
			<td id="important">Amount Paid</td>
			<td><?php echo $paid?> </td>
		</tr>	
		
	
					<?php
						}
						
					?>
		</tbody>
	</table>
	

	</body>
	</html>