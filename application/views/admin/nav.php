<?php
defined("BASEPATH") or exit("no direct script allowed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>MAKEUCA CA/CS/CMA Test Series and Mentoring – MAKEUCA CA/CS/CMA Test Series and Mentoring</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- <link rel="icon" href="<?= base_url() ?>public/admin_assets/assets/img/kaiadmin/favicon.ico" type="image/x-icon"/> -->

	<!-- Fonts and icons -->
	<script src="<?= base_url() ?>public/admin_assets/assets/js/plugin/webfont/webfont.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


	<script>
		WebFont.load({
			google: {"families":["Public Sans:300,400,500,600,700"]},
			custom: {"families":["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url() ?>public/admin_assets/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/assets/css/plugins.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/assets/css/kaiadmin.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/assets/css/demo.css">
    <script src="https://kit.fontawesome.com/435a96348c.js" crossorigin="anonymous"></script> 
	<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>   
</head>
<body>
	<div class="wrapper">
		<!-- Sidebar -->
		<div class="sidebar" data-background-color="dark">
			<div class="sidebar-logo">
				<!-- Logo Header -->
				<div class="logo-header" data-background-color="dark">

					<a href="index-2.html" class="logo">
						<!-- <img src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" style="height:100px;width:150px;object-fit:contain" alt="navbar brand" class="navbar-brand" height="20"> -->
					</a>
					<div class="nav-toggle">
						<button class="btn btn-toggle toggle-sidebar">
							<i class="gg-menu-right"></i>
						</button>
						<button class="btn btn-toggle sidenav-toggler">
							<i class="gg-menu-left"></i>
						</button>
					</div>
					<button class="topbar-toggler more">
						<i class="gg-more-vertical-alt"></i>
					</button>

				</div>
				<!-- End Logo Header -->	
			</div>	
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-secondary">
                        <li class="nav-item active">
							<a href="<?= base_url() ?>admincontroller/">
                                <i class="fa-solid fa-house"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url() ?>admincontroller/basic_info">
								<i class="fa-solid fa-info"></i>
								<p>Website Basic Information</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#home" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Home Page</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="home">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>admincontroller/slider">
											<span class="sub-item">Slider</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#master" class="collapsed" aria-expanded="false">
								<!-- <i class="fas fa-home"></i> -->
								<i class="ri-slack-line"></i>
								<p>Masters</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="master">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>admincontroller/course">
											<span class="sub-item">Course</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url() ?>admincontroller/admin">
											<span class="sub-item">Admin</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="main-header">
				<div class="main-header-logo">
					<!-- Logo Header -->
					<div class="logo-header" data-background-color="dark">

						<a href="index-2.html" class="logo">
							<img src="<?= base_url() ?>public/admin_assets/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20">
						</a>
						<div class="nav-toggle">
							<button class="btn btn-toggle toggle-sidebar">
								<i class="gg-menu-right"></i>
							</button>
							<button class="btn btn-toggle sidenav-toggler">
								<i class="gg-menu-left"></i>
							</button>
						</div>
						<button class="topbar-toggler more">
							<i class="gg-more-vertical-alt"></i>
						</button>

					</div>
					<!-- End Logo Header -->
				</div>
				<!-- Navbar Header -->
				<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">

					<div class="container-fluid">
					        <div style="margin:0px auto;">
								<img src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" style="height:80px;width:119px;object-fit:contain;margin-left:227px" alt="">
							</div>
						<ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
							
							<li class="nav-item topbar-icon dropdown hidden-caret">
								<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-bell"></i>
									<span class="notification">4</span>
								</a>
								<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
									<li>
										<div class="dropdown-title">You have 4 new notification</div>
									</li>
									<li>
										<div class="notif-scroll scrollbar-outer">
											<div class="notif-center">
												<a href="#">
													<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
													<div class="notif-content">
														<span class="block">
															New user registered
														</span>
														<span class="time">5 minutes ago</span> 
													</div>
												</a>
												<a href="#">
													<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
													<div class="notif-content">
														<span class="block">
															Rahmad commented on Admin
														</span>
														<span class="time">12 minutes ago</span> 
													</div>
												</a>
												<a href="#">
													<div class="notif-img"> 
														<img src="<?= base_url() ?>public/admin_assets/assets/img/profile2.jpg" alt="Img Profile">
													</div>
													<div class="notif-content">
														<span class="block">
															Reza send messages to you
														</span>
														<span class="time">12 minutes ago</span> 
													</div>
												</a>
												<a href="#">
													<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
													<div class="notif-content">
														<span class="block">
															Farrah liked Admin
														</span>
														<span class="time">17 minutes ago</span> 
													</div>
												</a>
											</div>
										</div>
									</li>
									<li>
										<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
									</li>
								</ul>
							</li>
							
							
							<li class="nav-item topbar-user dropdown hidden-caret">
								<a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
									<div class="avatar-sm">
										<img src="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_img'] ?>" style="height:40px;width:38px;object-fit:cover" alt="..." class="avatar-img rounded-circle">
									</div>
									<span class="profile-username">
										<span class="op-7">Hi,</span> <span class="fw-bold"><?= $admin_data[0]['admin_name'] ?></span>
									</span>
								</a>
								<ul class="dropdown-menu dropdown-user animated fadeIn">
									<div class="dropdown-user-scroll scrollbar-outer">
										<li>
											<div class="user-box">
												<div class="avatar-lg"><img src="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_img'] ?>" alt="image profile" style="height:100%;width:!00%" class="avatar-img rounded"></div>
												<div class="u-text">
													<h4><?= $admin_data[0]['admin_name'] ?></h4>
													<p class="text-muted"><?= $admin_data[0]['admin_email'] ?></p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
												</div>
											</div>
										</li>
										<li>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">My Profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Logout</a>
										</li>
									</div>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<!-- End Navbar -->
			</div>