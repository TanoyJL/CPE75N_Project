

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
								<h2><?php echo $title?></h2>
								
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Sport</th>
												<th>Username</th>
											
												
											</tr>
										</thead>
										<tbody>
											<?php if(isset($records)) : foreach ($records as $rows) :?>
											<tr>
												<td><?php echo $rows->sport; ?> </td>
												<td><?php echo $rows->username; ?> </td>
												<td><center><a  class="small button" href="<?php echo site_url('headcoach/edit/'.$rows->id_coach); ?>">Edit	</a></center></td>
												
												
												
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