

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
		  	<th>Sport</th>
		    <th>Username</th>
		  </tr>
		  	<?php if(isset($records)) : foreach ($records as $rows) :?>
			<!-- PUT RECORDS HERE FROM DB-->
		  <tr>
		  	<td><?php echo $rows->sport; ?></td>
		    <td><?php echo $rows->username; ?></td>
		    
		    </tr>
		  <?php endforeach; ?>
		  			<?php else: ?>
			<center><h2 style="color:red;">Sorry, No Records</h2></center>
			<?php endif; ?>
	</table>

