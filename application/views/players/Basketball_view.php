
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
		    <th>Shooting Hand</th>
		    <th>Position</th>
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
		    <td><?php echo $rows->shooting_hand; ?></td>
		    <td><?php echo $rows->position; ?></td>
		  </tr>
		  <?php endforeach; ?>
		  			<?php else: ?>
			<center><h2 style="color:red;">Sorry, No Records</h2></center>
			<?php endif; ?>
	</table>

