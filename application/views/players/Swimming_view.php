
	

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>University of San Carlos</h2>
					<p>Sports Club Management System</p>
				</header>
				<div class="row">
					<div class="12u">

						<!-- Table -->
							<section class="box">
								
								<h2><?php echo $applicants ?></h2>
								<center><a  class="special small button" href="<?php echo site_url('swimming/view_approved/'); ?>">View Approved Applicants</a> <a  class="special small button" href="<?php echo site_url('swimming/view/'); ?>">View Unapproved Applicants</a></center><br>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>ID number</th>
												<th>Course and Year</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php if(isset($records)) : foreach ($records as $rows) :?>
											<tr>
												<td><?php echo $rows->firstname; ?> <?php echo $rows->lastname; ?></td>
												<td><?php echo $rows->id_num; ?> </td>
												<td><?php echo $rows->course_year; ?> </td>
												
												<td><center><a  class="special small button" href="<?php echo site_url('swimming/'.$link.'/'.$rows->id_num); ?>"> <?php echo $link; ?></a></center></td>
												
												<td><center><a  class="small button" href="<?php echo site_url('swimming/view_details/'.$rows->id_num); ?>">View Details</a></center></td>
											</tr>
											<?php endforeach; ?>
											<?php else: ?>
										<center><h2 style="color:red;">Sorry, No Records</h2></center>
									<?php endif; ?>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="2"></td>
											</tr>
										</tfoot>
									</table>
								</div>
							</section>

					</div>
				</div>