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
                                <label>Respondent Type</label>
                                <select class="form-control" name="respondent_type_id" id="status" required="true">
                                <option value="" selected disabled>-- Select Respondent Types --</option>
                                <?php foreach ( $respondentTypes as $respondentType ): ?>
                                <option value="<?php echo $respondentType['id']; ?>" 
                                <?php if ($respondentType['id'] == $respondentId['respondent_type_id']) echo ' selected="selected"'; ?>>
                                        <?php echo $respondentType['name']; ?>
                                </option>
                                <?php endforeach; ?>
                                </select>
                               
                               
                            </div>
                            <div class="form-group">
                                <label>Team Leader</label>
                                <input type="text" class="form-control" name="team_leader" value="<?= $respondentId['team_leader'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Mobile No./Tel No.</label>
                                <input type="number" class="form-control" name="mobile_no" value="<?= $respondentId['mobile_no'] ?>">
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
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>