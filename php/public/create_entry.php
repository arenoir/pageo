<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>




<?php 

if (isset($_POST['submit'])) {
	// then process the form

/*	$id = (int) $_POST["id"];*/
	$name = mysql_prep($_POST["full_name"]);
	$email = mysql_prep($_POST["email"]);
	$phone = (int) $_POST["phone"];
	$event_type = intval($_POST["event_type"]);
	$dates = mysql_prep($_POST["dates"]);
	$guests = (int) $_POST["guests"];
	$days_off_wk = mysql_prep($_POST["days_off_wk"]);
/*	$timestamp = (timestamp) $_POST["timestamp"];*/


	$sql  = "INSERT INTO contact_form (";
	$sql .= " full_name, email, phone, event_type, dates, guests, days_off_wk";
	$sql .= ") VALUES (";
	$sql .= " '{$name}', '{$email}', '{$phone}', '{$event_type}', '{$dates}', '{$guests}', '{$days_off_wk}'";
	$sql .= ")";

	$result = mysqli_query($conn, $sql);
	if ($result) {
		// Success
		$message = "Subject created.";
		redirect_to("../public/index.php");
	} else {
		// Failure
		$message = "Subject creation failed.";
		redirect_to("../public/create_entry.php");
	}



} else {
	// this is probably a GET request
	redirect_to("../public/create_entry.php");
}

 
?>



<?php
// 5. Cloase database connection
if (isset($conn)) {
	mysqli_close($conn);
}
?>