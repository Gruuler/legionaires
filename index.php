<head>

<?php
include 'master.php';
?>

<script type="text/javascript" src="scripts/javascript.js"></script>

</head>

<body>
	
	<?php

	//I want to scale back the header.  In a prior project, header handled everything.  In this one,
	//it will only cover the banner and objects inside of that.

	include $header;

	?>

	<div class="col-md-9">
		<form>
			Character Name: <input type="text" name="character" id="cSearch">
			<input type="button" value="Search" id="sButton">
			<label for="cSearch"></label>
		</form>

		<br>
		<br>
		<br>
		<p>Hello</p>
	</div>
	<div class="col-md-3">
		<?php include $login; ?>
	</div>
</body>