<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php session_start() ?>
<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Respondent Types</h4> <a href="/respondent-types/create" class="btn btn-primary float-right veiwbutton">Add Respondent Types</a> </div>
						</div>
					</div>
				</div>
				<?php if (isset($_SESSION['message']) ) : ?>
                    
					<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong><?= $_SESSION['message'] ?></strong>
									<?php unset($_SESSION['message']) ?>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
                                                <th>#</th>
												<th>Name</th>
												<th>Status</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php $i =1 ?>
											<?php foreach ($respondentTypes as $respondentType) : ?>
											<tr>
                                                <td><?php echo $i++; ?></td>
												<td><?= $respondentType['name'] ?></td>
												<td>
												<?php if ($respondentType['status'] == 1 ) :?>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												<?php else: ?>
													<div class="actions"> <a href="#" class="btn btn-sm bg-danger-light mr-2">Inactive</a> </div>
												<?php endif; ?>
												</td>
												<td class="text-center">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-staff.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
                                            <?php endforeach; ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>