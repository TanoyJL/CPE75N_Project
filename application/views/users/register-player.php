<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="<?php echo base_url().'/assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url(). '/assets/js/jquery.dropotron.min.js'?>"></script>
    <script src="<?php echo base_url() .'/assets/js/jquery.scrollgress.min.js'?>"></script>
    <script src="<?php echo base_url() .'/assets/js/skel.min.js'?>"></script>
    <script src="<?php echo base_url() .'/assets/js/skel-layers.min.js'?>"></script>
    <script src="<?php echo base_url() .'/assets/js/init.js'?>"></script>
    <noscript>
      <link rel="stylesheet" href="<?php echo base_url() .'/assets/css/skel.css'?>" />
      <link rel="stylesheet" href="<?php echo base_url() .'/assets/css/style.css'?>" />
      <link rel="stylesheet" href="<?php echo base_url() .'/assets/css/style-wide.css'?>" />
    </noscript>
	
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1>USC Sports Database</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="button">Home</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Athlete Registration</h2>
				</header>

				<form action="Sports.html">
					<form method="post" action="Sports.html">
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" name="FirstName" placeholder="First Name"  required/>
							</div>
							<div class="6u 12u(mobilep)">
								<input type="text" name="LastName" placeholder="Last Name"  required/>
							</div>

						</div>

						

						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" name="CourseAndYear" placeholder="Course & Year"  required/>
							</div>
							<div class="6u 12u(mobilep)">
								<input type="email" name="Email" placeholder="Email Address"  required/>
							</div>

							<div class="4u 12u(mobilep)">
										<input type="radio" id="male" name="gender" required>
										<label for="male">Male</label>
								</div>
								<div class="8u 12u(mobilep)">
										<input type="radio" id="female" name="gender" required>
										<label for="female">Female</label>
										<div class="4u 12u(narrower)">
											</div>
							</div>
						</div>
						<div class="row uniform 50%">
							
							<div class="4u 12u(mobilep)">
								<input type="mobile" name="ContactNumber" placeholder="Contact Number"  required/>
							</div>
							<div class="4u 12u(mobilep)">
								<input type="number" name="Age" maxlength="2" min="13" placeholder="Age"  required/>
							</div>
							<div class="4u 12u(mobilep)">
								<input type="date" name="DateOfBirth" placeholder="Date of Birth"  required/> <-- Birthday
							</div>

							<div class="4u 12u(mobilep)">
								<input type="number" name="cash" id="idnum" value="" placeholder="ID number"  required/>
							</div>
							<div class="4u 12u(mobilep)">
								<input type="number" name="Age" maxlength="2" min="13" placeholder="Height"  required/>
							</div>
							<div class="4u 12u(mobilep)">
								<input type="number" name="Age" maxlength="2" min="13" placeholder="Weight"  required/>
							</div>
						</div>
						
						<hr>
						<div class="row uniform 50%">
						<div class="6u 12u(narrower)">
						<h3>Playing Experience</h3>

											<br><input type="radio" id="NationalTeam" name="PlayingExperience">
											<label for="NationalTeam">National Team</label><br><br>
											<input type="radio" id="NationalPRISAA" name="PlayingExperience">
											<label for="NationalPRISAA">National PRISAA</label><br><br>
											<input type="radio" id="RegionalPRISAA" name="PlayingExperience">
											<label for="RegionalPRISAA">Regional PRISAA</label><br><br>
											<input type="radio" id="UNIGames" name="PlayingExperience">
											<label for="UNIGames">UNI Games</label><br><br>
											<input type="radio" id="PhilippineNationalGames" name="PlayingExperience">
											<label for="PhilippineNationalGames">Philippine National Games</label><br><br>
											<input type="radio" id="PalarongPambansa" name="PlayingExperience">
											<label for="PalarongPambansa">Palarong Pambansa</label><br><br>
											<input type="radio" id="CVIRAA" name="PlayingExperience">
											<label for="CVIRAA">CVIRAA</label><br><br>
											<input type="radio" id="HighSchoolOnly" name="PlayingExperience">
											<label for="HighSchoolOnly">High School Only</label><br><br><br>
											<input type="text" id="Rank" name="Rank" placeholder="Others"><br>
									</div>

						<div class="6u 12u(narrower)">
					 		 	<h3>Rank/Achievement of Experience</h3>
											<input type="text" id="Rank" name="Rank" placeholder="National Team"><br>
											<input type="text" id="Rank" name="Rank" placeholder="National PRISAA"><br>
											<input type="text" id="Rank" name="Rank" placeholder="Regional PRISAA"><br>
											<input type="text" id="Rank" name="Rank" placeholder="UNI Games"><br>
											<input type="text" id="Rank" name="Rank" placeholder="Philippine National Games"><br>
											<input type="text" id="Rank" name="Rank" placeholder="Palarong Pambansa"><br>
											<input type="text" id="Rank" name="Rank" placeholder="CVIRAA"><br>
											<input type="text" id="Rank" name="Rank" placeholder="High School Only"><br>
											<input type="text" id="Rank" name="Rank" placeholder="Others"><br>
											
											
									</div>
								</div>
						<div class="row uniform">
							<div class="12u (mobilep)">
								<ul class="actions align-center">
									<li><input type="Submit" value="Proceed""/></li>
								</ul>
							</div>
							</div>


					</form>


				</form>
			</section>

	