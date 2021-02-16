<?php
  require_once 'core/init.php';
  if(Session::exists('home')){
  echo '<p>' . Session::flash('home') . '</p>';
      }
  $user = new User();
  if($user->isLoggedIn()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NoobmanWeb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <script src="/js/jquery-1.10.2.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <script src="/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <div class="container-fluid">
  <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!-- logo -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
<a href="#" class="navbar-brand">NoobmanWeb</a>			
</div>
<!-- Menu Item -->
<div class="collpase navbar-collapse" id="mainNavBar">
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">Home</a></li>
<li><a href="#"></a></li>
<li><a href="index.php"></a></li>
</ul>
<!--right align -->
<ul class="nav navbar-nav navbar-right">									
  <li><a href="update.php">Update details</a></li>	
  <li><a href="changepassword.php">Change password</a></li>	
  <li><a href="logout.php">Logout</a></li>				
</ul>
</ul>
</div>		
</div>	
</nav>
</body>
</html>
<p>Hello <a href="#"><?php echo escape($user->data()->username); ?></a></p>
<style type="text/css">
	body {
	background-image: url("bg.png"); 
	}
	a {
	color: #000000;
	margin-right: 10px:  
	}
	#header {
	margin-left: auto;
	margin-right: auto;
	color: #000000;
	font-family:tahoma;
	font-size:0.85em;
	width: 650px;   
	}
	#searchEngine {
	margin-left: auto;
	margin-right: auto;  
	width: 650px;   
	}
	#menu {
	font-size: 10px;
	border-bottom: 1px solid #000000;
	margin-left: auto;
	margin-right: auto;
	width: 650px;
	padding:10px;
	color: #000000;
	}
	#content {
	margin-left: auto;
	margin-right: auto;
	width: 650px;
	padding:10px;
	color: #000000;
	}
</style>  
<body>
<div id="menu">
	<h5>
		<a href="index.php">Home |</a>
		<a href="index.php?p=kod">kod |</a>   	 	
		<a href="index.php?p=mega">Megavision |</a> 
		<a href="index.php?p=songhits">Songhits |</a>  
	    <a href="index.php?p=priceLists">Price List |</a> 
        <a href="index.php?p=chat">Chat |</a>
        <a href="index.php?p=blog">Blog |</a> 
        <a href="index.php?p=api">API |</a> 
	</h5>
</div>
<div id="content">
<?php
$pages_dir = 'pages'; 
if (!empty($_GET['p'])) {   
$pages = scandir($pages_dir, 0);
unset($pages[0], $pages[1]);    
$p = $_GET['p'];    
if (in_array($p.'.inc.php', $pages)) {
include($pages_dir.'/'.$p.'.inc.php');      
} else {
echo 'Sorry, page not found.';
}   
} else {
include($pages_dir.'/home.inc.php');
}
?>
</div>
</body>
</html>

<?php
  if($user->hasPermission('admin')){
  echo '<p>You are an Administrator!</p>';
    }
} else {
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<title>NoobmanWeb</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body {
background-image: url("bg.png"); 
}
</style>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!-- logo -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#" class="navbar-brand">NoobmanWeb</a>			
</div>
<!-- Menu Item -->
<div class="collpase navbar-collapse" id="mainNavBar">
	/*<ul class="nav navbar-nav">
		<li class="active"><a href="#">Home</a></li>
		/*<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
		<!-- drop down menu -->
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Links<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">link_1</a></li>
					<li><a href="#">link_2</a></li>
					<li><a href="#">link_3</a></li>   		 
					<li><a href="#">link_4</a></li>  
				</ul>         
		</li>*/
	</ul>*/
<!--right align -->
	<ul class="nav navbar-nav navbar-right">
		<li><a href="register.php">Register</a></li>  
		<li><a href="login.php">Login</a></li>          
	</ul>
</ul>
</div>    
</div>  
</nav>
</html>
',' ','<br><center><h3>NoobmanWeb</h3></center>','
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<center>
<h2>Loading...</h2>

<div class="loader"></div>
</center>
<br />
<center>
	<h3>Image Display</h3>

	<img id="myImg" src="image/junjiehouse1.jpg" alt="The Pulpit Rock" width="304" height="228">

	<p>Click the button to get the URL of the image.</p>

	<button onclick="myFunction()">Try it</button>

	<p id="demo"></p>
</center>
<br />
<br />
<script>
function myFunction() {
  var x = document.getElementById("myImg").src;
  document.getElementById("demo").innerHTML = x;
}
</script>
 ';
}
?>
</div>	
