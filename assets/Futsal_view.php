<!DOCTYPE html>
<html>
<head>
	<title>Futsal Try Out Form</title>
</head>
<body>

	<?php echo form_open('futsal/create'); ?>
	<h1>Futsal Try-Out Form</h1>
			Kicking Foot: 
			  <input type="radio" name="kickingfoot" value="right" checked> Right
			  <input type="radio" name="kickingfoot" value="left"> Left
			  <input type="radio" name="kickingfoot" value="both"> Both
			<br />
			Player's Position: <br />
			<input type="radio" name="player_position" value="goal keeper"> Goal Keeper
			  <input type="radio" name="player_position" value="defense"> Defense
			  <input type="radio" name="player_position" value="mid field"> Mid Field
			  <input type="radio" name="player_position" value="forward"> Forward<br>
			<br />
			<input type="submit" value="Submit">
			<?php echo form_close(); ?>
			<hr />

			
</body>
</html>