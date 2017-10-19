
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
		    <th>Hitting Hand</th>
		    <th>Preffered Categories</th>
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
		    <td><?php echo $rows->hittinghand; ?></td>
		    <td><?php echo $rows->preffered_categories; ?></td>
		  </tr>
		  <?php endforeach; ?>
		  			<?php else: ?>
			<center><h2 style="color:red;">Sorry, No Records</h2></center>
			<?php endif; ?>
	</table>

