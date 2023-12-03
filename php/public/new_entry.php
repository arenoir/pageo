<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<style>

/* reset margins */
html, body, div, span, h1, h2, h3, h4, h5, h6, p,
blockquote, pre, form, label, legend, table, caption, tbody, tfoot, thead,
tr, th, td, article, aside, canvas, details, embed, figure, figcaption,
footer, header, hgroup, menu, nav, output, section, summary, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font: inherit;
	vertical-align: baseline;
}


#modal_overlay {
	width: 600px;
	margin: auto;
}

label {
	font-family: acumin-pro, sans-serif;
	font-weight: 400;
	text-align: left;
	font-style: normal;
	text-transform: none;
}

h2 {
	font-family: acumin-pro, sans-serif;
	font-weight: 200;
	font-size: 24px;
	padding-bottom: 20px;
	padding-top: 20px;
	text-align: left;
	text-transform: uppercase;
	font-style: normal;	
}


input[type=text], select {
	font-family: acumin-pro, sans-serif;
	font-weight: 200;
	letter-spacing: 1px;
	font-size: 14px;
	width: 100%;
	padding-bottom: 20px;
	padding-top: 20px;
	outline: none;
	margin: 8px 0;
	display: inline-block;
	border: none;
	border-bottom: 1px solid #ccc;
	border-radius: 0;
	box-sizing: border-box;

}



input[type=submit] {
	width: 100%;
	background-color: #DFB9A4;
	color: #FFFFFF;
	padding: 24px 0px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-family: acumin-pro, sans-serif;
	font-size: 16px;
	text-transform: uppercase;
	font-style: normal;
	font-weight: 200;
	letter-spacing: 1.6px;
	text-align: center;
	margin-bottom: 20px;
}

.modal_button_cancel {
	width: 100%;
	background-color: #DFB9A4;
	color: #FFFFFF;
	padding: 24px 0px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-family: acumin-pro, sans-serif;
	font-size: 16px;
	text-transform: uppercase;
	font-style: normal;
	font-weight: 200;
	letter-spacing: 1.6px;
	text-align: center;
	margin-bottom: 20px;
	

}

.buttons {
	padding-top: 24px;
}



input[type=modal_button]:hover {
	background-color: none;
}

input[type=text]:focus {
	background-color: none;
	border: none;
	border-bottom: 1px dotted black;
}

.form_row div {
	  column-count: 2;

}


</style>

</head>


<body>




  <div id="main">

    <div id="modal_overlay">
      <h2>New Entry</h2>
      
      <form action="create_entry.php" method="post">

 

        <label class="form_label">full_name:</label> <br> 
          <input class="form_element" type="text" name="full_name" value="" />
  
        <label class="form_label">email:</label> <br> 
          <input class="form_element" type="text" name="email" value="" />

        <label class="form_label">phone:</label> <br> 
          <input class="form_element" type="text" name="phone" value="" />

				<label class="form_label">event_type:</label> <br> 
          <input class="form_element" type="text" name="event_type" value="" />

        <label class="form_label">dates:</label> <br> 
          <input class="form_element" type="text" name="dates" value="" />
  
        <label class="form_label">guests:</label> <br> 
          <input class="form_element" type="text" name="guests" value="" />

        <label class="form_label">days_off_wk:</label> <br> 
          <input class="form_element" type="text" name="days_off_wk" value="" />




    <div class="buttons">
    	<input class="modal_button_submit" type="submit" name="submit" value="Create Entry"/> 
		<a href="../db_home.php">
   		<div class="modal_button_cancel">Cancel</div>
		</a>
    </div>

      </form>
      <br>

    </div>
  </div>


