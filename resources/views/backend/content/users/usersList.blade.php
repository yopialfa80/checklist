@extends('backend.body')
@section('content')
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
				<!-- Collapsible lists -->
				<div class="row">
					<div class="col-md-8">

						<!-- Collapsible list -->
						<div class="card" data-animation="fadeIn">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Users list</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		 
				                	</div>
			                	</div>
							</div>
							<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
								<div class="d-flex align-items-center mb-3 mb-sm-0">
									
								</div>

								<div class="d-flex align-items-center mb-3 mb-sm-0">
								
								</div>

								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<a href="{{ url('admin/user/dashboard/add') }}" class="btn bg-teal"><i class="icon-user-plus mr-2"></i> Create User</a>
								</div>
							</div>
							<ul id="users" class="media-list media-list-linked">
							<div class="loader text-center mt-5 mb-5"></div>	
							</ul>
							 
							<div class="card-footer">
							<span class="text-muted d-block"><span class="badge badge-mark border-success"></span> On <br><span class="badge badge-mark border-danger"></span> Off</span>
							</div>
							
						</div>
						<!-- /collapsible list -->

					</div>
					<div class="col-sm-4">

								<!-- Available hours -->
								<div class="card text-center">
									<div class="card-header header-elements-inline">
										<h5 class="card-title">Users Statistics</h5>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												 
											</div>
										</div>
									</div>
									<div class="card-body">

					                	<!-- Progress counter -->
										<div class="svg-center position-relative" id="hours-available-progress"><svg width="76" height="76"><g transform="translate(38,38)"><path class="d3-progress-background" d="M0,38A38,38 0 1,1 0,-38A38,38 0 1,1 0,38M0,36A36,36 0 1,0 0,-36A36,36 0 1,0 0,36Z" style="fill: rgb(238, 238, 238);"></path><path class="d3-progress-foreground" filter="url(#blur)" d="M2.326828918379971e-15,-38A38,38 0 1,1 -34.38342799370878,16.179613079472677L-32.57377388877674,15.328054496342538A36,36 0 1,0 2.204364238465236e-15,-36Z" style="fill: rgb(240, 98, 146); stroke: rgb(240, 98, 146);"></path><path class="d3-progress-front" d="M2.326828918379971e-15,-38A38,38 0 1,1 -34.38342799370878,16.179613079472677L-32.57377388877674,15.328054496342538A36,36 0 1,0 2.204364238465236e-15,-36Z" style="fill: rgb(240, 98, 146); fill-opacity: 1;"></path></g></svg>
										<h2 class="pt-1 mt-2 mb-1"></h2>
										
										<i class="icon-watch text-pink-400 counter-icon" style="top: 22px"></i>
										<div class="h5 text-info" id="on"></div>
										<div class="text-danger" id="off"></div>
										 
										<!-- /progress counter -->


									</div>
								</div>
								<!-- /available hours -->

							</div>
				</div>
				<!-- /collapsible lists -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /content area -->
		</div>

<script>	
var csrf_token = $('meta[name="csrf-token"]').attr('content');
	function loadData(){
		$.ajax({
			data: "",
			url: ServeUrl+"/admin/user/list",
			crossDomain: true,
			method: 'GET',
			complete: function(response){                
				if(response.status == 200){
					// console.log("ghello"+response.responseJSON.data.users)
					var tbody = '';
					var no = 0;
						$.each(response.responseJSON.data.users, function(x,y){
							//if (y.status == 1){ status = '; }else{ status = '<span class="badge badge-mark border-danger"></span>'; }
							tbody +='<li><a href="#" class="media" data-toggle="collapse" data-target="#as'+y.id+'">'+
								'<div class="mr-2"><i class="icon-user"></i></div><div class="media-body"><div class="media-title font-weight-semibold">'+y.name+'</div><span class="text-muted">'+y.email+'</span>'+
								'</div><div class="align-self-center ml-3">'+y.name+'</div>'+
								'</a><div class="collapse" id="as'+y.id+'"><div class="card-body bg-light border-top border-bottom"><ul class="list list-unstyled mb-0">'+
										'<a href="'+BaseUrl+'/admin/user/dashboard/view/'+y.id+'" class="btn btn-link">Open Detail</a><button onClick="deleteUser(`'+y.id+'`)" class="btn btn-link">Hapus</button></li></ul></div></div></li>';
						});
					$('#users').html(tbody);  
					// $('#on').html(response.responseJSON._attr.online+' Users Online');  
					// $('#off').html(response.responseJSON._attr.offline+' Users Offline');  
				}else if(response.status == 401){
						e('info','401 server conection error');
				}
			},
			dataType:'json'
		})
	
	};
	loadData();

	function deleteUser(id) {
		swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, save it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function (result) {
				if(result.value == true){
				event.preventDefault();
		$.ajax({
			data: {'_token': csrf_token},
			url: ServeUrl+'/admin/user/delete/'+id,
			crossDomain: true,
			method: 'DELETE',
			complete: function(response){             
				if(response.status == 200){
					swal({
						title: response.status+' Users Has Been Deleted!',
						text: response.responseJSON.message,
						type:'success',
						onClose: function () {
							location.reload();
						}
					}); 
					
				}else if(response.status == 401){
						e('info','401 server conection error');
				}
			},
			dataType:'json'
		})
				}});
	};
	
	</script>
@stop