

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Courses</title>
    
    <!-- JQuery Library -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    
    <!-- AJAX Construction Call -->
    <script type="text/javascript">
    var updateCounter = 0; 
    
    function AjaxPost_Construct(constructionType){   
    	$.post("databaseInteraction.php", {constructiontype: constructionType}, function(data,status){
    		if(constructionType == 'gearTable'){
    			$('#gearTable').html(data);   			 
    		}else if(constructionType == 'finsTable'){   			 
    			$('#gearTable').html(data); 
    		}
    	});   		       	
    }
    
    </script>
    
    <!-- JQuery Functions -->
    <script type="text/javascript">
    	function showTable(){	AjaxPost_Construct('gearTable');}
    	function hideTable(){	$('#gearTable').html('');}
    	function showFinsTable() {	AjaxPost_Construct('finsTable');}
    </script>

	<!-- JQuery Event Handlers -->
	<script type="text/javascript">
		$(document).ready(function(){			
			showTable();
			
			$('body').on('click','#finsButton',function(e){
				e.preventDefault();
				hideTable();
				showFinsTable(); 
			}); 
		});					
	</script>

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

    <div class="brand">Gear</div>

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
                <a class="navbar-brand" href="index.html">Close Quarters Scuba</a>
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
			<div class="box aut">
				<div class="col-md-2">
					<button id="finsButton" type="button" class="btn btn-primary btn-block btn-lg">Fins</button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-primary btn-block btn-lg">Snorkels</button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-primary btn-block btn-lg">Masks</button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-primary btn-block btn-lg">BCDs</button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-primary btn-block btn-lg">Wetsuits</button>
				</div>

			</div>
		</div>
    </div>
    
    <div id="gearTable" class="container">
    	<!-- Gear Table Goes Here -->
    </div>
   
   	<div class="container">
   		<div class="row">
   			<div class="box">
   				<div class="col-md-12">
   					<form method="post" action="gear.php">
   						<label>Model#</label>
   						<input type="text" name="model#_textbox">
   						
   						<label>Name</label>
   						<input type="text" name="name_textbox">
   						
   						<label>Brand</label>
   						<input type="text" name="brand_textbox">
   						
   						<label>Price</label>
   						<input type="text" name="price_textbox">
   						
   						 <button type="submit">Submit</button>
   					</form>
   				</div>
   			</div>
   		</div>
   	</div>

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