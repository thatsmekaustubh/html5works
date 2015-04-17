<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="index_files/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="index_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="index_files/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  	
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Minds Eye Event</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About Event</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Know organizers<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
					<li class="dropdown-header">R & D Commitee</li>
                    <li><a href="#">Dr. Kamal Shah</a></li>
                    <li><a href="#">Mr. Anil Vasoya</a></li>
                    <li><a href="#">Mrs. Sangeeta</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Event Organizers</li>
                    <li><a href="#">Mr. Xyz </a></li>
                    <li><a href="#">Ms. ABC</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

		<div class="container marketing">
		
<div class="row">
		<div class="col-sm-11">
			<div class="page-header">
			  <h1>Sign up form <small>All Events</small></h1>
			</div>
			
			
			
			
			
			
<!-- PHP CODE STARTS HERE -------------------------------------------------------------------------------->
<?php
/*
echo $_POST['fullname'];
echo "<br/>";
echo $_POST['email'];
echo "<br/>";
echo $_POST['teamname'];
echo "<br/>";
echo $_POST['eventname'];
echo "<br/>";
echo $_POST['prjdesc'];
*/

$servername = "0.0.0.0";
$username = "killerj";
$password = "";
$dbname = "sh3mindseye";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup (name, email, teamname, eventname, prjdesc) VALUES ('".$_POST['fullname']."', '".$_POST['email']."', '".$_POST['teamname']."','".$_POST['eventname']."','".$_POST['prjdesc']."')";

if ($conn->query($sql) === TRUE) {
	echo "<div class='jumbotron'>";
	$sql = "SELECT id FROM signup where teamname like '".$_POST['teamname']."'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
        echo "<h1>Your team Id is : " . $row["id"]. "!</h1>";
    }
	echo "<p>Team registered successfully</p>";
	echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!-- PHP CODE ENDS HERE -------------------------------------------------------------------------------->





		</div>
	  </div>
	</div>

   </div><!-- /.container -->
         <!-- FOOTER -->
		 <br/><br/><br/>
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© CloudPy Company · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    </div>



	  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="index_files/jquery.js"></script>
    <script src="index_files/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="index_files/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="index_files/ie10-viewport-bug-workaround.js"></script>
  

<svg style="visibility: hidden; position: absolute; top: -100%; left: -100%;" preserveAspectRatio="none" viewBox="0 0 500 500" height="500" width="500"><defs></defs><text style="font-weight:bold;font-size:23pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle" y="23" x="0">500x500</text></svg></body></html>