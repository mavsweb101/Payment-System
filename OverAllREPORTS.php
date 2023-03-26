<?php

error_reporting(0);
?>
<!Doctype html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css2.css" />
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,700,500);

/* main Styles */

html { box-sizing: border-box; }

*, *:before, *:after { box-sizing: inherit; }

body {
	background-image: url(pic2.jfif);
	background-size:cover;
	background-position:fixed;
	background-repeat: no-repeat;
  margin: 0;
}

a { text-decoration: none; }

.container {
  width: 1000px;
  margin: auto;
}

h1 { text-align:center; margin-top:150px;}

/* Navigation Styles */

nav { 
	background-color: #08700b;
	margin-top:0px; 
	position:fixed;
	width:1400px;
	margin-left:-20px;
	margin-top:120px;
	font-color: Black;
	font-family: Keep Calm;

}

nav ul {
	margin-left:20px;
  font-size: 0;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  position: relative;
}

nav ul li a {

  color: #fff;
  display: block;
  font-size: 14px;
  padding: 17px 13px;
  transition: 0.3s linear;
}

nav ul li:hover { background:  #5c5252 }

nav ul li ul {
  border-bottom: 2px solid;
  display: none;
  position: absolute;
  width: 10px;
  
}

nav ul li ul li {
  border-top: 1px solid ;
  display: block;
  
}

nav ul li ul li:first-child { border-top: none; }

nav ul li ul li a {
	

  display: block;
  padding: 10px 10px;
}

nav ul li ul li a:hover { background: #5c5252 }

nav .fa.fa-angle-down { margin-left: 6px; }



#MainHead {
	position:fixed;
	width:1366px;
	background-color:#9C0;
	height:130px;
	margin-top:0px;
	
	
}

img{
	width:300px;
	height:190px;
	margin-left:-15px;
	margin-top:-27px;
	position:fixed;
}
#payment{
	width:800px;
	margin-left:500px;
	margin-top:100px;
	
}

#header{
	position:fixed;
	background-color:#9bf39d;
	width:1366px;
	height:140px;
}

#hlogo{
	width:800px;
	margin-left: 290px;
}
#isu{
	width:130px;
	height:110px;
	margin-left:1145px;
	margin-top:5px;
	position:absolute;
}

#important{
		font-size:20px;
		font-family: Keep Calm;
		background-color: black;
		color: white;
}

#main {
	border-radius: 10px;
	margin-left:30px;
	margin-top:183px;
	background-color: white;
	position:absolute;
	width:1290px;
	height:450px;
	opacity: .6;
}

table{
	font-family: Keep Calm;
}
</style>
	
	</head>
<div id="main">

</div>
<div id="header">
<img id="isu" src="isu.png"/>
<img id="hlogo" src="headlogo.png"/>
</div>	
<img src="logo.png"/>
<nav>
  <div class="container">
    <ul>
            <li><a href="paymentsystem.php">Home</a></li>

	  <li><a href="addCLASS.php">Add Class and Payment</a></li>
	  <li><a href="classReport.php">View Class Payment</a></li>
      <li><a href="RegularStudRECORD.php">Student Record</a></li>
   
	
	  <li><a href="studentlog.php">Student Log<i class='fa fa-angle-down'></i></a>
     
 

  </div>
</nav>


<script src="jquery-1.12.4.min.js"></script> 
<script>
$('nav li').hover(
  function() {
	  $('ul', this).stop().slideDown(200);
  },
	function() {
    $('ul', this).stop().slideUp(200);
  }
);
</script>
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

	

	<div class="content-wrapper" style="margin-top:0px;">
        <div class="container">
          <!-- Content Header (Page header) -->
        

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-warning">
               
                <div class="box-body">
				<div class="row">
					<div class="col-md-12">
				<form method="POST" id="IT">
<table border="1" id="BSIT" class="table">
	
		<tbody>
				<thbody>
		<tr>	
			<th id="important" colspan="2">Id</th>
			<th id="important"> Student Name</th>
			<th id="important" style="text-align:center;"> Action</th>
		</tr>
		</thbody>
		<?php

			include "../Enrollment/classDB.php";
			$db = new classDB;
				$db->connect();

				$query = mysql_query ("SELECT * FROM enrolment_tblstudent ORDER BY id");
					while ($row = mysql_fetch_array($query))
					{
						$id_reg = $row['student_no'];
						$fname= $row['first_name'];
						$gname = $row['last_name'];
						$mname = $row['middle_name'];
						$course = $row['student_course'];
						$year_level = $row['year_level'];
						
						$name= ucfirst($fname).", ".ucfirst($gname).", ".ucfirst($mname)." "?>
		<tr>	
			<td colspan="2" > <?php echo $id_reg ?> </td>
			
			<?php 
				echo"
					<td>$name</td>
					<td style='text-align:center;'><a href='StudOVERALLREPORT.php?id=$id_reg&name=$name&course=$course&year=$year_level'>View Details</a> </td>";
			?>
		</tr>
			
					<?php
						}
					?>
				
</tbody>

</table>
</form>




     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
<script>   
   $(function () {
        $("#data").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
</script>

</body>
</html>



