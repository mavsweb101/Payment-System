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
	background-image: url(pic2.jfif);
	background-size:cover;
	background-repeat: no repeat;;
  margin: 0;
}

a { text-decoration: none;  }

.container {
  width: 1000px;
  margin: auto;
}

h1 { text-align:center; margin-top:150px;}

/* Navigation Styles */

nav { 
	background: -webkit-linear-gradient(); 
	margin-top:0px; 
	position:fixed;
	width:1366px;
	margin-left:210px;
	margin-top:40px;
	font-color: Black;
	font-family: Keep Calm;

}

nav ul {
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
 
  padding: 15px 20px;
  transition: 0.3s linear;
}

nav ul li:hover { background:  }

nav ul li ul {
  border-bottom: 2px solid;
  display: none;
  position: absolute;
  width: 200px;
  
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

nav ul li ul li a:hover { background:  }

nav .fa.fa-angle-down { margin-left: 26px; }



#MainHead {
	position:fixed;
	width:1366px;
	background-color:#9C0;
	height:130px;
	margin-top:0px;
	
	
}

img{
	width:330px;
	height:250px;
	margin-left:-45px;
	margin-top:-35px;
	position:absolute;
}

#isu{
	width:150px;
	height:150px;
	margin-left:1145px;
	margin-top:10px;
	position:absolute;
}
#payment{
	width:800px;
	margin-left:500px;
	margin-top:180px;
	
}
</style>
</head>

<body>
		
<img src="logo.png"/>
<img id="isu" src="isu.png"/>
<img id="payment" src="headlogo.png"/>
<nav>
  <div class="container">
    <ul>
	<li><a href="paymentsystem.php">Home</a></li>
      <li><a href="#">Class and Payment<i class='fa fa-angle-down'></i></a>
      	<ul>
          <li><a href="addCLASS.php">Add Class and Payment</a></li>
          <li><a href="classReport.php">View</a></li>
          </ul>
      </li>
      <li><a href="#">Students<i class='fa fa-angle-down'></i></a>
      	<ul>
          <li><a href="RegularStudRECORD.php">Student Record</a></li>
          </ul>
      </li>
	
	  <li><a href="studentlog.php">Student Log</a>
      <li><a href="../index.php">Log Out</a>
     
    </ul>
    </ul>
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
