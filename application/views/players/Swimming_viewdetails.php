
	<?php  $url=$this->config->base_url(); ?>

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
								
								<h2>Applicant</h2>
								<center><a  class="special small button" href="<?php echo site_url('swimming/view_approved/'); ?>">View Approved Applicants</a> <a  class="special small button" href="<?php echo site_url('swimming/view/'); ?>">View Unapproved Applicants</a></center><br>


								<div class="table-wrapper">
								<?php if(isset($records)) : foreach ($records as $rows) :?>
									<center><h3>Basic Information</h3></center>
									<?php 
                       
                        echo '<img src=" '.$url.'assets/images/' . $rows->gender . '.png" style="border-radius:60px;">';
                        ?><br>
									<strong>Name: </strong><?php echo $rows->firstname; ?> <?php echo $rows->lastname; ?><br>
									<strong> ID Number: </strong><?php echo $rows->id_num; ?> <br>
									<strong> Course and Year: </strong><?php echo $rows->course_year; ?><br>
									<strong> Gender: </strong><?php echo $rows->gender; ?> <br>
									<strong> Contact Number:</strong> <?php echo $rows->contact_phone_number; ?><br>
									<strong> Age: </strong><?php echo $rows->age; ?> years old<br>
									<strong> Height: </strong><?php echo $rows->height; ?>ft<br>
									<strong> Weight: </strong><?php echo $rows->weight; ?>kg <br>
									<strong> Years of Playing Experience: </strong><?php echo $rows->years_of_playing_experience; ?> years<br>

									<table class="alt">
										<thead>
											<tr>
												<center><h3>Playing Experience</h3></center>
												<th>National Team</th>
												<th>National PRISAA</th>
												<th>Regional PRISAA</th>
												<th>UNI GAMES</th>
												<th>Philippine National Games</th>
												<th>Palarong Pambansa</th>
												<th>CVIRAA</th>
												<th>High School Only</th>
												<th>Others</th>


											</tr>
										</thead>
										<tbody>
											
											<tr>
												<td><?php echo $rows->playerexperience_nationalteam; ?></td>
												<td><?php echo $rows->playerexperience_national_PRISAA; ?></td>
												<td><?php echo $rows->playerexperience_regional_PRISAA; ?></td>
												<td><?php echo $rows->playerexperience_UNI_games; ?></td>
												<td><?php echo $rows->playerexperience_PH_national_games; ?></td>
												<td><?php echo $rows->playerexperience_palarong_pambansa; ?></td>
												<td><?php echo $rows->playerexperience_CVIRAA; ?></td>
												<td><?php echo $rows->playerexperience_highschool_only; ?></td>
												<td><?php echo $rows->playerexperience_others; ?></td>
											
												
												
											</tr>
											<tr>
												<td><?php echo $rows->playerexperience_nationalteam_rank; ?></td>
												<td><?php echo $rows->playerexperience_national_PRISAA_rank; ?></td>
												<td><?php echo $rows->playerexperience_regional_PRISAA_rank; ?></td>
												<td><?php echo $rows->playerexperience_UNI_games_rank; ?></td>
												<td><?php echo $rows->playerexperience_PH_national_games_rank; ?></td>
												<td><?php echo $rows->playerexperience_palarong_pambansa_rank; ?></td>
												<td><?php echo $rows->playerexperience_CVIRAA_rank; ?></td>
												<td><?php echo $rows->playerexperience_highschool_only_rank; ?></td>
												<td><?php echo $rows->playerexperience_others_rank; ?></td>
											
												
												
											</tr>
										
										</tbody>

										<tfoot>
											<tr>
												<td colspan="2"></td>
											</tr>
										</tfoot>
									</table>

									<table class="alt">
										<thead>
											<tr>
												<center><h3>Swimming Event</h3></center>
												<th></th>
												<th>50 meters</th>
												<th>100 meters</th>
												<th>200 meters</th>
												<th>400 meters</th>
												<th>800 meters</th>
												<th>1500 meters</th>
											</tr>
										</thead>
										<tbody>
											
											<tr>
												<td>Back Stroke</td>
												<td><?php echo $rows->back_stroke_50_meter; ?></td>
												<td><?php echo $rows->back_stroke_100_meter; ?></td>
												<td><?php echo $rows->back_stroke_200_meter; ?></td>
												<td></td>
												<td></td>
												<td></td>

											</tr>
											<tr>
												<td>Free Style</td>
												<td><?php echo $rows->free_style_50_meter; ?></td>
												<td><?php echo $rows->free_style_100_meter; ?></td>
												<td><?php echo $rows->free_style_200_meter; ?></td>
												<td><?php echo $rows->free_style_400_meter; ?></td>
												<td><?php echo $rows->free_style_800_meter; ?></td>
												<td><?php echo $rows->free_style_1500_meter; ?></td> 	
											</tr>

												<tr>
												<td>Butterfly</td>
												<td><?php echo $rows->butterfly_50_meter; ?></td>
												<td><?php echo $rows->butterfly_100_meter; ?></td>
												<td><?php echo $rows->butterfly_200_meter; ?></td>
												<td></td>
												<td></td>
												<td></td> 	
											</tr>

												<tr>
												<td>Breast Stroke</td>
												<td><?php echo $rows->breast_stroke_50_meter; ?></td>
												<td><?php echo $rows->breast_stroke_100_meter; ?></td>
												<td><?php echo $rows->breast_stroke_200_meter; ?></td>
												<td></td>
												<td></td>
												<td></td> 	
											</tr>
												<tr>
												<td>Individual Medley</td>
												
												<td></td>
												<td></td>
												<td><?php echo $rows->individual_medley_200_meter; ?></td>
												<td><?php echo $rows->individual_medley_400_meter; ?></td>
												<td></td>
												<td></td> 	
											</tr>
										
										</tbody>
										
										<tfoot>
											<tr>
												<td colspan="2"></td>
											</tr>
										</tfoot>
									</table>
									<table class="alt">
										<thead>
											<tr>
												<center><h3>Comments/Notes</h3></center>
												
										
											</tr>
										</thead>
										<tbody>
											
										
										</tbody>
										
										<tfoot>
											<tr>
												<td colspan="2"></td>
											</tr>
										</tfoot>
									</table>
								</div>
									<?php echo form_open('swimming/add_comment/'.$rows->id_num); ?>
									<textarea  placeholder="Leave comment or note here......" id="comment" class="form-control" rows="5" name="comment"><?php if ($rows->comment != NULL) echo $rows->comment?></textarea>
									
									 <br><button class="special button" type="submit" name="submit" value="Create contact " class="btn btn-info">Update Comment</button>
									 <?php echo form_close(); ?>
									 <?php endforeach; ?>
											<?php else: ?>
										<center><h2 style="color:red;">Sorry, No Records</h2></center>
									<?php endif; ?>
								<br><br><br>
								<center><a  class="special button" href="<?php echo site_url('swimming/delete_row/'.$rows->id_num); ?>">Delete Applicant</a></center>
							</section>

					</div>
				</div>