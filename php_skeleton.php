<?php
	session_start();
	header("Content-type: text/html");
	// Connect to database.

// SET NEW FUNCTION CALLS HERE

	if( isset($_REQUEST['first']) )
		forma();

	$dbh = NULL;
	
	function basic_header(){
		echo <<<end_html
			<head>
				<title></title>
				<script type = 'text/javascript' src = 'jquery.js'></script>
				<script type = 'text/javascript'>
				</script>
				<style type = 'text/css'>
				</style>
			</head>
end_html;
	}

// SET NEW FUNCTIONS HERRE

	function forma(){
		basic_header();
	}

?>
