<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>Registration Form</h1>
  <h3><u>Basic Information</u></h3>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="DOB">DoB:</label>
    <div class="col-sm-6">
      <input type="date" name="dob" class="form-control" id="dob" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="religion">Religion:</label>
    
      <select name="religion" id="religion">
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="christian">Christian</option>
        <option value="buddhist">Buddhist</option>
    </select>
    </div>
  </div>


 <h3><u>Contact Information</u></h3>

  <div class="form-group">
    <label class="control-label col-sm-2" for="present Address">Present Address:</label>
    <div class="col-sm-6">
      <input type="text" name="present address" class="form-control" id="present address" placeholder="Enter Present Address">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Permanent Address">Permanent Address:</label>
    <div class="col-sm-6">
      <input type="text" name="permanent address" class="form-control" id="permanent address" placeholder="Enter Permanent Address">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Phone">Phone:</label>
    <div class="col-sm-6">
      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Phone number">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Website">Personal Website Link:</label>
    <div class="col-sm-6">
      <input type="website" name="website" class="form-control" id="website" placeholder="Enter Website link">
    </div>
  </div>



<h3><u>Account Information</u></h3>


  <div class="form-group">
    <label class="control-label col-sm-2" for="Username">Username:</label>
    <div class="col-sm-6">
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="Submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div> 