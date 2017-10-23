<?php echo form_open(''.$sport.''); ?>
    
  <section id="main" class="container">
        <header>
          <h2>Athlete Registration</h2>
        </header>
            <div class="row uniform 50%">
              <div class="6u 12u(mobilep)">
                <input type="text" name="firstname" placeholder="First Name"  required/>
              </div>
              <div class="6u 12u(mobilep)">
                <input type="text" name="lastname" placeholder="Last Name"  required/>
              </div>

            </div>

            <div class="row uniform 50%">
              <div class="2u 12u(mobilep)">
                <input type="text" name="course_year" placeholder="Course & Year"  required/>
              </div>
              <div class="5u 12u(mobilep)">
                <input type="email" name="contact_email" placeholder="Email Address"  required/>
              </div>

              <div class="5u 12u(mobilep)">
                <input type="text" name="address" placeholder="Address"  required/>
              </div>

              <div class="4u 12u(mobilep)">
              
                    <input type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label>
                </div>
                <div class="8u 12u(mobilep)">
                    <input type="radio" id="female" name="gender" value="Female" required>
                    <label for="female">Female</label>
                    <div class="4u 12u(narrower)">
                      </div>
              </div>
            </div>
            <div class="row uniform 50%">
              
              <div class="4u 12u(mobilep)">
                <input type="number" name="contact_phone_number" placeholder="Contact Number"  required/>
              </div>
              <div class="4u 12u(mobilep)">
                <input type="number" name="age" maxlength="2" min="13" placeholder="Age"  required/>
              </div>
              <div class="4u 12u(mobilep)">
                <input type="date" name="players_date_of_birth" placeholder="Date of Birth"  required/> 
              </div>

              <div class="4u 12u(mobilep)">
                <input type="number" name="id_num" id="idnum" value="" placeholder="ID number"  required/>
              </div>
              <div class="4u 12u(mobilep)">
                <input type="number" name="height" maxlength="2" min="13" placeholder="Height in feet"  required/>
              </div>
              <div class="4u 12u(mobilep)">
                <input type="number" name="weight" maxlength="2" min="13" placeholder="Weight in kg"  required/>
              </div>
              <div class="4u 12u(mobilep)">
                <input type="number" name="years_of_playing_experience"  placeholder="Years of Experience"  required/>
              </div>
            </div>
            
            <br>
            <div class="row uniform 50%">
            <div class="6u 12u(narrower)">
            <h3>Playing Experience</h3>

                      <br><input value="yes" type="checkbox" id="NationalTeam" name="playerexperience_nationalteam">
                      <label for="NationalTeam">National Team</label><br><br>
                      <input value="yes" type="checkbox" id="NationalPRISAA" name="playerexperience_national_PRISAA">
                      <label for="NationalPRISAA">National PRISAA</label><br></br>
                      <input value="yes" type="checkbox" id="RegionalPRISAA" name="playerexperience_regional_PRISAA">
                      <label for="RegionalPRISAA">Regional PRISAA</label><br><br>
                      <input value="yes" type="checkbox" id="UNIGames" name="playerexperience_UNI_games">
                      <label for="UNIGames">UNI Games</label><br><br>
                      <input value="yes" type="checkbox" id="PhilippineNationalGames" name="playerexperience_PH_national_games">
                      <label for="PhilippineNationalGames">Philippine National Games</label><br><br>
                      <input value="yes" type="checkbox" id="PalarongPambansa" name="playerexperience_palarong_pambansa">
                      <label for="PalarongPambansa">Palarong Pambansa</label><br><br>
                      <input value="yes" type="checkbox" id="CVIRAA" name="playerexperience_CVIRAA">
                      <label for="CVIRAA">CVIRAA</label><br><br>
                      <input value="yes" type="checkbox" id="HighSchoolOnly" name="playerexperience_highschool_only">
                      <label for="HighSchoolOnly">High School Only</label><br><br><br>
                      <input  type="text" id="others" name="playerexperience_others" placeholder="Others"><br>
                  </div>

            <div class="6u 12u(narrower)">
                <h3>Rank/Achievement of Experience</h3>
                      <input type="text" id="Rank" name="playerexperience_nationalteam_rank" placeholder="National Team"><br>
                      <input type="text" id="Rank" name="playerexperience_national_PRISAA_rank" placeholder="National PRISAA"><br>
                      <input type="text" id="Rank" name="playerexperience_regional_PRISAA_rank" placeholder="Regional PRISAA"><br>
                      <input type="text" id="Rank" name="playerexperience_UNI_games_rank" placeholder="UNI Games"><br>
                      <input type="text" id="Rank" name="playerexperience_PH_national_games_rank" placeholder="Philippine National Games"><br>
                      <input type="text" id="Rank" name="playerexperience_palarong_pambansa_rank" placeholder="Palarong Pambansa"><br>
                      <input type="text" id="Rank" name="playerexperience_CVIRAA_rank" placeholder="CVIRAA"><br>
                      <input type="text" id="Rank" name="playerexperience_highschool_only_rank" placeholder="High School Only"><br>
                      <input type="text" id="Rank" name="playerexperience_others_rank" placeholder="Others"><br>    
                  </div>
                </div>
