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
<!-- HERE IS THE START OF FORM  -------------------------------------------------------------------------------------->	
			<form action="submission.php" method="POST" class="form-horizontal">
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Full name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputEmail3" placeholder="Surname Firstname Middlename" name="fullname">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail4" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
				</div>
			  </div>

			  <div class="form-group">
				<label for="inputEmail5" class="col-sm-2 control-label">Team name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputEmail5" placeholder="Team CloudPy" name="teamname">
				</div>
			  </div>

			  <div class="form-group">
				<label for="sel1" class="col-sm-2 control-label">Select Event from list:</label>
				<div class="col-sm-10">
				  <select class="form-control" id="sel1" name="eventname">
					<option value="mindsEye">Minds Eye PRj</option>
					<option value="secondOption">2</option>
					<option value="edcStartupExpo">EDC</option>
				  </select>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="comment" class="col-sm-2 control-label">Project Description:</label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment" placeholder="The project/ startup 'MindsEye Website' is a project carried out by CloudPy Startup whose team member are Mr. Kaustubh Joshi, Mr. Xyz, Mr. ABC; which is a registration, content sharing and promotion website. It is developed in PHP language hosted on a local machine and is designed using BootStrap. The website uses WAMP Stack. Etc. etc. ...." name="prjdesc"></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Submit</button>
				</div>
			  </div>
			</form>			
<!-- HERE IS THE END OF FORM  -------------------------------------------------------------------------------------->						
			
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