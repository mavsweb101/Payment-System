<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment System</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,700,500);

/* main Styles */

html { box-sizing: border-box; }

*, *:before, *:after { box-sizing: inherit; }

body {

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
</style>
</head>

<body>

<div id="header">
<img id="isu" src="isu.png"/>
<img id="hlogo" src="headlogo.png"/>
</div>	
<img src="logo.png"/>
<nav>
  <div class="container navbar-fixed-top">
    <ul>
            <li><a href="paymentsystem.php">Home</a></li>

	  <li><a href="ADDCLASSPAYMENT.php">Add Class and Payment</a></li>
	  <li><a href="classReport.php">View Class Payment</a></li>
      <li><a href="RegularStudRECORD.php">Student Record</a></li>
   
	
	  <li><a href="studentlog.php">Student Log</a>
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





</body>
</html>
