<?php echo validation_errors(); ?>
<?php echo form_open('users/login_coach/') ?>
	
				

             <section id="main" class="container">
        <header>
          <h2>Enter Log-in Details</h2>
        </header>

          
            

            <div class="row uniform 50%">
              <div class="12u">
                <input type="text" name="username"  placeholder="Enter Username" />
              </div>
              <div class="12u">
                <input type="password" name="password" i placeholder="Enter Password" />
              </div>

            </div>

            <div class="row uniform">
              <div class="12u (mobilep)">
                <ul class="actions align-center">
                  <li><input type="Submit" value="Log-in"/></li>
                </ul>
              </div>

            </div>

            
      
      </section>