<?php echo validation_errors(); ?>
<?php echo form_open('users/login_coach/') ?>
	
				<br><br>
			<div class="form-group row">

               <label class="control-label col-sm-4" style="text-align: right" > Username</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" placeholder="Enter username" name="username" value="">
                </div>
            </div>
            <div class="form-group row" >
                  <label class="control-label col-sm-4" style="text-align: right">Password</label> 
                  <div class="col-sm-4">          
                    <input type="password" class="form-control" placeholder="Enter password" name="password">
                  </div>
             </div>  
             <div class="form-group col-sm-12" >
               <button type="submit" name="login" value="login" class="btn btn-info">Login</button>
             </div>   