<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Emergpol</title>
	<link rel="shortcut icon" type="image/x-icon" href="/assets/img/emergency.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/feathericon.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">



<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
            <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">User Registration<span class="float-right"><a href="/login"><i style='font-size:15px' class='fas'>&#xf30a;</i>&nbsp;Back to Login</a></span></h4>
                        </div>
                        <div class="card-body">
                           <form method="POST" action="/register">
                              <h4 class="card-title">Personal Information</h4>
                              <div class="row">
                                 <input type="hidden" name="roles" value="3">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" class="form-control" name="first_name" required>
                                    </div>
                                    <div class="form-group">
                                       <label>Middle Name</label>
                                       <input type="text" class="form-control" name="middle_name" required>
                                    </div>
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" name="last_name" required>
                                    </div>
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="select" name="gender" required="true">
                                       <option value="" selected disabled>-- Select Gender --</option>
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                                       </select>
                                    </div>
                                    <!-- <div class="form-group">
                                       <label class="d-block">Gender:</label>
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
                                          <label class="form-check-label" for="gender_male">Male</label>
                                       </div>
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                                          <label class="form-check-label" for="gender_female">Female</label>
                                       </div>
                                    </div> -->
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Mobile No.</label>
                                       <input type="number" class="form-control" name="mobile_no" required>
                                    </div>
                                 <div class="form-group">
										      <label>Birth Date</label>
                                    <div class="cal-icon">
                                       <input type="text" class="form-control datetimepicker" name="dateofBirth" required> 
                                    </div>
                                 </div>
                                    <div class="form-group">
                                       <label>Email</label>
                                       <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                       <label>Password</label>
                                       <input type="password" class="form-control" name="password" id="password" required>
                                    </div>
                                 </div>
                              </div>
                              <h4 class="card-title">Address</h4>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>No. & Street</label>
                                       <input type="text" class="form-control" name="street" required>
                                    </div>
                                    <div class="form-group">
                                       <label>Barangay</label>
                                       <input type="text" class="form-control" name="barangay" required>
                                    </div>
                                    <div class="form-group">
                                       <label>Province</label>
                                       <input type="text" class="form-control" name="province" required>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>City</label>
                                       <input type="text" class="form-control" name="city" required>
                                    </div>
                                    <div class="form-group">
                                       <label>Country</label>
                                       <input type="text" class="form-control" name="country" required>
                                    </div>
                                    <div class="form-group">
                                       <label>Zip Code</label>
                                       <input type="number" class="form-control" name="zipcode" required>
                                    </div>
                                 </div>
                              </div>
                             
                              <div class="text-center">
                                 <button type="submit" class="btn btn-primary">Register</button>
                              </div>

                              
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
				<!-- <div class="loginbox">
					<div class="login-right"> 
                    <div class="login-right-wrap">
							<form action="login.html">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Email"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Password"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Confirm Password"> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Already have an account? <a href="login.html">Login</a> </div>
						</div> 
                    </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<form action="login.html">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Email"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Password"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Confirm Password"> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Already have an account? <a href="login.html">Login</a> </div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/plugins/raphael/raphael.min.js"></script>

   
    <!-- <script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script> -->
</body>

</html>