<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('Core/Authentication.php') ?>


<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12 mt-5">
							<h3 class="page-title mt-3">Good Morning!</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active"><?= $heading ?></li>
							</ul>
						</div>
						<a href="tel:123123123123">Dial Emergency Number Admin</a>

						<?php echo $_SESSION['email']; ?>
					</div>
				</div>
			</div>
</div>

<!-- <div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Respondent Types</h4> <a href="add-staff.html" class="btn btn-primary float-right veiwbutton">Add Respondent Types</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
                                                
												<th>Name</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                
                                               
												<td>Fire Fighter</td>
												<td class="text-center">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-staff.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
                                            
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

<?php require base_path('views/partials/footer.php') ?>




