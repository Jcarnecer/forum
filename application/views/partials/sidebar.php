<!-- start sidebar -->
<div id="sidebar" style="overflow-y: auto;">

    <div id="nav-icon-close" class="custom-toggle">
        <span></span>
        <span></span>
    </div>

    <ul class="sidebar-menu">
        <li class="">
            <a class="" href="
            	<?php
            		if(ENVIRONMENT==="production") {
            			echo "http://task.payakapps.com/personal";
	            	} else {
	            		echo "http://localhost/task/personal";
	            	}
            	?>">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>Personal Task</span>
            </a>    
        </li>
        
        <li class="sub-menu">
            <a data-toggle="collapse" href="#UIElementsSub1" aria-expanded="false" aria-controls="UIElementsSub1" >
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Projects</span>
            </a>
            <ul class="sub collapse" id="UIElementsSub1">
                <?php foreach($projects as $project_instance): ?>
                <li><a href="<?= base_url('project/' . $project_instance['id']); ?>"><i class="fa fa-users"></i> <?=$project_instance['name']?></a></li>
                <?php endforeach; ?>
                <li>
                    <a class="team-create" href="#teamModifyModal" data-toggle="modal"><i class="fa fa-plus" aria-hidden="true"></i> Add Project</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a class="" href="http://payakapps.com/users/logout">
                <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>

</div>
<!-- end sidebar -->
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
	
	