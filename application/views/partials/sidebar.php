<div id="sidebar">
	<!-- sidebar menu start-->
	<div id="nav-icon-close" class="custom-toggle">
		<span></span>
		<span></span>
	</div>

	<ul class="sidebar-menu">		
		<li class="">
			<a class="" href="<?= base_url('/') ?>">
				<i class="fa fa-dashboard mr-2"></i>
				<span>Dashboard</span>
			</a>
		</li>
        <li class="">
            <a class="" href="<?= base_url('/') ?>">
                <i class="fa fa-search" aria-hidden="true"></i>
                <span>Search</span>
            </a>
        </li>
		
	</ul>
	<!-- sidebar menu end-->
</div>
<div class="main-content">
	<div class="topbar">
		<nav class="navbar navbar-custom navbar-expand-lg d-flex">
			<div id="nav-icon-open" class="custom-toggle hidden-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<a class="navbar-brand" href="#">PayakApps</a>
			<ul class="navbar-nav flex-row ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						<?= $user->first_name . " " . $user->last_name ?>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="<?= base_url('users/profile') ?>">My Profile</a>
						<a class="dropdown-item" href="<?= base_url("users/profile/change-password") ?>">My Password</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url("users/logout") ?>">Logout</a>
					</div>
				</li>
			</ul>
			
		</nav>
	</div>
    <div class="inner-content h-100"></div>
	
	