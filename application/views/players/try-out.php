<?php echo form_open(''.$sport.''); ?>

<div class="border rounded control-label col-9 ">
    <div class="form-group row">
      <label class="control-label col-sm-2" > Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter first name" name="first_name" required>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2 " ></label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter last name" name="last_name" required>
      </div>
    </div>
     <div class="form-group row">
          <label class="control-label col-sm-2 " >ID Number</label>
          <div class="col-sm-10">          
            <input type="number" class="form-control" placeholder="Enter Id number" name="id_num" required>
          </div>
      </div>
       <div class="form-group row">
          <label class="control-label col-sm-2">Course and Year</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" placeholder="Enter course and year" name="course_year" required>
          </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-sm-2">Gender</label>
        <div class="col-sm-8" style="text-align:  left;">          
          <input type="radio" name="gender" value="M" checked required> Male <br>
          <input type="radio" name="gender" value="F" required> Female <br>
        </div>
      </div>  
       <div class="form-group row">
          <label class="control-label col-sm-2 " >Age</label>
          <div class="col-sm-10">          
            <input type="number" class="form-control" placeholder="Enter Age" name="age" required> 
          </div>
      </div> 
       <div class="form-group row">
          <label class="control-label col-sm-2" >Date of Birth</label>
          <div class="col-sm-10">          
            <input type="date" class="form-control" placeholder="Enter height" name="birthdate" required>
          </div>
      </div> 
     <div class="form-group row">
          <label class="control-label col-sm-2" >Email</label>
          <div class="col-sm-10">          
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
          </div>
      </div>  
     <div class="form-group row">
          <label class="control-label col-sm-2" >Address</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" placeholder="Enter address" name="address" required>
          </div>
      </div>
      <div class="form-group row">
          <label class="control-label col-sm-2" >Years of Experience</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" placeholder="Enter Years of Experience" name="years_experience" required>
          </div>
      </div> 
      <div class="form-group row">
          <label class="control-label col-sm-2" >Height(in feet)</label>
          <div class="col-sm-10">          
            <input type="number" class="form-control" placeholder="Enter height" name="height" required>
          </div>
      </div> 
        <div class="form-group row">
          <label class="control-label col-sm-2" >Weight(in feet)</label>
          <div class="col-sm-10">          
            <input type="number" class="form-control" placeholder="Enter weight" name="weight" required>
          </div>
      </div> 

     
 
  
    </div>
    

