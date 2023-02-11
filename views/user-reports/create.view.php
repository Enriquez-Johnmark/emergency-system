<?php require base_path('Core/UserAuthentication.php') ?>
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

                <?php if (isset($_SESSION['error']) ) : ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong><?= $_SESSION['error'] ?></strong>
                                            <?php unset($_SESSION['error']) ?>
                                </div>
                            </div>
                        </div>
				<?php endif; ?>
				
                <div class="row">
                    <div class="col-md-4">
                        <form method="POST" action="/reports" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Incident</label>
                                <input type="hidden" name="user_id" value="<?= $_SESSION['id'] ?>">
                                <input type="hidden" name="status" value="0">
                                <input type="hidden" id="lat" name="latitude">
                                <input type="hidden" id="long" name="longitude">
                                <select class="form-control" name="incident_type_id" required="true" onclick="getLocation(this)">
                                       <option value="" selected disabled>-- Select Incident --</option>
                                       <?php foreach($incidentTypes as $incidentType) : ?>
                                       <option value="<?= $incidentType['id'] ?>"><?= $incidentType['name'] ?></option>
                                       <!-- <option value="0">Ambulance</option> -->
                                       <?php endforeach; ?>
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <label>Comments</label>
                                <textarea rows="5" cols="5" class="form-control" name="comments" placeholder="Enter Comments" required></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label>Photo</label>
                                <button style="cursor:pointer" class="btn btn-info" onclick="$('#input').click()">Add Photos</button>
                                <input type="file" capture="user" accept="image/*" id="input" style="display:none">
                            </div> -->
                            <div class="form-group">      
                                <label>Add Photo</label>
                                <p class="font-italic" style="font-size:12px;">* Please add photos for verification purposes</p>  
                                <div class="row">                                
                                <div class="user-image text-center col-8">
                                    <div style="width: 200px; height: 200px; overflow: hidden; background: #cccccc; margin: 0 auto">
                                        <img src="..." class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="button" style="cursor:pointer;position: absolute;top: 50%;transform: translateY(-50%);" for="chooseFile" class="btn btn-outline-info active" onclick="$('#chooseFile').click()">Add Photo</button>
                                    <input type="file"  name="photos" capture="user" accept="image/*" id="chooseFile" onchange="return fileValidation()" style="display:none">
                                </div>
                                

                                </div>
                                <!-- <div class="custom-file">
                                    <div class="input-group mb-3">
                                    <input type="file" name="photos" class="custom-file-input" id="chooseFile" onchange="return fileValidation()" accept="image/x-png,image/jpeg" required>
                                    <label class="custom-file-label" for="chooseFile">Add Photos</label>
                                    <button style="cursor:pointer" class="btn btn-info" onclick="$('#input').click()">Add Photos</button>
                                    <input type="file" capture="user" accept="image/*" id="input" style="display:none">

                                    </div>
                                </div> -->
                                <!-- <button style="cursor:pointer" class="btn btn-info" onclick="$('#input').click()">Add Photos</button>
                                <input type="file" capture="user" accept="image/*" id="input" style="display:none"> -->

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>



<?php require base_path('views/partials/footer.php') ?>