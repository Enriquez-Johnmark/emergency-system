<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<?php  ?>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Emergency</title>
	<link rel="shortcut icon" type="image/x-icon" href="/assets/img/emergency.png">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="/assets/css/feathericon.min.css">
	<link rel="stylesheet" href="/assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="/assets/css/style.css"> </head>


	<link rel="stylesheet" href="/assets/plugins/datatables/datatables.min.css">

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<!-- <a href="index.html" class="logo"> <img src="assets/img/emergency.png" width="50" height="70" alt="logo"> <span class="logoclass">EmergPol</span> </a> -->
				<a href="/dashboard" class="logo logo-small "> <img src="/assets/img/emergency.png" alt="Logo" width="30" height="30"> </a>

				<a href="/dashboard" class="logo"><span class="logoclass"><img src="/assets/img/emergency.png" alt="Logo" width="30" height="30">EmergPol </span></a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="/assets/img/profiles/avatar.png" width="31" alt="Manager"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="/assets/img/profiles/avatar.png" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>Hi,<?= $_SESSION['first_name'] ?></h6>

							<?php if($_SESSION['roles'] == '1') : ?>	
								<p class="text-muted mb-0">Administrator</p>
							<?php endif;?>

							<?php if($_SESSION['roles'] == '2') : ?>	
								<p class="text-muted mb-0">Dispatcher</p>
							<?php endif;?>

							<?php if($_SESSION['roles'] == '3') : ?>	
								<p class="text-muted mb-0">User</p>
							<?php endif;?>
							</div>
						</div> 
							<!-- <a class="dropdown-item" href="profile.html">My Profile</a> 
							<a class="dropdown-item" href="settings.html">Account Settings</a>  -->
							
							<!-- <a class="dropdown-item button" type="submit" href="/logout">Logout 1</a> -->
							<form action="/logout" method="POST">
								<button type="submit" name="logout" class="btn-link dropdown-item button">Logout</button>
							</form>
					 	</div>
				</li>
			</ul>
		</div>


