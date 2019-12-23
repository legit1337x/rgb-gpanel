<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   file                 :  index.php
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   author               :  Muhamed Skoko - mskoko.me@gmail.com
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

include_once($_SERVER['DOCUMENT_ROOT'].'/includes.php');

//////////////////////////

if (!($User->IsLoged()) == true) {
	header("Location: /login");
	die();
}

if (!(isset($_GET['home_page']))) {
	header("Location: /home?home_page");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $Config['Site']['Name']; ?></title>

	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/head.php'); ?>

	<!-- ld -->
	<script type="application/ld+json" src="/assets/json/ld.json"></script>
</head>
<body>
	<div id="organization"></div><div id="webpage"></div>

	<div class="preloader"></div>

	<!-- Alerts -->
	<div id="msg_alert"><?php echo $Alert->PrintAlert(); ?></div>
	<script type="text/javascript">
		setTimeout(function() {
			document.getElementById('msg_alert').innerHTML = "<?php echo $Alert->RemoveAlert(); ?>";
		}, 5000);
	</script>

	<!-- Header -->
	<header class="header_area">
		<!-- Navigation -->
		<div class="main_menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item">
										<a class="nav-link js-scroll-trigger" href="/home">
											<i class="fa fa-home"></i> Home
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link js-scroll-trigger" href="/servers">
											<i class="fa fa-list"></i> Servers
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link js-scroll-trigger" href="/billing">
											<i class="fa fa-money"></i> Billing
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link js-scroll-trigger" href="/servers">
											<i class="fa fa-support"></i> Support
										</a>
									</li>
								</ul>

								<div class="rightNav" style="float:right;">
									<li class="nav-item">
										<a class="nav-link js-scroll-trigger" href="/login?login">
											<i class="fa fa-user"></i> My account
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link js-scroll-trigger btn btn btn-primary" href="/order#games">
											<i class="fa fa-plus"></i> New server
										</a>
									</li>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- end Header -->

	<div class="space" style="margin-top:50px;"></div>
	<!-- Page content -->

    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-md-6">
    			
				

    		</div>
		</div>
    </div>


    <footer>
    	<div class="container">
    		<div class="row justify-content-center">
    			<p>&copy; <?php echo date('Y'); ?> <?php echo $Config['Site']['Name']; ?></p>
    		</div>
    	</div>
    </footer>

	<!-- Footer -->
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php'); ?>
</body>
</html>