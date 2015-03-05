<?php
	session_start();
	$author_operator_id = $_SESSION['operator_id'];
	require_once("common.php");
	require_once("menu_item.php");
	header("Content-type: text/html");
	// Connect to database.
	$dbh = pdo_db_connect();
	pdo_validate_program($dbh,1);

// SET NEW FUNCTION CALLS HERE

	if( isset($_REQUEST['first']) )
		forma($dbh);

	$dbh = NULL;
	
	function basic_header(){
		echo <<<end_html
			<head>
				<title></title>
				<link rel = 'stylesheet' type = 'text/css' href = 'maestro.css'></link>
				<script type = 'text/javascript' src = 'jquery.js'></script>
				<script type = 'text/javascript'>
				</script>
				<style type = 'text/css'>
				</style>
			</head>
end_html;
	}

// SET NEW FUNCTIONS HERRE

	function forma($dbh){
		basic_header();
	}

?>
