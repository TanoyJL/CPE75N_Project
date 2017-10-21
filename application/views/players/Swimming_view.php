
	<style type="text/css">

	table, th, td {
    	border: 1px solid black;
	}

	</style>
</head>
<body>
	<center>

	</center>
	<table>
		  <tr>
		  	<th>First Name</th>
		    <th>Last Name</th>
		    <th>ID Number</th>
		    <th>Course and Year</th>
		    <th>Gender</th>
		    <th>Age</th>
		    <th>Date of Birth</th>
		    <th>Email</th>
		    <th>Address</th>
		    <th>Years of Experience</th>
		    <th>Height(in feet)</th>
		    <th>Weight(in feet)</th>
		     <th>Back Stroke(50 meter)</th>
		     <th>Back Stroke(100 meter)</th>
		     <th>Back Stroke(200 meter)</th>
		     <th>Free Style(50 meter)</th>
		     <th>Free Style(100 meter)</th>
		     <th>Free Style(200 meter)</th>
		     <th>Free Style(400 meter)</th>
		     <th>Free Style(800 meter)</th>
		     <th>Free Style(1500 meter)</th>
		     <th>Butterfly(50 meter)</th>
		     <th>Butterfly(100 meter)</th>
		     <th>Butterfly(200 meter)</th>
		     <th>Breast Stroke(50 meter)</th>
		     <th>Breast Stroke(100 meter)</th>
		     <th>Breast Stroke(200 meter)</th>
		     <th>Individual Medley(200 meter)</th>
		     <th>Individual Medley(400 meter)</th>

		  </tr>
		  	<?php if(isset($records)) : foreach ($records as $rows) :?>
			<!-- PUT RECORDS HERE FROM DB-->
		  <tr>
		  	<td><?php echo $rows->first_name; ?></td>
		    <td><?php echo $rows->last_name; ?></td>
		    <td><?php echo $rows->id_num; ?></td>
		    <td><?php echo $rows->course_year; ?></td>
		    <td><?php echo $rows->gender; ?></td>
		    <td><?php echo $rows->age; ?></td>
		    <td><?php echo $rows->birthdate; ?></td>
		    <td><?php echo $rows->email; ?></td>
		    <td><?php echo $rows->address; ?></td>
		    <td><?php echo $rows->years_experience; ?></td>
		    <td><?php echo $rows->height; ?></td>
		    <td><?php echo $rows->weight; ?></td>
		    <td><?php echo $rows->back_stroke1; ?></td>
		    <td><?php echo $rows->back_stroke2; ?></td>
		    <td><?php echo $rows->back_stroke3; ?></td>
		    <td><?php echo $rows->free_style1; ?></td>
		    <td><?php echo $rows->free_style2; ?></td>
		    <td><?php echo $rows->free_style3; ?></td>
		    <td><?php echo $rows->free_style4; ?></td>
		    <td><?php echo $rows->free_style5; ?></td>
		    <td><?php echo $rows->free_style6; ?></td>
		    <td><?php echo $rows->butterfly1; ?></td>
		    <td><?php echo $rows->butterfly2; ?></td>
		    <td><?php echo $rows->butterfly3; ?></td>
		    <td><?php echo $rows->breast_stroke1; ?></td>
		    <td><?php echo $rows->breast_stroke2; ?></td>
		    <td><?php echo $rows->breast_stroke3; ?></td>
		    <td><?php echo $rows->individual_medley1; ?></td>
		    <td><?php echo $rows->individual_medley2; ?></td>
		     <td><a  " href="<?php echo site_url('swimming/delete_row/'.$rows->id_num); ?>"> Delete Player</a></td>


		  </tr>

		  <?php endforeach; ?>
		  			<?php else: ?>
			<center><h2 style="color:red;">Sorry, No Records</h2></center>
			<?php endif; ?>
	</table>



