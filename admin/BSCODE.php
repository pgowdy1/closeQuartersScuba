<?php

	/* ---------------------------------------------------------*/
	/* -- PHP SETUP ROOT PATH									*/
	/* -- ------------------------------------------------------*/
	$mRootpath = "";
	$mFilepath = explode('/',dirname(__DIR__));
	foreach($mFilepath as $f){$mRootpath = $mRootpath.$f."/";if($f == "public_html"){break;}}
	define('ROOT_PATH', $mRootpath);
	//include ROOT_PATH.'databaseAccessFunctions.php';
	
	$username = "pgowdy"; 
	$password = "Password123!"; 
	
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
	if($database) {
		echo "<pre><p>Session is Live.</p></pre>"; 
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
	
	function ConstructFinsTable($database){
		$result = QueryGetAllFins($database);
		
		$modelArr=array();
		$nameArr=array();
		$brandArr=array();
		$priceArr=array(); 
		
		$arrayIndex = 0; 
		
		while($row=mysql_fetch_array($result)){		
			$modelArr[$arrayIndex] = $row[$arrayIndex];
			echo "<pre>";
			echo $modelArr[$arrayIndex];
			echo "</pre>"; 
		}
		
		echo '<div class="container">';
		echo '<div class="row">';
		echo '<div class="box">';
		echo '<div class="col-md-12">';
		echo '<div class="table-responsive">';
		echo '<div class="table table-hover">'; 
		echo '<tr>';
		echo '<th>Model Number</th>';
		echo '<th>Name</th>';
		echo '<th>Brand</th>';
		echo '<th>Price</th>';
		echo '</tr>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	
	ConstructFinsTable($database); 
	
?>

<div class="row">
    		<div class="box">
    			<div class="col-md-12">
    				<div class="table-responsive">
    					<table class="table table-hover" id="gearTable">
    						    <tr>
    								<th>Model Number</th>
    								<th>Name</th>
    								<th>Brand</th>
    								<th>Price</th>
    							</tr> 
    							<tr>
    								<td>1</td>
    								<td>SX-12</td>
    								<td>ScubaPro</td>
    								<td>$299.99</td>
    							</tr>   				
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    	
    	$result = QueryGetAllFins($database);
		
		$modelArr=array();
		$nameArr=array();
		$brandArr=array();
		$priceArr=array(); 
		
		$arrayIndex = 0; 
		
		while($row=mysql_fetch_array($result)){		
			$modelArr[$arrayIndex] = $row[$arrayIndex];
			echo "<pre>";
			echo $modelArr[$arrayIndex];
			echo "</pre>"; 
		}


