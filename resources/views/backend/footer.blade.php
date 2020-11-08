<form id="logout" method="POST" action="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    @csrf
                  
</form>					
<script>

	function signOut() {
		
		 swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, let me signout!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function (result) {
				if(result.value == true){
				$('#logout').trigger('submit')
				}
            });
	
	}
	
	 
	function goBack() {
		window.history.back();
	}
	$(".loader").hide();
	var image = "{{url('assets/images/web/loading.gif')}}";
	var $loading = $(".loader").html( '<img class="loading-image" src="'+image+'" alt="loading..">');
		 jQuery(document).ajaxStart(function () {
				   
					$loading.show();
			});
			
		 jQuery(document).ajaxStop(function () {
				$(".card").fadeIn("slow", function() {
				$loading.hide();
				
		});
		 });
		 
	$(window).on('shown.bs.modal', function() { 
    $("body").removeAttr("style");
	});
	
</script>
