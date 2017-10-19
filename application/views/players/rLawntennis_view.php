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
		    <th>Hitting Hand</th>
		    <th>Preffered Categories</th>
		  </tr>
		  	<?php if(isset($records)) : foreach ($records as $rows) :?>
			<!-- PUT RECORDS HERE FROM DB-->
		  <tr>
		    <td><?php echo $rows->hittinghand; ?></td>
		    <td><?php echo $rows->preffered_categories; ?></td>
		  </tr>
		  <?php endforeach; ?>
		  			<?php else: ?>
			<center><h2 style="color:red;">Sorry, No Records</h2></center>
			<?php endif; ?>
	</table>

</body>
</html>