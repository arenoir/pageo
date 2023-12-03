<?php 


function redirect_to($new_location) {
	header("Location: " . $new_location);
	exit;
}

function confirm_query($set) {
	if (!$set) {
		die("Database query failed.");
	}
}


function mysql_prep($string) {
	global $conn;

	$escaped_string = mysqli_real_escape_string($conn, $string);
	return $escaped_string;
}



function submission() {

	global $conn;

	$sql  = "SELECT * ";
	$sql .= "FROM contact_form ";
	$sql .= "ORDER BY ID ASC";
	$client_list = mysqli_query($conn, $sql);
	confirm_query($client_list);

	return $client_list;
}





 ?>