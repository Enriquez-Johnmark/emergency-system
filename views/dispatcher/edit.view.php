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

                <div class="row">
                    <div class="col-md-4">
                        <form method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="<?= $dispatcherId['id'] ?>">
                            <input type="hidden" name="roles" value="2">

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter First Name Here" class="form-control" name="first_name" value="<?= $dispatcherId['first_name']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" placeholder="Enter Middle Name Here" class="form-control" name="middle_name" value="<?= $dispatcherId['middle_name']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Last Name Here" class="form-control" name="last_name" value="<?= $dispatcherId['last_name']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                    <select class="form-control" name="gender" id="gender" required="true">
                                        <option value="" selected disabled>-- Select Gender --</option>
                                        <option value="male"<?php if ($dispatcherId['gender'] == 'male') echo ' selected="selected"'; ?>>Male</option>
                                        <option value="female"<?php if ($dispatcherId['gender'] == 'female') echo ' selected="selected"'; ?>>Female</option>
                                    </select>
                            </div>
                            <div class="form-group">
									<label>Birth Date</label>
                                    <div class="cal-icon">
                                       <input type="text" class="form-control datetimepicker" value="<?= $dispatcherId['dob']?>" name="dateofBirth" required> 
                                        <span>Current Date of Birth: <?= date('Y-m-d', strtotime($dispatcherId['dob']))?> </span>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Mobile No.</label>
                                <input type="number" placeholder="Enter Mobile No Here" class="form-control" name="mobile_no" value="<?= $dispatcherId['mobile_no']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Email Adress</label>
                                <input type="email" placeholder="Enter Email Address Here" class="form-control" name="email" value="<?= $dispatcherId['email']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" placeholder="Enter Password Here" class="form-control" name="password" value="<?= $dispatcherId['password']?>" required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>