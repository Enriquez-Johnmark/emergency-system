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
                        <form method="POST" action="/dispatchers">
                            <input type="hidden" name="roles" value="2">

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter First Name Here" class="form-control" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" placeholder="Enter Middle Name Here" class="form-control" name="middle_name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Last Name Here" class="form-control" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender" required="true">
                                       <option value="" selected disabled>-- Select Status --</option>
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                    </select>
                            </div>
                            <div class="form-group">
									<label>Birth Date</label>
                                    <div class="cal-icon">
                                       <input type="text" class="form-control datetimepicker" name="dateofBirth" required> 
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Mobile No.</label>
                                <input type="number" placeholder="Enter Mobile No Here" class="form-control" name="mobile_no" required>
                            </div>
                            <div class="form-group">
                                <label>Email Adress</label>
                                <input type="email" placeholder="Enter Email Address Here" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" placeholder="Enter Password Here" class="form-control" name="password" required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>