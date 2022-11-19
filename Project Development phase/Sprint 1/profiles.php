<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Job</title>
		<!-- plugins:css -->
		<link rel="stylesheet" href="../vendors/feather/feather.css">
		<link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
		<link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
		<!-- endinject -->
		<!-- Plugin css for this page -->
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="../css/vertical-layout-light/style.css">
		<!-- endinject -->
		<link rel="shortcut icon" href="../images/favicon.png" />
	</head>

	<body>
		<div class="container-scroller">
			<!-- partial:../../partials/_navbar.html -->
			<?php
			include('header.php');
			?>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">

				<!-- partial:../../partials/_sidebar.html -->
				<?php
				include('menu.php');
				?>
				<!-- partial -->
				<div class="main-panel">
					<div class="content-wrapper">
						<div class="row">
							<div class="col-md-6 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Profiles</h4>

										<form class="forms-sample" method="post" action="#">
										<?php
										$result=mysqli_query($con,"select * from register where email='".$_SESSION['email']."'");
										while($row=mysqli_fetch_assoc($result))
										{
										?>
										
											<div class="form-group">
												<input type="text" class="form-control form-control-lg" name="fname" id="exampleInputUsername1" placeholder="First Name" value="<?php echo $row['FName'] ?>" required="">
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-control-lg" name="lname" id="exampleInputEmail1" placeholder="Last Name" value="<?php echo $row['LName'] ?>" required="">
											</div>
											<div class="form-group">
												<input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email Address" value="<?php echo $row['Email'] ?>" required="">
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-control-lg" name="mobile" id="exampleInputEmail1" placeholder="Mobile Number" value="<?php echo $row['Mobile'] ?>" required="">
											</div>

											<div class="form-group">
												<input type="text" class="form-control form-control-lg" name="college" id="exampleInputPassword1" placeholder="College Name" value="<?php echo $row['College'] ?>" required="">
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-control-lg" name="qual" id="exampleInputPassword1" placeholder="Qualification" value="<?php echo $row['Qualfi'] ?>" required="">
											</div>
											
											<div class="form-group">
												<textarea  class="form-control form-control-lg" name="desc" id="exampleInputPassword1" placeholder="Descriptions" required=""><?php echo $row['Descriptions'] ?></textarea>
											</div>
											<div class="form-group">
												<textarea  class="form-control form-control-lg" name="skills" id="exampleInputPassword1" placeholder="Technical Skills" required=""><?php echo $row['Skills'] ?></textarea>
											</div>
											<div class="form-group">
												<select class="form-control form-control-lg" name="area" id="exampleFormControlSelect2" required="">
													<option value="<?php echo $row['Area'] ?>"><?php echo $row['Area'] ?></option>
													<option value="Web Development">Web Development</option>
													<option value="Cloud Computing">Cloud Computing</option>
													<option value="Data Science">Data Science</option>
													<option value="Data Analytics">Data Analytics</option>
													<option value="Blockchain">Blockchain</option>
												</select>
											</div>
											<?php
										}
											?>
											<button type="submit" name="addtechnical" class="btn btn-primary mr-2">Submit</button>

										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- content-wrapper ends -->

					<!-- partial -->
				</div>
				<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->
		<!-- plugins:js -->
		<script src="../vendors/js/vendor.bundle.base.js"> </script>
		<!-- endinject -->
		<!-- Plugin js for this page -->
		<!-- End plugin js for this page -->
		<!-- inject:js -->
		<script src="../js/off-canvas.js"> </script>
		<script src="../js/hoverable-collapse.js"> </script>
		<script src="../js/template.js"> </script>
		<script src="../js/settings.js"> </script>
		<script src="../js/todolist.js"> </script>
		<!-- endinject -->
		<!-- Custom js for this page-->
		<!-- End custom js for this page-->
	</body>

</html>
