<?php

	/* ---------------------------------------------------------*/
	/* -- PHP SETUP ROOT PATH									*/
	/* -- ------------------------------------------------------*/
	$mRootpath = "";
	$mFilepath = explode('/',dirname(__DIR__));
	foreach($mFilepath as $f){$mRootpath = $mRootpath.$f."/";if($f == "public_html"){break;}}
	define('ROOT_PATH', $mRootpath);

	session_start();
	require('conn.php'); 

	$sql = "SELECT COUNT(*) from ADMINLOGIN where uname = :username and password = :password";
	$stmt = $pdo->prepare($sql); 
	$stmt->bindValue("username", $_POST['u_name_textbox'], PDO::PARAM_STR);
	$stmt->bindValue("password", $_POST['password_textbox'], PDO::PARAM_STR);
	$stmt->execute();
	
	$count = $stmt->fetchColumn();
	
	if ($count == 1) {
	    $_SESSION['loggedIn'] = "true";
	    header("Location: /admin/index.php"); // This is wherever you want to redirect the user to
	}
	
	else {
	    $_SESSION['loggedIn'] = "false";
	    header("Location: index.php"); // Wherever you want the user to go when they fail the login
	}
	
?>