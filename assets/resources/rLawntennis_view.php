<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	table, th, td {
    	border: 1px solid black;
	}

	</style>
</head>
<body>
	<center>
	<h2>Records: </h2>
	</center>
	<table>
		  <tr>
		    <th>Firstname</th>
		    <th>Lastname</th> 
		    <th>Age</th>
		    <th>Birthdate</th>
		    <th>Phone Number</th>
		    <th>E-mail</th>
		    <th>Address</th>
		    <th>Years of playing experience</th>
		    <th>Weight</th>
		    <th>Height</th>
		    <th>Hitting Hand</th>
		    <th>Preffered Categories</th>
		    <th>Player Experience</th>
		    <th>Rank Experience</th>
		    <th>Course Year</th>
		    <th>Id Number</th>
		    <th>Remarks</th>
		  </tr>
		  	<?php if(isset($records)) : foreach ($records as $rows) :?>
			<!-- PUT RECORDS HERE FROM DB-->
		  <tr>
		    <td><?php echo $rows->first_name; ?></td>
		    <td><?php echo $rows->last_name; ?></td>
		    <td><?php echo $rows->age; ?></td>
		    <td><?php echo $rows->birthdate; ?></td>
		    <td><?php echo $rows->phone_number; ?></td>
		    <td><?php echo $rows->email; ?></td>
		    <td><?php echo $rows->address; ?></td>
		    <td><?php echo $rows->year_experience; ?></td>
		    <td><?php echo $rows->weight; ?></td>
		    <td><?php echo $rows->height; ?></td>
		    <td><?php echo $rows->hittinghand; ?></td>
		    <td><?php echo $rows->preffered_categories; ?></td>
		    <td><?php echo $rows->player_experience; ?></td>
		    <td><?php echo $rows->rank_experience; ?></td>
		    <td><?php echo $rows->course_year; ?></td>
		    <td><?php echo $rows->id_num; ?></td>
		    <td><?php echo $rows->remarks; ?></td>
		  </tr>
		  <?php endforeach; ?>
		  			<?php else: ?>
			<center><h2 style="color:red;">Sorry, No Records</h2></center>
			<?php endif; ?>
	</table>

</body>
</html>