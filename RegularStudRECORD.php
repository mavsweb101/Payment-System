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
	font-family: Keep Calm;
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

#important{
		font-size:20px;
		font-family: Keep Calm;
		background-color: black;
		color: white;
}
table{
	margin-left:-10px;
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
      <li><a href="OverAllREPORTS.php">Reports<i class='fa fa-angle-down'></i></a>
  <li><a href="../index.php">Log Out</a>

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
<table border="0" id="BSIT" class="table">
	
		<tbody>
				<thbody>
		<tr>	
			<th colspan="2" id="important">Id</th>
			<th id="important"> Student Name</th>
			<th id="important"> Course</th>
			<th id="important" colspan="2" style="text-align:center;"> Action</th>
		</tr>
		</thbody>
		<?php

			 include ('database.php');
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
					<td>$course</td>
					<td style='text-align:center;'><a href='students.php?id=$id_reg&course=$course&year=$year_level&name=$name'>View Payment</a> </td>
					<td style='text-align:center;'><a href='?id=$id_reg&course=$course&year=$year_level&name=$name'>Insert Payments</a> </td>";
			?>
		</tr>
			
					<?php
						}
					?>
				
</tbody>

</table>
</form>




						
							  
		</div><!--col end -->
		<div class="col-md-6">
			
						
         </div><!--col end-->           
        </div><!--row end-->        
					
			
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            <form method="post" action="accountadd">
            <div class="col-md-3">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  
				</form>	
                </div><!-- /.box-body -->
				<?php  
					$dis=$_REQUEST['course'];
				if($dis){	
					$display='';
				}else{
					$display='none';
				}
				
				
				echo"<div class='box-body' style='display:$display;'>"
				?>	
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  <form method="post">
						  <div class="form-group">
							<label for="date">Student No</label><br>
									<?php
									$iid=$_REQUEST['id'];
								echo"<input type='text' class='form-control' name='id' value='$iid' readOnly>";
							
			$courses=$_REQUEST['course'];
			$years=$_REQUEST['year'];
			require_once "database.php";

				$query = mysql_query ("SELECT * FROM class where course='$courses' && year='$years' ");
					while ($row = mysql_fetch_array($query))
					{
						$total=$row['total'];
					
										
							echo"
								<label for='date'>Total Payment</label><br>
								<input type='text' class='form-control' name='total' value='$total' required readOnly>";
								}
									
								?>
						 </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="form-group">
                    
                      <button class="btn btn-lg btn-block btn-primary" id="daterange-btn" name="insert" type="submit">
                       Insert
                      </button>
					  
					  
					  </form>
					  
                   </div>
				    <div class="form-group">
                    
                      
					  <a href="?" class="btn btn-lg btn-block btn-info">Cancel</a>
					  
					  </form>
					  
                   </div> 
                  </div><!-- /.form group --><hr>
				
                </div>
				</div><!-- /.box -->
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
	<?php
		if(isset($_POST['insert'])){
			
			
			
			$sssid=$_POST['id'];
			$total=$_POST['total'];
			
			
					
					$insert=mysql_query("INSERT INTO payments(id_payments, student_id, date, fees, paid, total)
								VALUES (NULL,'$sssid','','','','$total')");
			if($insert){
				echo"<script>alert('success')</script>";
			}else{
				echo"<script>alert('not success')</script>";
			}
		
			
	
		}
		
		
	?>
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



