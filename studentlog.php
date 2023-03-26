<style>
#m{
	border-radius: 10px;
	margin-left:230px;
	margin-top:203px;
	position:absolute;
	background-color: white;
	width:910px;
	height:400px;
	opacity: .6;
	
}

table{
	font-size:30px;
	font-family: Keep Calm;
	margin-left: 450px;
	width:500px;
	margin-top:400px;
	position:absolute;

}

label{
	margin-top:300px;
	margin-left:345px;
	position:absolute;
	font-size:40px;
	font-family: Keep Calm;
}
</style>




<?php
include ('header2.php');


?>
<div id="m">
</div>
<label> Updated Daily Recieve Payment </label>
<div id="main">
<table border="0">
		
		
		<tbody>
		<?php
			$today=date('F jS, Y');
		echo "	<td colspan='5'>DATE: $today</td>
			
		</tr>";
		?>
		<tr>
			

		</tr>
		<?php
		require_once "database.php";
			
						
						$query1 = mysql_query ("SELECT SUM(paid) AS value_sum FROM payments where date='$today'");
						$rst= 0;
						While($num=mysql_fetch_assoc($query1)){
						$rst +=$num['value_sum'];
						}
		echo"				
		<tr>
				<td>
					Total Amount Recieve: $rst
				</td>
			</tr>";		
		?>
				
		</tbody>
	</table>
</div>
	