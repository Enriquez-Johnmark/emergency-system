<?php require base_path('Core/AdminAuthentication.php') ?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5"><?= $heading ?></h3> </div>
					</div>
				</div>

                <?php if (isset($errors['name']) ) : ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?= $errors['name'] ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($errors['number']) ) : ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?= $errors['number'] ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                        </div>
                        
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-4">
                        <form method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="<?= $hotlineId['id'] ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Name Here" class="form-control" value="<?php echo $hotlineId['name'] ?>" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" placeholder="Enter Tel/Mobile No. Here" class="form-control" value="<?= $hotlineId['number']?>" name="number">
                            </div>
                            <!-- <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                       <option>-- Select --</option>
                                       <option value="1">Active</option>
                                       <option value="0">Inactive</option>
                                    </select>
                            </div> -->
                            <div class="text-right">
                                <a href="#" data-toggle="modal" data-target="#delete_asset"><button type="button" class="btn btn-outline-danger">Delete Data</button></a>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                            <div class="mt-2 float-right">
                            </div>
                        </form>
                    </div>
                </div>

                <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
                                <h3 class="delete_class">Are you sure want to delete this <?=$hotlineId['name']?>?</h3>
                                <div class="m-t-20"> 
                                    <form method="POST" action="/hotline">
                                        <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $hotlineId['id'] ?>">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
			    </div>
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>