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

                <?php if (isset($_SESSION['message']) ) : ?>
                    
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?= $_SESSION['message'] ?></strong>
                                    <?php unset($_SESSION['message']) ?>
                    </div>
                <?php endif; ?>

            
      
              
                <div class="col-md">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4 class="card-title">Bottom line tabs</h4>
                        </div> -->
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-bottom">
                                <li class="nav-item"><a class="nav-link active" href="#bottom-tab1" data-toggle="tab">Personal Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Incident Report</a></li>
                                <li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Incident Location</a></li>
                                <li class="nav-item"><a class="nav-link" href="#bottom-tab4" data-toggle="tab">Update Incident</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="bottom-tab1">
                                    <div class="col-lg-5">
                                        <div class="row mt-2">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">First Name</p>
                                            <p class="col-sm-9"><?= $reportUser['first_name'] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Middle Name</p>
                                            <p class="col-sm-9"><?= $reportUser['middle_name'] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Last Name</p>
                                            <p class="col-sm-9"><?= $reportUser['last_name'] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                            <p class="col-sm-9"><?= date('d F Y',strtotime($reportUser['dob'])) ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Gender</p>
                                            <p class="col-sm-9"><?= ucfirst($reportUser['gender']) ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile No.</p>
                                            <p class="col-sm-9"><?= $reportUser['mobile_no'] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email Address</p>
                                            <p class="col-sm-9"><?= $reportUser['email'] ?></p>
                                        </div>
                                        
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                            <p class="col-sm-9 mb-0"><?= $reportUser['street'] ?>,
                                                <br> <?= $reportUser['barangay'] ?>,
                                                <br> <?= $reportUser['city'] ?>,
                                                <br> <?= $reportUser['province'] ?>,
                                                <br> <?= $reportUser['country'] ?>,
                                                <br> <?= $reportUser['zipcode'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="bottom-tab2">
                                    <div class="col-lg-5">
                                        <div class="row mt-2">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Incident</p>
                                            <p class="col-sm-9"><?= $incident['name'] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Comments</p>
                                            <p class="col-sm-9"><?= $reportId['comments'] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date Reported</p>
                                            <p class="col-sm-9"><?= date('d F Y, h:i:s A',strtotime($reportId['created_at'])) ?></p>
                                        </div>

                                        <div class="row gallery">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Incident Photo</p>
                                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            
                                            <a href="<?= $reportId['photos']?>" target="_blank">
                                                <figure><img class="img-fluid img-thumbnail" style="max-height: 400px;max-width: 400px;" src="<?= $reportId['photos']?>" alt="Incident Photo"></figure>
                                                </a>
                                            </div>
                                           
                                        </div>

                                    </div>
                                    </div>
                                <div class="tab-pane" id="bottom-tab3">
                                <p>Location Via Google Map</p>
                                <iframe width="100%" height="600" src="https://maps.google.com/maps?q=<?php echo $reportId['latitude']; ?>,<?php echo $reportId['longitude']; ?>&output=embed"></iframe>
                                </div>
                                <div class="tab-pane" id="bottom-tab4">
                                <div class="col-md-4">
                                <form method="POST">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="id" value="<?= $reportId['id'] ?>">
                                    <div class="form-group">
                                        <label>Reporting to/Respondent</label>
                                        <select class="form-control" name="respondent_id" id="respondent_id" required="true">
                                            <option value="" selected disabled>-- Select Respondent --</option>
                                            <?php foreach($respondents as $respondent) : ?>
                                                <option value="<?= $respondent['id'] ?>"<?php if ($reportId['respondent_id'] == $respondent['id']) echo ' selected="selected"'; ?>><?= $respondent['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Triage</label>
                                        <select class="form-control" name="triage" id="triage" required="true">
                                            <option value="" selected disabled>-- Set Triage --</option>
                                            <option value="3"<?php if ($reportId['triage'] == '3') echo ' selected="selected"'; ?>>Non-urgent</option>
                                            <option value="2"<?php if ($reportId['triage'] == '2') echo ' selected="selected"'; ?>>Priority</option>
                                            <option value="1"<?php if ($reportId['triage'] == '1') echo ' selected="selected"'; ?>>Emergency</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Send Message to User</label>
                                        <textarea rows="5" cols="5" class="form-control" name="message" placeholder="Send Message" required="true"><?php echo $reportId['message'] ?></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Update Status</label>
                                        <select class="form-control" name="status" id="status" required="true">
                                            <option value="" selected disabled>-- Select Status --</option>
                                            <option value="0"<?php if ($reportId['status'] == '0') echo ' selected="selected"'; ?>>Pending</option>
                                            <option value="2"<?php if ($reportId['status'] == '2') echo ' selected="selected"'; ?>>Ongoing</option>
                                            <option value="1"<?php if ($reportId['status'] == '1') echo ' selected="selected"'; ?>>Done</option>
                                            </select>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 
                
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>