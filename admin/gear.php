<?php
 	
	/* ---------------------------------------------------------*/
	/* -- PHP SETUP ROOT PATH									*/
	/* -- ------------------------------------------------------*/
	$mRootpath = "";
	$mFilepath = explode('/',dirname(__DIR__));
	foreach($mFilepath as $f){$mRootpath = $mRootpath.$f."/";if($f == "public_html"){break;}}
	define('ROOT_PATH', $mRootpath);	 	
		
?>


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
    var nameVar = "";
    var modelNumVar = "";
    var brandVar = "";
    var priceVar = ""; 
    var typeVar = "";
    var deleteVar = 0;  
    
    function AjaxPost_Construct(constructionType, updateVar){   
    	$.post("databaseInteraction.php", {constructiontype: constructionType, update: updateVar}, function(data,status){
    		    if(constructionType == 'gearTable'){    				 
    				$('#gearTable').html(data);   			 
    			}else if(constructionType == 'finsTable'){   			 
    				$('#gearTable').html(data); 
    			}else if(constructionType == 'snorkelsTable'){
    				$('#gearTable').html(data);
    			}else if(constructionType == 'masksTable'){
    				$('#gearTable').html(data);
    			}else if(constructionType == 'bcdsTable'){
    				$('#gearTable').html(data);
    			}else if(constructionType == 'wetsuitsTable'){
    				$('#gearTable').html(data);
    			}
		
    	});   		       	
    }
    
    function AjaxComplex_Construct(constructionType, updateVar){    		   	   	 
    	$.post("databaseInteraction.php", {constructiontype: constructionType, update: updateVar, modelNum: modelNumVar, name: nameVar, brand: brandVar, price: priceVar, type: typeVar, deleteFlag: deleteVar}, function(data,status){   		
    		if(constructionType == 'gearTable' && updateVar == 1){    			      					
    			$('#gearTable').html(data);
    		}else if(constructionType == 'gearTable' && updateVar == 0){     			  			 
    			$('#gearTable').html(data);
    			deleteVar = 0;     			
    		}
    	}); 
    }
        
    </script>
    
    <!-- JQuery Functions -->
    <script type="text/javascript">
    	function showTable(){	AjaxPost_Construct('gearTable',0);}
    	function hideTable(){	$('#gearTable').html('');}
    	function showFinsTable() {	AjaxPost_Construct('finsTable',0);}
    	function showSnorkelsTable() {	AjaxPost_Construct('snorkelsTable',0);}
    	function showMasksTable() {	AjaxPost_Construct('masksTable',0);} 
    	function showBCDsTable() {	AjaxPost_Construct('bcdsTable',0);}
    	function showWetsuitsTable() {	AjaxPost_Construct('wetsuitsTable',0);}  	    	   	
    </script>
    
    <!-- JQuery Database Changes -->
    <script type="text/javascript">
    	function addGear(){
 			   		 
    		nameVar = document.getElementById("nameField").value;    		
    		brandVar = document.getElementById("brandField").value; 
    		priceVar = document.getElementById("priceField").value;
    		typeVar = document.getElementById("typeField").value;     	 
    		AjaxComplex_Construct('gearTable',1); 
    		  				
    	}
    	
    	function deleteGear(){
    	
    		nameVar = document.getElementById("nameField").value;    		
    		brandVar = document.getElementById("brandField").value; 
    		priceVar = document.getElementById("priceField").value;
    		typeVar = document.getElementById("typeField").value;
    		deleteVar = 1;     	 
    		AjaxComplex_Construct('gearTable',0);     	
    	}
    </script>

	<!-- JQuery Event Handlers -->
	<script type="text/javascript">
		$(document).ready(function(){			
			showTable();
			
			$('body').on('click','#allButton',function(e){
			e.preventDefault();
			hideTable();
			showTable(); 
			}); 
			
			$('body').on('click','#finsButton',function(e){
				e.preventDefault();
				hideTable();
				showFinsTable(); 
			}); 
			
			$('body').on('click','#snorkelsButton',function(e){
				e.preventDefault();
				hideTable();
				showSnorkelsTable();
			});
			
			$('body').on('click','#masksButton',function(e){
				e.preventDefault();
				hideTable();
				showMasksTable();
			});

			$('body').on('click','#bcdsButton',function(e){
				e.preventDefault();
				hideTable();
				showBCDsTable();
			});

			$('body').on('click','#wetsuitsButton',function(e){
				e.preventDefault();
				hideTable();
				showWetsuitsTable();
			});
			
			$('body').on('click','#submitButton',function(e){
				if(!$("#deleteField").is(":checked")){
					e.preventDefault();				 
					hideTable();
					addGear();
					showTable(); 
				}
				
				else{ 
					hideTable();
					deleteGear();
					showTable();
				}
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
                <a class="navbar-brand" href="index.php">Close Quarters Scuba</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
						<a href="../index.php">Exit Admin Mode</a>
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
					<button id="allButton" type="button" class="btn btn-primary btn-block btn-lg">All</button>
				</div>
				<div class="col-md-2">
					<button id="finsButton" type="button" class="btn btn-primary btn-block btn-lg">Fins</button>
				</div>
				<div class="col-md-2">
					<button id="snorkelsButton" type="button" class="btn btn-primary btn-block btn-lg">Snorkels</button>
				</div>
				<div class="col-md-2">
					<button id="masksButton" type="button" class="btn btn-primary btn-block btn-lg">Masks</button>
				</div>
				<div class="col-md-2">
					<button id="bcdsButton" type="button" class="btn btn-primary btn-block btn-lg">BCDs</button>
				</div>
				<div class="col-md-2">
					<button id="wetsuitsButton" type="button" class="btn btn-primary btn-block btn-lg">Wetsuits</button>
				</div>

			</div>
		</div>
    </div>
    
    <div id="gearTable">
    	<!-- Gear Table Goes Here -->
    </div>
   
   	<div class="container">
   		<div class="row">
   			<div class="box">
   				<div class="col-md-12">
   					<form name="itemAddForm" method="post" action="gear.php">
   						   						
   						<label>Name</label>
   						<input id="nameField" type="text" name="name_textbox">
   						
   						<label>Brand</label>
   						<input id="brandField" type="text" name="brand_textbox">
   						
   						<label>Price</label>
   						<input id="priceField" type="text" name="price_textbox">
   						
   						<label>Type</label>
   						<input id="typeField" type="text" name="type_textbox">
   						
   						<label><input id="deleteField" type="checkbox" value="checked" name="delete_checkbox">Delete</label>
   																
   						<button id="submitButton" type="submit">Submit</button>
   					</form>
   				</div>
   				<div class="col-md-12"> <br>
   					<p>Note - In the Type field please enter one of the following:<br>
   						fins <br>
   						snorkel <br>
   						masks <br>
   						bcds <br>
   						wetsuits <br> <br> <br>
   						Delete - Simply type the name of the item you want to delete.	
   					</p>
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