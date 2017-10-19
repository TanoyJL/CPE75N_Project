<!DOCTYPE html>
<html>
<head>
	<title>Lawn Tennis Try Out Form</title>
</head>
<body>
	<?php echo form_open('Lawntennis/create'); ?>
	<h1>Try-Out Form</h1>
		First Name: <input type="text" name="first_name" id="first_name" /><br />
			Last Name: <input type="text" name="last_name" id="last_name" /><br />
			Id Number: <input type="text" name="id_num" id="id_num" /><br />
			Course and Year: <input type="text" name="course_year" id="course_year" /><br />
			Age: <input type="number" name="age" id="age" /><br /> 
			Player Date of Birth: <input type="date" name="birthdate" id="birthdate" /><br />
			Contact Phone Number: <input type="number" name="phone_number" id="phone_number" /><br />
			Contact E-mail:	 <input type="text" name="email" id="email" /><br /><br />
			Address: <input type="text" name="address" id="address" /><br />
			Years of Playing Experience: <input type="number" name="year_experience" id="year_experience" /><br />
			Height(ft): <input type="text" name="height" id="height" /><br />
			Weight(kg): <input type="text" name="weight" id="weight" /><br />
			Hitting Hand: 
			  <input type="radio" name="hittinghand" value="right" checked> Right
			  <input type="radio" name="hittinghand" value="left"> Left
			<br />
			Preffered Categories: <br />
			<input type="radio" name="preffered_categories" value="singles"> Singles
			  <input type="radio" name="preffered_categories" value="doubles"> Doubles
			  <input type="radio" name="preffered_categories" value="mixed doubles"> Mix Doubles
		
			Playing Experience: <br>
			  <input type="checkbox" name="player_experience" value="National Team"> National Team
			  <input type="checkbox" name="player_experience" value="National PRISAA"> National PRISAA
			  <input type="checkbox" name="player_experience" value="Regional PRISAA"> Regional PRISAA<br>
			  <input type="checkbox" name="player_experience" value="UNI Games"> UNI Games
			  <input type="checkbox" name="player_experience" value="Philippine National Games"> Philippine National Games
			  <input type="checkbox" name="player_experience" value="Palarong Pambansa"> Palarong Pambansa<br>
			  <input type="checkbox" name="player_experience" value="CVIRAA"> CVIRAA
			  <input type="checkbox" name="player_experience" value="High School Only"> High School Only<br>
			<br />
			Rank Achievement of Experience: <br /> <textarea name="rank_experience" rows="5" cols="50">Write Briefly.
			</textarea>
			<input type="submit" value="Submit">
			<?php echo form_close(); ?>
			<hr />

			
</body>
</html>