<?php

	/* ---------------------------------------------------------*/
	/* -- PHP SETUP ROOT PATH									*/
	/* -- ------------------------------------------------------*/
	$mRootpath = "";
	$mFilepath = explode('/',dirname(__DIR__));
	foreach($mFilepath as $f){$mRootpath = $mRootpath.$f."/";if($f == "public_html"){break;}}
	define('ROOT_PATH', $mRootpath);	
	
	/* ---------------------------------------------------------*/
	/* -- Database Variables									*/
	/* -- ------------------------------------------------------*/

	$username = "pgowdy"; 
	$password = "Password123!";
	$constructionType = $_POST['constructiontype'];  
	$modelNum = $_POST['model#_textbox'];
	$name = $_POST['name_textbox'];
	$brand = $_POST['brand_textbox'];
	$price = $_POST['price_textbox'];
	
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
		
	/* ---------------------------------------------------------*/
	/* -- Database Query Fcns									*/
	/* -- ------------------------------------------------------*/
	function QueryGetAllFins($database){
		$sqlQuery = "SELECT * FROM FINS";
		return mysql_query($sqlQuery,$database);
	}
	
	/* ---------------------------------------------------------*/
	/* -- Construct HTML Objects								*/
	/* -- ------------------------------------------------------*/
	
	function InsertGearData($modelNum, $name, $brand, $price){
		echo '<tr>';
			echo '<td>'.$modelNum.'</td>';
			echo '<td>'.$name.'</td>';
			echo '<td>'.$brand.'</td>';
			echo '<td>'.$price.'</td>';
		echo '</tr>'; 
	}
	
	function ConstructFinsTable($database){
		$result = QueryGetAllFins($database);
		
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="box">';
					echo '<div class="col-md-12">';
						echo '<div class="table-responsive">';
							echo '<table class="table table-hover">';
								echo '<tr>';
									echo '<th>Model Number</th>';
									echo '<th>Name</th>';
									echo '<th>Brand</th>';
									echo '<th>Price</th>';
								echo '</tr>';
										
								
								
		while($row = mysql_fetch_array($result)){		
			InsertGearData($row['model#'],$row['name'],$row['brand'],$row['price']); 	
		}	
		
		
							echo '</table>';
						echo '</div>';
					echo '</div>';
				echo '</div>'; 			
			echo '</div>';
		echo '</div>'; 

	}
	
	function ConstructGearTable(){	
				
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="box">';
					echo '<div class="col-md-12">';
						echo '<div class="table-responsive">';
							echo '<table class="table table-hover">';
								echo '<tr>';
									echo '<th>Model Number</th>';
									echo '<th>Name</th>';
									echo '<th>Brand</th>';
									echo '<th>Price</th>';
								echo '</tr>';																	
							echo '</table>';
						echo '</div>';
					echo '</div>';
				echo '</div>'; 			
			echo '</div>';
		echo '</div>'; 
		
	}
		
	/* ---------------------------------------------------------*/
	/* -- Logic for Updating in Real Time						*/
	/* -- ------------------------------------------------------*/

if($constructionType == 'gearTable'){
	ConstructGearTable();
}
else if($constructionType == 'finsTable'){
	ConstructFinsTable($database);
}

mysql_close($database);	
?>
