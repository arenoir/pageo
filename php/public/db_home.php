<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/header.php"); ?>



<?php

$clients = submission();

confirm_query($clients);

?>



<table id="book_list">
	<thead>
		<tr class="top_bar">
			<th colspan="11"><p>PAGEO INQUIRIES</p></th>
		</tr>
		<tr class="column_headers">
			<th class="col_header">ID</th>
			<th class="col_header">Name</th>
			<th class="col_header">Email</th>
			<th class="col_header">Phone</th>
			<th class="col_header">Event Type</th>
			<th class="col_header">Dates</th>
			<th class="col_header">Number of Guests</th>
			<th class="col_header">Days of Week</th>
			<th class="col_header">Posted</th>

		</tr>
	</thead>


	<tbody>
	<?php // 3. Use returned data (if any)
	while($client = mysqli_fetch_assoc($clients)) { ?>
	<tr class="rows">
		<td class="id"><?php echo $client["id"]; ?></td>
		<td class="full_name"><?php echo $client["full_name"]; ?></td>
		<td class="email"><?php echo $client["email"]; ?></td>
		<td class="phone"><?php echo $client["phone"]; ?></td>
		<td class="event_type"><?php echo $client["event_type"]; ?></td>
		<td class="dates"><?php echo $client["dates"]; ?></td>
		<td class="guests"><?php echo $client["guests"]; ?></td>
		<td class="days_off_wk"><?php echo $client["days_off_wk"]; ?></td>
		<td class="timestamp"><?php echo $client["timestamp"]; ?></td>
		<?php } ?>
	</tr>
</tbody>
</table>


	
<?php
// 4. Release returned data
mysqli_free_result($clients);
?>

<script type="text/javascript">
$('#big_plus').click(function(){
  $('#book_list').css("overflow", "hidden");
  $('body').css("overflow", "hidden");
});

</script>




