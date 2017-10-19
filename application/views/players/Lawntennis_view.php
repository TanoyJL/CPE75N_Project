<!DOCTYPE html>
<html>
<head>
	<title>Lawn Tennis Try Out Form</title>
</head>
<body>
	<?php echo form_open('Lawntennis/create'); ?>
	<h1>Try-Out Form</h1>
			Hitting Hand: 
			  <input type="radio" name="hittinghand" value="right" checked> Right
			  <input type="radio" name="hittinghand" value="left"> Left
			<br />
			Player's Position: <br />
			<input type="radio" name="preffered_categories" value="single"> Single
			 <input type="radio" name="preffered_categories" value="doubles"> Doubles
			 <input type="radio" name="preffered_categories" value="mixed doubles"> Mix Doubles
		<br />
		<input type="submit" value="Submit">
		<?php echo form_close(); ?>
	<hr />

			
</body>
</html>