<?php
include('dashboard/config.php');
session_start();
$_SESSION['email']=$_POST['email'];
$result=mysqli_query($con,"select * from register where email='".$_POST['email']."'");
if($row=mysqli_fetch_assoc($result))
{
	echo '<script language="javascript">alert("Already exist email id!");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
}
else {
	mysqli_query($con,"insert into register(Username,Password,Email)values('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."')");
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Job</title>
		<!-- plugins:css -->
		<link rel="stylesheet" href="vendors/feather/feather.css">
		<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
		<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
		<!-- endinject -->
		<!-- Plugin css for this page -->
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="css/vertical-layout-light/style.css">
		<!-- endinject -->
		<link rel="shortcut icon" href="images/favicon.png" />
	</head>

	<body>
		<div class="container-scroller">
			<div class="container-fluid page-body-wrapper full-page-wrapper">
				<div class="content-wrapper d-flex align-items-center auth px-0">
					<div class="row w-100 mx-0">
						<div class="col-lg-4 mx-auto">
							<div class="auth-form-light text-left py-5 px-4 px-sm-5">

								<h4 style="text-align: center;">Setup Profile</h4>
								
								<form class="pt-3" method="post" action="dashboard/process.php" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" name="fname" id="exampleInputUsername1" placeholder="First Name" required="">
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" name="lname" id="exampleInputEmail1" placeholder="Last Name" required="">
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" name="mobile" id="exampleInputEmail1" placeholder="Mobile Number" required="">
									</div>

									<div class="form-group">
										<input type="text" class="form-control form-control-lg" name="college" id="exampleInputPassword1" placeholder="College Name" required="">
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" name="qual" id="exampleInputPassword1" placeholder="Qualification" required="">
									</div>
									<div class="form-group">
										<input type="file" class="form-control form-control-lg" name="files" id="exampleInputPassword1" placeholder="upload resume" required="">
									</div>
									<div class="form-group">
										<textarea  class="form-control form-control-lg" name="desc" id="exampleInputPassword1" placeholder="Descriptions" required=""></textarea>
									</div>
									<div class="form-group">
										<textarea  class="form-control form-control-lg" name="skills" id="exampleInputPassword1" placeholder="Technical Skills" required=""></textarea>
									</div>
									<div class="form-group">
										<select class="form-control form-control-lg" name="area" id="exampleFormControlSelect2" required="">
											<option value="">Area of Interest</option>
											<option value="Web Development">Web Development</option>
											<option value="Cloud Computing">Cloud Computing</option>
											<option value="Data Science">Data Science</option>
											<option value="Data Analytics">Data Analytics</option>
											<option value="Blockchain">Blockchain</option>
										</select>
									</div>
									<div class="mt-3">
										<input type="submit" name="apply" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Apply"/>
									</div>
									<div class="text-center mt-4 font-weight-light">
										Already have an account?
										<a href="index.php" class="text-primary">Login</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->
		<!-- plugins:js -->
		<script src="vendors/js/vendor.bundle.base.js"> </script>
		<!-- endinject -->
		<!-- Plugin js for this page -->
		<!-- End plugin js for this page -->
		<!-- inject:js -->
		<script src="js/off-canvas.js"> </script>
		<script src="js/hoverable-collapse.js"> </script>
		<script src="js/template.js"> </script>
		<script src="js/settings.js"> </script>
		<script src="js/todolist.js"> </script>
		<!-- endinject -->
	</body>

</html>
<?php
}
?>
