<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2"><?=  $heading ?></h4> 
								<i style="font-size:26px;cursor: pointer" class="fa float-right mt-1" onClick="window.location.href=window.location.href">&#xf021;</i>

								<!-- <a href="#" class="btn btn-primary float-right veiwbutton">Add Incident</a>  -->
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col">
						<i style="font-size:26px;cursor: pointer" class="fa float-right card-title mb-3" onClick="window.location.href=window.location.href">&#xf021;</i>
					</div> -->

					<!-- <div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-3">
									<div class="form-group">
										<label>Staff ID</label>
										<input class="form-control" type="text" value="BKG-0001"> </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Staff Name</label>
										<input class="form-control" type="text" value="BKG-0001"> </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Role</label>
										<select class="form-control" id="sel1" name="sellist1">
											<option>Select</option>
											<option>Staff</option>
											<option>Manager</option>
											<option>Receptionalist</option>
											<option>Accountant</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Search</label> <a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a> </div>
								</div>
							</div>
						</form>
					</div> -->
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="incident table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Reported Date</th>
                                                <th>Incident No.</th>
												<th>Incident</th>
												<th>Comments</th>
												<th>Reported By</th>
                                                <!-- <th>Dispatched Respondent</th> -->
                                                
                                                <th>Status</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>

											<?php foreach ($reports as $report) : ?>
											<tr>
												<td><?= date('F j, Y, g:i a',strtotime($report['created_at'])) ?></td>
                                                <td><?php echo $report['id']?></td>
												<td><?= $report['name'] ?></td>
                                                <!-- <td>Fire Fighter</td> -->
												<td><?= $report['comments'] ?></td>
												<td><?= $report['first_name'].' '.$report['last_name'] ?></td>
												<td>
													<?php if ($report['status'] == '2' ) :?>
														<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Ongoing</a> </div>
													<?php endif; ?>
												</td>
												<td class="text-center">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> 
															<a class="dropdown-item" href="/incident?id=<?= $report['id'] ?>"><i class="fas fa-pencil-alt m-r-5"></i>View and Update</a> 
															<!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>  -->
														</div>
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