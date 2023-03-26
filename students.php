<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery-1.12.4.min.js"> </script>
<title>Student Log</title>
</head>
<style>

table{
	text-align: center;
	margin-left: 380px;
	margin-top:-435px;
	width:350px;
	position:absolute;

}


#important{
		font-size:20px;
		background-color: black;
		color: white;
}

#main {
	border-radius: 10px;
	margin-left:80px;
	margin-top:-45px;
	background-color: white;
	width:1110px;
	height:440px;
	opacity: .6;
}

#payments{
	margin-left: 790px;
	margin-top: -400px;
}

#name{
	margin-top:-430px;
	font-size:20px;
	font-family: Keep Calm;
	margin-left:110px;
	position:absolute;
}

#save {
	position: absolute;
	margin-top: -100px;
	margin-left: 900px;

	
}

#btn{
	width:200px

}

#back {
	margin-left: 820px;
	margin-top:-100px;
	font-family: Keep Calm;
	font-size: 20px;
	position: absolute;
}
#view {
	margin-left: 820px;
	margin-top:-50px;
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



<div id="name">
<?php
	$name = $_REQUEST['name'];
	
	echo "Name:  ". "</br>" . $name;
?>
</div>
	<table>
		<?php
			
			$course=$_REQUEST['course'];
			$year=$_REQUEST['year'];
			require_once "database.php";

				$query = mysql_query ("SELECT * FROM class where course='$course' && year='$year' ");
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

<form method="POST">
	<table id="payments">
		<?php
			
			$course=$_REQUEST['course'];
			$year=$_REQUEST['year'];
			require_once "database.php";

				$query = mysql_query ("SELECT * FROM class where course='$course' && year='$year' ");
					while ($row = mysql_fetch_array($query))
					{
						$total = $row['total'];
						
					}
					
				
if(isset($_POST['save']))
{	
	$student_id = $_POST['student_id'];
	$date = $_POST['date'];
	$fees = $_POST['fees'];
	$paid = $_POST['paid'];
	$total = $_POST['total'];
	
	$update = "UPDATE payments SET date='$date',fees='$fees',paid='$paid',total='$total' WHERE student_id='$student_id'";
	$result=mysql_query($update);
		
	$insert = "INSERT INTO tbl_payment(student_id, date, fees, paid, total)
								VALUES ('$student_id','$date','$fees','$paid', '$total')";	
	$resul1t=mysql_query($insert);		
		if($result){
			echo"<script>alert('success')</script>";
		}else{
			echo"<script>alert('not success')</script>";
		}
			}
		?>
		<tbody>
		<tr>	
			<td></td>
			<td> <input type="text" name="student_id" value="<?php echo $_REQUEST['id']; ?>" /></td>
		<tr>
			<td>Date:</td>
			<?php
				$date=date('F jS, Y')
			?>
			<td><input type="text" name="date" value="<?php echo $date; ?>" readOnly/></td>
		</tr>
		<tr>
			<?php
			
			$id=$_REQUEST['id'];
			
			$result = "SELECT * FROM payments WHERE student_id='$id'";
			$result1=mysql_query($result);
			
			while ($row = mysql_fetch_array($result1)){
				$paid= $row['total'];
			?>
			<td id="important">TOTAL BALANCE</td>
			<td id="important id"><input type="text" class="number" id="t1" name="fees" value="<?php echo $paid?>" /></td>
			<?php
		
				}
			?>
		</tr>
		<tr>
		
		</tr>
		<tr>
			<td>Amount Paid:</td>
			<td><input type="number" class="number" name="paid" id="t2"/> </td>
		</tr>
			
	
		<tr>
			<td>Remaining Balance:</td>
			<td><input type="text" name="total" id="total" onchange /> </td>
		</tr>		
					
		</tbody>
	</table>
			<div id="save">
				<button name="save" style="font-family: Keep Calm; font-size: 20px;">UPDATE</button>
			</div>
		
<script type="text/javascript">
	$('.number').keyup(function() {
     
    $('.number').each(function() {
        sum = Number($('#t1').val()) - Number($('#t2').val());
    });
    $('#total').val(sum);
     
});
</script>
</form>
<div id="back">
	<a href="RegularStudRECORD.php">Back </a>
</div>	
<div id="view">
	<?php 
	$id=$_REQUEST['id'];
	 $fname=$_REQUEST['name'];
	echo"<a href='paymentDETAILS.php?id=$id&name=$fname'>View Payment Details </a>
	";
	?>
</div>	

</body>

</html>