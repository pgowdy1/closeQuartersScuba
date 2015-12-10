<?php
/* ---------------------------------------------------------*/
	/* -- PHP SETUP ROOT PATH									*/
	/* -- ------------------------------------------------------*/
	$mRootpath = "";
	$mFilepath = explode('/',dirname(__DIR__));
	foreach($mFilepath as $f){$mRootpath = $mRootpath.$f."/";if($f == "public_html"){break;}}
	define('ROOT_PATH', $mRootpath);
	//include ROOT_PATH.'databaseAccessFunctions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/closequarters.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Trips</div>
   
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Close Quarters Scuba</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="courses.php">Courses</a>
                    </li>
                    <li>
                        <a href="trips.php">Trips</a>
                    </li>
                    <li>
                        <a href="photography.php">Photography</a>
                    </li>
					<li>
						<a href="gear.php">Gear</a>
					</li>
					<li>
						<a href="staff.php">Staff</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">	
		<div class="box">
		
			<div class="row">
				<div class="col-md-12">
					<img src="img/cozumel-modified.jpg" class="img-responsive" alt="Cozumel">
				</div>
			</div>

			<div class="row">
				<div id="cozumelDescrip" class="col-md-12">
					<p>
					<ul>Trip: Cozumel</ul>
					<ul>Price: $1700.00</ul>
					<ul>Dive Sites: NULL</ul> 
					</p>
				</div>
			</div>
		</div>
		
		<div class="box">
		
			<div id="hawaiiImg" class="row">
				<div class="col-md-12">
				<img src="img/hawaii-modified.jpg" class="img-responsive" alt="Hawaii">
				</div>
			</div>

			<div class="row">
				<div id="hawaiiDescrip" class="col-md-12">
					<p>
					<ul>Trip: Hawaii</ul>
					<ul>Price: $2300.00</ul>
					<ul>Dive Sites: NULL</ul> 
					</p>
				</div>
			</div>
		</div>
		
		<div class="box">
		
			<div class="row">
				<div class="col-md-12">
					<img src="img/maldives-modified.jpg" class="img-responsive" alt="Cozumel">
				</div>
			</div>

			<div class="row">
				<div id="maldivesDescrip" class="col-md-12">
					<p>
					<ul>Trip: The Maldives</ul>
					<ul>Price: $3300.00</ul>
					<ul>Dive Sites: NULL</ul> 
					</p>
				</div>
			</div>
		</div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Close Quarters Scuba 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
