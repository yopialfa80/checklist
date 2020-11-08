
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md align-self-start">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				<span class="font-weight-semibold">Main sidebar</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body card-img-top">
						<div class="card-body text-center">
							<a href="#">
								<img src="#" class="img-fluid rounded-circle shadow-2 mb-3" width="80" height="80" alt="">
							</a>
							<h6 class="mb-0 text-white text-shadow-dark">{{ $data['user']["name"] }}</h6>
							<span class="font-size-sm text-white text-shadow-dark">{{ $data['user']["email"] }}</span>
						</div>
													
						<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
						</div>
					</div>

					<div class="collapse" id="user-nav">
						<ul class="nav nav-sidebar">
							<li class="nav-item">
								<a href="{{url('admin/user/dashboard/profile/'.$data['user']["id"]) }}" class="nav-link">
									<i class="icon-user-plus"></i>
									<span>My profile</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{url('admin/user/dashboard')}}" class="nav-link">
									<i class="icon-people"></i>
									<span>Users List</span>
								</a>
							</li>
							<li class="nav-item">
								<a onClick="signOut()" class="nav-link">
									<i class="icon-switch2"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Navigation -->
				<div class="card card-sidebar-mobile">
						<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<li class="nav-item"><a href="{{url('dashboard/')}}" class="nav-link"><i class="icon-home4"></i><span>Dashboard Home</span></a></li>
							 
						</ul>
						</div>
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Main App</h6>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
					</div>

					<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<li class="nav-item" data-html="true" data-content="<i class='icon-file-text2'></i> Upload File" data-popup="popover" data-trigger="hover"><a href="{{url('dashboard/ceklist-kendaraan')}}" class="nav-link"><i class="icon-file-text2"></i> <span>Ceklist Kendaraan</span></a></li>
							  
						</ul> 
					</div>
				</div>
				<!-- /navigation -->
			 
				
				<!-- Navigation -->
				<div class="card card-sidebar-mobile">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Global Setting</h6>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
					</div>

					<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<li class="nav-item" data-html="true" data-content="<i class='icon-cog3'></i> Global Setting" data-popup="popover" data-trigger="hover"><a href="{{url('dashboard/setting')}}" class="nav-link"><i class="icon-cog3"></i> <span>Website Setting</span></a></li>
						</ul> 
					</div>
				</div>
				<!-- /navigation -->
			</div>
			<!-- /sidebar content -->
			
		</div>	
			
			 
				
					
			 
			