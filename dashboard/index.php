<?php include('../common/inc.functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/sea.css">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<title>SEA User Analytics</title>
</head>

<body>
<main class="container-fluid">
	<div class="row">
		<div class="col-3 p-3" id="sidebar">
			<div class="row">
				<div class="col-12">
					<img class="mt-2 mb-4" src="../assets/images/logo_samsung_white.png" alt="Samsung logo - white" />
				</div>
			</div>
			<div class="row mb-4">
				<div class="col-12">
					<h1 class="ssm mb-0">
						<small>Online Manual</small>
					</h1>
					<h1 class="ssb">User Analytics</h1>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-12">
					<nav class="nav flex-column nav-pills nav-fill ssm">
						<a class="nav-link active" href="#">Dashboard</a> <a class="nav-link" href="#">ID Manager</a>
						<a class="nav-link" href="#">User Activity</a> <a class="nav-link" href="#">Search Keywords</a>
						<a class="nav-link" href="#">User Feedback</a> <a class="nav-link" href="#">Admin Console</a>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="container">
						<div class="navbar fixed-bottom footer-color ssr">
							<p class="m-0 p-0">
								<small>Copyright &copy; <?php copyright(); ?> All rights reserved. <br />Samsung Electronics America</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-9 p-3" id="content">
			<div class="row">
				<div class="col-12 ssb">
					<h3 class="float-left">Dashboard</h3>
					<a class="btn btn-outline-secondary btn-sm float-right" href="#">Logout</a>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="card shadow">
						<div class="card-header bg-white">
							<h4>Collection Count</h4>
						</div>
						<div class="card-body">
							<div class="row text-center">
								<div class="col-6">
									<p class="lead font-weight-bold">16</p>
									<p>Total Models</p>
								</div>
								<div class="col-6">
									<p class="lead font-weight-bold">256</p>
									<p>Total IDs</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card shadow">
						<div class="card-header bg-white">
							<h4 class="float-left">Total Sessions</h4>
							<p class="text-muted float-right">This month</p>
						</div>
						<div class="card-body">
							<div class="row text-center">
								<div class="col-12">
									<p class="lead font-weight-bold"><?php randNumbers(); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card shadow">
						<div class="card-header bg-white">
							<h4 class="float-left">Total Page Views</h4>
							<p class="text-muted float-right">This month</p>
						</div>
						<div class="card-body">
							<div class="row text-center">
								<div class="col-12">
									<p class="lead font-weight-bold"><?php randNumbers(); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-12">
					<div class="card shadow">
						<div class="card-header bg-white">
							<h4>Daily Count</h4>
						</div>
						<div class="card-body">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active indexBorderBottom ssm" id="nav-sessions-tab" data-toggle="tab" href="#nav-sessions" role="tab" aria-controls="nav-sessions" aria-selected="true">Daily Sessions</a>
									<a class="nav-item nav-link indexBorderBottom ssm" id="nav-pageviews-tab" data-toggle="tab" href="#nav-pageviews" role="tab" aria-controls="nav-pageviews" aria-selected="false">Daily Page Views</a>
								</div>
							</nav>
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active s" id="nav-sessions" role="tabpanel" aria-labelledby="nav-sessions-tab">
									<div class="row">
										<div class="col-12">
											<p>Sessions</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-pageviews" role="tabpanel" aria-labelledby="nav-pageviews-tab">
									<div class="row">
										<div class="col-12">
											<p>Page views</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-6">
					<div class="card shadow">
						<div class="card-header bg-white">
							<h4 class="float-left">User Feedback</h4>
							<p class="float-right text-muted">This Month</p>
						</div>
						<div class="card-body">
							<div class="row text-center">
								<div class="col-6">
									<p class="text-muted">Likes: <span class="text-primary font-weight-bold"><?php randNumbers(); ?></span></p>
								</div>
								<div class="col-6">
									<p class="text-muted">Dislikes: <span class="text-danger font-weight-bold"><?php randNumbers(); ?></span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<h5 class="ssm"><small>Recent Comments</small></h5>
									<ul class="ml-4 mr-4 bg-light">
										<?php
										for ($i = 0; $i < 10; $i++) {
											print "<li>";
											print "<a class=\"text-body\"href=\"#\"><small>";
                                            loremIpsum();
                                            print "</small></a>";
                                            print "</li>";
                                        }
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card shadow">
						<div class="card-header bg-white">
							<h4 class="float-left">Search Keywords</h4>
							<p class="float-right text-muted">This Month</p>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-6">
									<h5 class="ssm"><small>Recent Search Keywords</small></h5>
								</div>
								<div class="col-6">
									<h5 class="ssm"><small>Top Search Keywords</small></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
</body>

</html>