<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Counseling</title>
		<!-- plugins:css -->
		<link rel="stylesheet" href="../vendors/feather/feather.css">
		<link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
		<link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
		<!-- endinject -->
		<!-- Plugin css for this page -->
		<link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
		<link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="../css/vertical-layout-light/style.css">
		<!-- endinject -->
		<style type="text/css">

			#chart-container {
				width: 600px;
				height: auto;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"> </script>
		<script type="text/javascript" src="../js/Chart.min.js"> </script>
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:partials/_navbar.html -->
			<?php
			include('header.php');
			?>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">

				<?php
				include('menu.php');
				?>
				<!-- partial -->
				<div class="main-panel">
					<div class="content-wrapper">

						<div class="row">

							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">HCL Technologies Ltd</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Data Science</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Infosys Ltd</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Java</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">MindTree Ltd</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Web Developement</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Mphasis Ltd</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Data Science</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Oracle Financial Services Software</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Java</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Quess Corp</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Web Developement</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Tata Consultancy Services</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Data Science</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Tech Mahindra</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Java</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Wipro</h4>
										<div class="media">
											<div class="media-body">
												<p class="card-text">Web Developement</p>
												<a href="job.php" style="background-color: #477eff;padding: 5px;color: #fff;">Apply Now</a>
											</div>
										</div>
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
		<script src="../vendors/chart.js/Chart.min.js"> </script>
		<script src="../vendors/datatables.net/jquery.dataTables.js"> </script>
		<script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"> </script>
		<script src="../js/dataTables.select.min.js"> </script>

		<!-- End plugin js for this page -->
		<!-- inject:js -->
		<script src="../js/off-canvas.js"> </script>
		<script src="../js/hoverable-collapse.js"> </script>
		<script src="../js/template.js"> </script>
		<script src="../js/settings.js"> </script>
		<script src="../js/todolist.js"> </script>
		<!-- endinject -->
		<!-- Custom js for this page-->
		<script src="../js/dashboard.js"> </script>

	</body>

</html>

