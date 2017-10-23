<?php echo validation_errors(); ?>
<?php echo form_open('headcoach/edit/'.$id) ?>

				

             <section id="main" class="container">
        <header>
          <h2>Enter New Account Details</h2>
        </header>

          
            

            <div class="row uniform 50%">
           
              <div class="12u">
                <input type="text" name="username"  placeholder="Enter Username" />
              </div>
              <div class="12u">
                <input type="password" name="password"  placeholder="Enter Password" />
              </div>
              
<br>
            <div class="row uniform">
              <div class="12u (mobilep)">
                <ul class="actions align-center">
                  <li><input type="Submit" value="Submit"/></li>
                </ul>
              </div>

            </div>

            
      
      </section>