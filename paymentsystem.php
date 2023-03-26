
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment System</title>
</head>
<style>
table {
	background-image: url(log.jpg);
	background-size:contain;
	backround-repeat: no repeat;
	width:400px;
	height:320px;
	border-radius:30px;
	margin-left:50px;
	margin-top:50px;
	
}

input {
	width:220px;
	height:30px;
	font-size: 20px;
	border-radius:10px;
}

#button{
	background-image: url(button.png);
	background-size:cover;
	border-radius:10px;
	height:40px;
	width:210px;
}


</style>

<body>
<?php
include ('header.php');
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



				<div class="row-fluid" style="margin-left:600px; font-size:34px; margin-top:350px;">
				<div class="col-md-5 col-md-offset-1">
				<h4><span id=tick2>
				</span>&nbsp;| 
<script>
				function show2(){
				if (!document.all&&!document.getElementById)
				return
				thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
				var Digital=new Date()
				var hours=Digital.getHours()
				var minutes=Digital.getMinutes()
				var seconds=Digital.getSeconds()
				var dn="PM"
				if (hours<12)
				dn="AM"
				if (hours>12)
				hours=hours-12
				if (hours==0)
				hours=12
				if (minutes<=9)
				minutes="0"+minutes
				if (seconds<=9)
				seconds="0"+seconds
				var ctime=hours+":"+minutes+":"+seconds+" "+dn
				thelement.innerHTML=ctime
				setTimeout("show2()",1000)
				}
				window.onload=show2
				//-->
</script>
	      <?php
            $date = new DateTime();
            echo $date->format('l, F jS, Y');
          ?><h4>
            </div>
            </div>


</body>
</html>