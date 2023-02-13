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

               
				
                <div class="row">
                    <div class="col-md-4">
                        <form method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="<?= $respondentId['id'] ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="<?= $respondentId['name'] ?>">
                                
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                    <select class="form-control" name="status" id="status" required="true">
                                       <option value="" selected disabled>-- Select Status --</option>
                                       <option value="1"<?php if ($respondentId['status'] == '1') echo ' selected="selected"'; ?>>Active</option>
                                       <option value="0"<?php if ($respondentId['status'] == '0') echo ' selected="selected"'; ?>>Inactive</option>
                                    </select>
                            </div>
                            <div class="text-right">
                                <a href="#" data-toggle="modal" data-target="#delete_asset"><button type="button" class="btn btn-outline-danger">Delete Data</button></a>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
                                <h3 class="delete_class">Are you sure want to delete this <mark><?=$respondentId['name']?></mark>?</h3>
                                <div class="m-t-20"> 
                                    <form method="POST" action="/respondent-type">
                                        <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $respondentId['id'] ?>">
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