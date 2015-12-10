
<?php
	 
	$username = $_POST['u_name_textbox'];
	$password = $_POST['password_textbox'];
	
	/* ---------------------------------------------------------*/
	/* -- PHP SETUP ROOT PATH									*/
	/* -- ------------------------------------------------------*/
	$mRootpath = "";
	$mFilepath = explode('/',dirname(__DIR__));
	foreach($mFilepath as $f){$mRootpath = $mRootpath.$f."/";if($f == "public_html"){break;}}
	define('ROOT_PATH', $mRootpath);
	//include ROOT_PATH.'databaseAccessFunctions.php';
	
	/* ---------------------------------------------------------*/
	/* -- PHP ERROR REPORTING									*/
	/* -- ------------------------------------------------------*/
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	/* ---------------------------------------------------------*/
	/* -- PHP DATABASE CONNECTION 								*/
	/* -- ------------------------------------------------------*/
	$database = @mysql_connect('mysql.eecs.ku.edu', $username, $password);
	if(!$database) {
		die('Could not connect: ' . mysql_error());
	}
	if(!mysql_select_db($username, $database)){
		die('Could not select database: ' . mysql_error());
	}
	
	echo "<br clear=\"all\" />";
	
	echo "<pre>";
	var_dump($_POST); //var_dump dispalys the contents of an array. 
	echo "</pre>";

	if(isset($_POST['u_name_textbox'])){
		$uname_var		=  mysql_real_escape_string($_POST['u_name_textbox']); //mysql_real_escape_string built in function to prevent injection
	}else{
		$uname_var		=  "dont let me in";
	}
	
	if(isset($_POST['password_textbox'])){
		$password_var		=  mysql_real_escape_string($_POST['password_textbox']);
	}else{
		$password_var		=  "dont let me in";
	}	
		
	$sql="SELECT * FROM ADMINLOGIN WHERE uname='$uname_var' AND password='$password_var'";
	$result = mysql_query($sql, $database);   
	if(!$result){	
		echo mysql_errno($database) . ": " . mysql_error($database). "<br />";	
		echo $sql . "<br />";	
		return;
	}
	
	if(mysql_num_rows($result) > 0 ){
		//The user entered a login that is in the ADMINLOGIN database.
		echo "<pre>";
		echo "Successful Login. You can now update the inventory.";
		echo "</pre>";	
	}else{
		echo "<pre>";
		echo "Unsuccessful. Please try again.";
		echo "</pre>";
	}
	
	while($row=mysql_fetch_array($result)){
		echo "<pre>";
		//var_dump($row);
		echo $row[0];    
		echo "</pre>";
		
	}
	/*
	$sql="SELECT * FROM ADMINLOGIN";
	$result = mysql_query($sql, $database);   
	if(!$result){
	
		echo mysql_errno($database) . ": " . mysql_error($database). "<br />";	
		echo $sql . "<br />";	
		return;
	}

	while($row=mysql_fetch_array($result)){
		echo "<pre>";
		//var_dump($row);
		echo $row[0];    
		echo "</pre>";
		
	}
	*/
	
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/closequarters.css" rel="stylesheet">

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

    <div class="brand">Close Quarters Scuba</div>
    <div class="address-bar">1949 Lawrence Ct. | Kansas City, KS 66103 | 316.249.2010</div>

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

        <div class="row">
        	<div class="box">
            	<div class="col-md-2">
            		<form method="post" action="index.php">
            			<label>username</label>
            			<input type="text" name="u_name_textbox" />
            		
            			<label>password</label>
            			<input type="password" name="password_textbox" /> 
            		
						<input type="submit" />				
		          		            	
            		</form>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

<?php
mysql_close($database);
?>
