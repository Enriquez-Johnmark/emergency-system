<?php
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

    if($_SESSION['roles'] != '1' && $_SESSION['roles'] != '2' )
    {
        $_SESSION['error'] = 'You are not Authorized';
        header('location: /login');
    }

?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>



<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12 mt-5">
							<?php if($_SESSION['roles'] == '1') : ?>	
								<h3 class="page-title mt-3">Good Day Admin</h3>
							<?php endif;?>
							<?php if($_SESSION['roles'] == '2') : ?>	
								<h3 class="page-title mt-3">Good Day Dispatcher</h3>
							<?php endif;?>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										
										<h3 class="card_widget_header"><?php echo $countPending ?></h3>
										<h6 class="text-muted"><a href="/pending" style="text-decoration: underline;">Pending Reports</a></h6> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header"></h3>
										<h6 class="text-muted"><a href="/ongoing" style="text-decoration: underline;">Ongoing Reports</a></h6> 
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header"><?php echo $countCompleted?></h3>
										<h6 class="text-muted"><a href="/completed" style="text-decoration: underline;">Completed Reports</a></h6> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php require base_path('views/partials/footer.php') ?>




