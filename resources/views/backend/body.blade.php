<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Micro backend</title>
	<link rel="shortcut icon" href="{{url('assets/frontend')}}/images/logo2.png" />
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/components2.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/checkbox.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{url('assets/backend')}}/js/main/jquery.min.js"></script>
	<script src="{{url('assets/backend')}}/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/loaders/blockui.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{url('assets/backend')}}/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/notifications/noty.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/forms/validation/validate.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/ui/moment/moment.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/ui/prism.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/notifications/sweet_alert.min.js"></script>
	<script src="{{url('assets/backend')}}/js/app.js"></script>
	 
	<script src="{{url('assets/backend')}}/js/demo_pages/navbar_multiple.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<!-- /theme JS files -->

		<script>
		var BaseUrl = "{{url('/')}}";
		var ServeUrl = "{{env('SERVICES_URL')}}";
		//var Instansi = "{{env('APP_INSTANSI')}}";</script>
	<script>
		function getToken() {
	      return document.cookie.replace(/(?:(?:^|.*;\s*)access_tokenku\s*\=\s*([^;]*).*$)|^.*$/, "$1");
	    } 

		var setCustomDefaults = function() {
            swal.setDefaults({
                buttonsStyling: false,
				allowOutsideClick: false,
				reverseButtons: true,
				background: '#fff url({{url("assets/backend")}}/images/backgrounds/seamless.png) repeat',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-light'
            });
        }
        setCustomDefaults();
	    
		$.ajaxSetup({
		  headers: {
			Authorization: 'Bearer '+getToken(),
		  }
		}); 


	</script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="navbar-top navbar-bottom" style="padding-right: 0 !important;">


@include('backend.navbar')
@include('backend.sidebar')
@yield('content')

@include('backend.footer') 
</div>
<!-- Footer -->
	<div class="navbar navbar-expand-md navbar-light mt-4 fixed-bottom">
		<div class="text-center d-md-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-third">
				<i class="icon-menu mr-2"></i>
				Menu
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-third">
			<span class="navbar-text">
				© 2019. <a href="#">Andrastuff V.3.1</a> member of <a href="http://microdataindonesia.co.id" target="_blank">Microdata Indonesia</a>
			</span>
		</div>
	</div>
	<!-- /footer -->
		
</body>

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_3/LTR/material/full/navbar_multiple_top_bottom.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Oct 2018 14:17:19 GMT -->
</html>