<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>EmergPol</title>
	<link rel="shortcut icon" type="image/x-icon" href="/assets/img/emergency.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

	<style>
		@media screen and (max-width: 2000px) and (min-width: 767px) {
		h1.emerg {
			display: none;
		}
		}
	</style>

<body>
    <div class="main-wrapper login-body">
		<div class="login-wrapper">
		
			<div class="container">
			<h1 class="emerg text-center" style="font-weight:bold;">EmergPol</h1>
				<div class="loginbox">
					
					<div class="login-left"><span><h2><strong>EmergPol<h2></strong></span>
                    
                    <h5>Login or register from here to access.</h5>
                        </div>
                        
					<div class="login-right">
						<div class="login-right-wrap">
						<?php if (isset($_SESSION['message']) ) : ?>
							<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
										<strong><?= $_SESSION['message'] ?></strong>
											<?php unset($_SESSION['message']) ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
							</div>
						<?php endif; ?>

						<?php if (isset($_SESSION['error']) ) : ?>
							<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
										<strong><?= $_SESSION['error'] ?></strong>
											<?php unset($_SESSION['error']) ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
							</div>
						<?php endif; ?>
						<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
						 		Registration sucessful.
						</div> -->
						<h5 class="text-center font-weight-bold">Login</h5>
							<form method="POST">
								<div class="form-group">
                                    <label>Email</label>
									<input class="form-control" type="text" name="email" placeholder="Email"> </div>
								<div class="form-group">
                                    <label>Password</label>
									<input class="form-control" name="password" type="password" placeholder="Password"> </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<!-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div> -->
							<!-- <div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div> -->
							<div class="text-center dont-have">Don’t have an account? <a href="/register">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>

<?php

?>