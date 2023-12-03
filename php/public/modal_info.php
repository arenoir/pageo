<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php

$clients = submission();

confirm_query($clients);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Collection_01</title>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://use.typekit.net/ttp2hrv.css">
</head>







	
<?php
// 4. Release returned data
mysqli_free_result($clients);
?>

