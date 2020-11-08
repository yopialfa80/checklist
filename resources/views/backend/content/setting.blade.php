@extends('backend.body')
@section('content')
<div class="content-wrapper">								<!-- Start Main Content Wrapper-->	
	<div class="content"> 									<!-- Start Content -->	
		<div class="row"> 									<!-- Start Row -->
			<div class="col-md-12 col-lg-12 col-sm-12"> 	<!-- Start 'col-md-12 col-lg-12 col-sm-12' -->
				<div class="card"> 							<!-- Start Main Card -->
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Global Settings</h5>
						<a href="../assets/images/web/PANDUAN.png" class="btn btn-danger rounded-round"><i class="icon-help mr-2"></i> Panduan</a>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<!-- Start Main Card Body -->
					<div class="card-body"> 
						<ul class="nav nav-tabs">
							<li class="nav-item active"><a class="nav-link active" href="#left-icon-tab1" data-toggle="tab"><i class="icon-gear position-left mr-2"></i>Web Setting </a></li>
							<li class="nav-item"><a class="nav-link instansi-setting" href="#left-icon-tab2" data-toggle="tab"><i class="icon-envelop position-left mr-2"></i>Kop Surat </a></li>
							<li class="nav-item"><a class="nav-link instansi-setting" href="#left-icon-tab3" data-toggle="tab"><i class="icon-blocked position-left mr-2"></i>Peraturan </a></li>
							<li class="nav-item"><a class="nav-link instansi-setting" href="#left-icon-tab4" data-toggle="tab"><i class="icon-office position-left mr-2"></i>Kantor Cabang </a></li>
						</ul>

						<!-- Start Main Tab Content -->
						<div class="tab-content">
							<!-- Start Tab 1 -->
							<div class="tab-pane active" id="left-icon-tab1">
								<form role="form" id="SettingWeb-Update" enctype="multipart/form-data">

								{{ csrf_field() }}
								<input name="id" type="hidden" class="form-control" value="">
								<input name="logo" type="hidden" class="form-control" value="">
								<table class="detail-view table table-striped table-condensed " id="yw0">
								<tbody>
									<tr class="odd"><th>Judul Website</th><td><input name="judul" type="text" class="form-control" value=""></br></td></tr>
									<tr class="even"><th>Description</br><span class="small"><i class="">In a few words, explain what this site is about.</i></span></th><td><textarea name="deskripsi" type="text" class="form-control"></textarea></td></tr>
									<tr class="odd"><th>Google Code</br><span class="small"><i class="">Paste your Google Analytics code here.</i></span></th><td><textarea name="googlecode" type="text" class="form-control"></textarea></td></tr>
									<tr class="even"><th>Meta Tag</th><td><textarea name="metatag" type="text" class="form-control" value=""></textarea></td></tr>
									<tr class="odd"><th>Meta Description</br><span class="small"><i class="">These setting may be overridden for single posts & pages.</i></span></th><td><textarea name="metadesc" type="text" class="form-control"></textarea></td></tr>
									<tr class="even"><th>Meta Keyword</br><span class="small"><i class="">These setting may be overridden for single posts & pages.</i></span></th><td><textarea name="metakey" type="text" class="form-control"></textarea></td></tr>
									<tr class="odd"><th>Copyright Footer<br><span class="small"><i class="">information about copyright</i></span></th><td><input name="footer" type="text" class="form-control" value=""></td></tr>
									<tr class="odd"><th>Address<br><span class="small"><i class="">address of your office</i></span></th><td><input name="alamat" type="text" class="form-control" value=""></td></tr>
									<tr class="even"><th>Phone 1 <br><span class="small"><i class="">information about phone number</i></span></th><td><input name="telp" type="text" class="form-control" value=""></td></tr>
									<tr class="even"><th>Phone 2<br><span class="small"><i class="">information about phone number</i></span></th><td><input name="telp2" type="text" class="form-control" value=""></td></tr>
									<tr class="odd"><th>E-mail<br><span class="small"><i class="">information about official email</i></span></th><td><input name="email" type="text" class="form-control" value=""></td></tr>
									<tr class="even"><th>Facebook</th><td><input name="fb" type="text" class="form-control" value=""></td></tr>
									<tr class="odd"><th>Twitter</th><td><input name="twitter" type="text" class="form-control" value=""></td></tr>
									<tr class="even"><th>Linked</th><td><input name="linked" type="text" class="form-control" value=""></td></tr>
									<tr class="even"><th>Google</th><td><input name="google" type="text" class="form-control" value=""></td></tr>
									<tr class="even"><th>Youtube</th><td><input name="youtube" type="text" class="form-control" value=""></td></tr>
									<tr class="even"><th>Logo/Favicon</th><td><input name="userfile" type="file" class="form-control" value=""></td></tr>
									<tr class="even"><th> </th><td id="logo"></td></tr>
									<tr class="odd"><th>Google Maps Location<br><span class="small"><i class="small">Masukan kode semat google maps.</i></span></th><td><textarea name="maps" rows="6" class="form-control"></textarea><i class="small">cari width="600" replace width="100%" dan height="350"</i></td></tr>
								</tbody>
								</table>

								<table>
									<tbody>
										<tr><th style="width: 100%" id="maps"></th><td></td></tr>
									</tbody>
								</table>
								
								<div class="content-divider"><span class="pt-10 pb-10"></span></div>
								<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>

								</form>
							</div>
							<!-- End Tab 1 -->

							<!-- Start Tab 2 -->
							<div class="tab-pane" id="left-icon-tab2">
								<form id="SettingSurat-Update" role="form">
								{{ csrf_field() }}
								<table class="detail-view table table-striped table-condensed " id="yw0">
									<tbody>
										<input name="id_surat" type="hidden" class="form-control" value="">
										<tr class="odd"><th>Kop Surat 1</th><td><input name="kop_surat_1" type="text" class="form-control" value=""></br></td></tr>
										<tr class="odd"><th>Kop Surat 2</th><td><input name="kop_surat_2" type="text" class="form-control" value=""></br></td></tr>
										<tr class="odd"><th>Kop Surat 3</th><td><input name="kop_surat_3" type="text" class="form-control" value=""></br></td></tr>
										<tr class="odd"><th>Kop Surat 4</th><td><input name="kop_surat_4" type="text" class="form-control" value=""></br></td></tr>
										<tr class="even"><th>Logo Kanan</th><td><input name="logo_kanan" type="file" class="form-control" value=""></td></tr>
										<tr class="even"><th> </th><td id="logo_kanan"></td></tr>
										<tr class="even"><th>Logo Kiri</th><td><input name="logo_kiri" type="file" class="form-control" value=""></td></tr>
										<tr class="even"><th> </th><td id="logo_kiri"></td></tr>
										<tr class="even"><th>Watermark</th><td><input name="watermark" type="file" class="form-control" value=""></td></tr>
										<tr class="even"><th> </th><td id="watermark"></td></tr>
									</tbody>
								</table>

								<div class="content-divider"><span class="pt-10 pb-10"> </span></div>
								<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>

								</form>
							</div>
							<!-- End Tab 2 -->

							<!-- Start Tab 3 -->
							<div class="tab-pane" id="left-icon-tab3">
								<form id="SettingPeraturan-Update" role="form">
										{{ csrf_field() }}
										<table class="detail-view table table-striped table-condensed " id="yw0">
											<thead>
												<tr style="background-color: #002451; color: white;" class="odd">
													<th style="width: 10px;"></th>
													<th style="width: 100%;">Peraturan</th>
													<th><button style="float: right" id="addPeraturanRow" type="button" class="btn btn-primary btn-sm">+</button></th>
												</tr>
												<tr>
													<th>No</th>
													<th>Peraturan</th>
													<th style="text-align: center">Action</th>
												</tr>
											</thead>
											<tbody id="isiPeraturan">
												{{-- Generate Row Here | Dont Remove It --}}
											</tbody>
										</table>

									<div class="content-divider"><span class="pt-10 pb-10"> </span></div>
									<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
								</form>
							</div>
							<!-- End Tab 3 -->

							<!-- Start Tab 4 -->
							<div class="tab-pane" id="left-icon-tab4">
								<form id="SettingCabang-Update" role="form">
									{{ csrf_field() }}
									<table class="detail-view table table-striped table-condensed mt-1" id="yw0">
										<thead>
											<tr style="background-color: #002451; color: white;" class="odd">
												<th style="width: 10px"></th>
												<th style="width: 50%;">Cabang</th>
												<th style="width: 50%;"></th>
												<th><button style="float: right" id="addCabangRow" type="button" class="btn btn-primary btn-sm">+</button></th>
											</tr>
											<tr>
												<th>No</th>
												<th>Daerah</th>
												<th>Jalan</th>
												<th style="text-align: center">Action</th>
											</tr>
										</thead>
										<tbody id="isiCabang">
											{{-- Generate Row Here | Dont Remove It --}}
										</tbody>
									</table>

									<div class="content-divider"><span class="pt-10 pb-10"> </span></div>
									<button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
								</form>
							</div> 
							<!-- End Tab 4 -->

						</div> 	<!-- End Main Tab Content -->
					</div> 		<!-- End Main Card Body -->
				</div> 			<!-- End Main Card -->
			</div> 				<!-- End 'col-md-12 col-lg-12 col-sm-12' -->
		</div> 					<!-- End Row -->
	</div> 						<!-- End Content -->	
</div> 							<!-- End Main Content Wrapper-->	
		
<script>
var csrf_token = $('meta[name="csrf-token"]').attr('content');
	var nomorGlobalPeraturan = 0;
	var nomorGlobalCabang = 0;

	function GetSettingWeb(){
			
			$.ajax({ data: "",url: ServeUrl+"/setting-web",method: 'GET',

			complete: function(response){ 

						if(response.status == 200){
								$("input[name=id]").val(response.responseJSON.data.setting_web.id);
								$("input[name=logo]").val(response.responseJSON.data.setting_web.logo);
								$("input[name=judul]").val(response.responseJSON.data.setting_web.judul);
								$("textarea[name=deskripsi]").val(response.responseJSON.data.setting_web.deskripsi);
								$("textarea[name=googlecode]").val(response.responseJSON.data.setting_web.googlecode);
								$("textarea[name=metatag]").val(response.responseJSON.data.setting_web.metatag);
								$("input[name=footer]").val(response.responseJSON.data.setting_web.footer);
								$("textarea[name=metadesc]").val(response.responseJSON.data.setting_web.metadesc);
								$("textarea[name=metakey]").val(response.responseJSON.data.setting_web.metakey);
								$("input[name=alamat]").val(response.responseJSON.data.setting_web.alamat);
								$("input[name=telp]").val(response.responseJSON.data.setting_web.telp);
								$("input[name=telp2]").val(response.responseJSON.data.setting_web.telp2);
								$("input[name=email]").val(response.responseJSON.data.setting_web.email);
								$("input[name=fb]").val(response.responseJSON.data.setting_web.fb);
								$("input[name=twitter]").val(response.responseJSON.data.setting_web.twitter);
								$("input[name=google]").val(response.responseJSON.data.setting_web.google);
								$("input[name=youtube]").val(response.responseJSON.data.setting_web.youtube);
								$("input[name=linked]").val(response.responseJSON.data.setting_web.linked);
								$("textarea[name=maps]").val(response.responseJSON.data.setting_web.maps);
								$("#maps").html(response.responseJSON.data.setting_web.maps);
								$("#logo").html('<img class="img-thumbnail" width="80" src="'+response.responseJSON.data.setting_web.logo+'" alt="">');
						}else if(response.status == 401){
								e('info','401 server conection error');
						}else if(response.status == 404){
								//window.location.replace(BaseUrl+'admin/setting');
						}
			},dataType:'json'
		})
		
	};
	GetSettingWeb();

	function GetSettingSurat() {
		
		$.ajax({ data: "", url: ServeUrl+"/setting-surat", method: 'GET',

        	complete: function(response){ 

				if(response.status == 200){
					$("input[name=id_surat]").val(response.responseJSON.data.setting_surat.id);
					$("input[name=kop_surat_1]").val(response.responseJSON.data.setting_surat.kop_surat_1);
					$("input[name=kop_surat_2]").val(response.responseJSON.data.setting_surat.kop_surat_2);
					$("input[name=kop_surat_3]").val(response.responseJSON.data.setting_surat.kop_surat_3);
					$("input[name=kop_surat_4]").val(response.responseJSON.data.setting_surat.kop_surat_4);
					$("#logo_kanan").html('<img class="img-thumbnail" width="80" src="'+response.responseJSON.data.setting_surat.logo_kanan+'" alt="">');
					$("#logo_kiri").html('<img class="img-thumbnail" width="80" src="'+response.responseJSON.data.setting_surat.logo_kiri+'" alt="">');
					$("#watermark").html('<img class="img-thumbnail" width="80" src="'+response.responseJSON.data.setting_surat.watermark+'" alt="">');

					console.log("krii = "+response.responseJSON.data.setting_surat.logo_kiri);
					console.log("aa"+response.responseJSON.data.setting_surat.watermark);
				}else if(response.status == 401){
					e('info','401 server conection error');

				}else if(response.status == 404){
					e('info','404 Not Found');
				}
			},dataType:'json'
        })
	};
	GetSettingSurat();

	function GetSettingPeraturan() {
		
		$.ajax({ data: "", url: ServeUrl+"/setting-peraturan", method: 'GET',

        	complete: function(response){ 

				if(response.status == 200){
					var peraturan = '';
					var nomor = 0;
					nomorGlobalPeraturan = 0;
					$.each(response.responseJSON.data.setting_peraturan, function(index, value) {
						nomor++;
						nomorGlobalPeraturan++;
						peraturan += '<tr id="inputFormRow" class="odd"><th style="width: 10px;">'+nomor+'</th><td><input name="id_peraturan[]" value="'+value.id+'" type="hidden"><input name="nomor[]" value="'+nomor+'" type="hidden"><input name="isi[]" type="text" class="form-control" value="'+value.isi+'"></td><td><button style="float: right;" onclick="removeRowPeraturan(`'+value.id+'`)" type="button" class="btn btn-danger">Hapus</button></td></tr>';
					});
					$('#isiPeraturan').html(peraturan);

				}else if(response.status == 401){
					e('info','401 server conection error');

				}else if(response.status == 404){
					e('info','404 Not Found');
				}
			},dataType:'json'
        })
	};
	GetSettingPeraturan();

	function GetSettingCabang() {

		$.ajax({ data: "", url: ServeUrl+"/setting-cabang/default", method: 'GET',

        	complete: function(response){ 

				if(response.status == 200){
					var cabang = '';
					var nomorCabang = 0;
					nomorGlobalCabang = 0;
					$.each(response.responseJSON.data.setting_cabang, function(index, value) {
						nomorCabang++;
						nomorGlobalCabang++;
						cabang += '<tr id="inputFormRowDaerah" class="odd"><th>'+nomorCabang+'</th><th><input name="daerah[]" type="text" class="form-control" value="'+value.daerah+'"></th><th><input name="jalan[]" type="text" class="form-control" value="'+value.jalan+'"></th><th><button style="float: right;" onclick="removeRowCabang(`'+value.id+'`)" type="button" class="btn btn-danger">Hapus</button></th><input name="id_cabang[]" value="'+value.id+'" type="hidden"></tr>';
					});
					$('#isiCabang').html(cabang);

				}else if(response.status == 401){
					e('info','401 server conection error');

				}else if(response.status == 404){
					e('info','404 Not Found');
				}
			},dataType:'json'
        })
	};
	GetSettingCabang();

	$("#SettingCabang-Update").submit(function(event) {
		event.preventDefault();
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
				var form = $('#SettingCabang-Update')[0]; 
				var data = new FormData(form);

				$.ajax({
							data: data,
							url: ServeUrl+"/setting-cabang/update",
							processData: false,
							contentType: false,
							cache: false,
							timeout: 600000,
							type: 'POST',
							complete: function(response){         
								console.log("Response = "+response);       
							  if(response.status == 201){
								
								  swal({
										title: response.status+' Saved!',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
											GetSettingCabang();
										}
									}); 
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								    swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											GetSettingCabang();									
										}
									}); 
									 
							  }
							},
							dataType:'json'
				})
				}
				if (result.dismiss == 'cancel') {
					 swal({ title: ' Cancelled',text: 'Your imaginary file is safe :)',type:'error',}); 
                }
            });
			
    });

	$("#SettingPeraturan-Update").submit(function(event) {
		event.preventDefault();
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
				var form = $('#SettingPeraturan-Update')[0]; 
				var data = new FormData(form);

				$.ajax({
							data: data,
							url: ServeUrl+"/setting-peraturan/update",
							processData: false,
							contentType: false,
							cache: false,
							timeout: 600000,
							type: 'POST',
							complete: function(response){         
								console.log("Response = "+response);       
							  if(response.status == 201){
								
								  swal({
										title: response.status+' Saved!',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
										GetSettingPeraturan();
										}
									}); 
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								    swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											GetSettingPeraturan();								
										}
									}); 
									 
							  }
							},
							dataType:'json'
				})
				}
				if (result.dismiss == 'cancel') {
					 swal({ title: ' Cancelled',text: 'Your imaginary file is safe :)',type:'error',}); 
                }
            });
    });

	$("#SettingSurat-Update").submit(function(event) {
		event.preventDefault();
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

				var form = $('#SettingSurat-Update')[0]; 
				var data = new FormData(form);
				var id = $("input[name=id_surat]").val();

				$.ajax({
							data: data,
							url: ServeUrl+"/setting-surat/update/"+id,
							processData: false,
							contentType: false,
							cache: false,
							timeout: 600000,
							type: 'POST',
							complete: function(response){
								
							  if(response.status == 201){
								
								  swal({
										title: response.status+' Saved!',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
											GetSettingSurat();
										}
									}); 
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								    swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											GetSettingSurat();										
										}
									}); 
									 
							  }
							},
							dataType:'json'
				})
				}
				if (result.dismiss == 'cancel') {
					 swal({ title: ' Cancelled',text: 'Your imaginary file is safe :)',type:'error',}); 
                }
            });
			
    });

	$("#SettingWeb-Update").submit(function(event) {
		event.preventDefault();
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

				var form = $('#SettingWeb-Update')[0]; 
				var data = new FormData(form);
				var id = $("input[name=id]").val();

				$.ajax({
							data: data,
							url: ServeUrl+"/setting-web/update/"+id,
							processData: false,
							contentType: false,
							cache: false,
							timeout: 600000,
							type: 'POST',
							complete: function(response){                
							  if(response.status == 201){
								
								  swal({
										title: response.status+' Saved!',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
										GetSettingWeb();
										}
									}); 
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								    swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											GetSettingWeb();									
										}
									}); 
									 
							  }
							},
							dataType:'json'
				})
				}
				if (result.dismiss == 'cancel') {
					 swal({ title: ' Cancelled',text: 'Your imaginary file is safe :)',type:'error',});
                }
            });
    });

	function removeRowCabang(id){
	          swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, remove it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function (result) {
				if(result.value == true){
				$("#modal_insert").modal("hide");
				$.ajax({
							data: {'_token': csrf_token},
							url: ServeUrl+"/setting-cabang/delete/"+id,
							method: 'DELETE',
							complete: function(response){                
							  if(response.status == 200){			  
								  swal({
										title: response.status+' Removed!',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
											GetSettingCabang();
										}
									}); 
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else if(response.status == 403){
								    swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											GetSettingCabang();										
										}
									}); 
									 
							  }else{
								    swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
									}); 
									 
							  }
							},
							dataType:'json'
				})
				}
				if (result.dismiss == 'cancel') {
					 swal({ title: ' Cancelled', text: 'Your imaginary file is safe :)', type:'error',});
                }
            });
	}

	function removeRowPeraturan(id){
		swal({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, remove it!',
		cancelButtonText: 'No, cancel!',
		confirmButtonClass: 'btn btn-success',
		cancelButtonClass: 'btn btn-danger',
		buttonsStyling: false
		}).then(function (result) {
			if(result.value == true){
			$("#modal_insert").modal("hide");
			$.ajax({
						data: {'_token': csrf_token},
						url: ServeUrl+"/setting-peraturan/delete/"+id,
						method: 'DELETE',
						complete: function(response){                
							if(response.status == 200){			  
								swal({
									title: response.status+' Removed!',
									text: response.responseJSON.message,
									type:'success',
									onClose: function () {
										GetSettingPeraturan();
									}
								}); 
							}else if(response.status == 401){
							e('info','401 server conection error');
							}else if(response.status == 403){
								swal({
									title: response.status+' Aborted!',
									text: response.responseJSON.message,
									type:'warning',
									onClose: function () {
										GetSettingPeraturan();						
									}
								}); 
									
							}else{
								swal({
									title: response.status+' Aborted!',
									text: response.responseJSON.message,
									type:'warning',
								}); 
									
							}
						},
						dataType:'json'
			})
			}
			if (result.dismiss == 'cancel') {
					swal({
						title: ' Cancelled',
						text: 'Your imaginary file is safe :)',
						type:'error',
				}); 
				
			}
		});
	}

	// Tambah Row Peraturan
	var noPeraturan = 0;
    $("#addPeraturanRow").click(function () {
		noPeraturan++;
		nomorGlobalPeraturan = nomorGlobalPeraturan +  1;
        var html = '';
        html += '<tr id="inputFormRow" class="odd"><th>'+nomorGlobalPeraturan+'</th><td><input name="nomor[]" value="'+nomorGlobalPeraturan+'" type="hidden"><input name="id_peraturan[]" value="newRowPeraturan" type="hidden"><input name="isi[]" type="text" class="form-control" value=""></td><td><button style="float: right;" id="removeNewPeraturanRow" type="button" class="btn btn-danger">Hapus</button></td></tr>';
		html += '';
        $('#isiPeraturan').append(html);
    });
	
	// Tambah Row Cabang
	var noCabang = 0;
	$("#addCabangRow").click(function () {
		noCabang++;
		nomorGlobalCabang = nomorGlobalCabang + 1;
        var html = '';
        html += '<tr id="inputFormRowDaerah" class="odd"><th>'+nomorGlobalCabang+'</th><input name="id_cabang[]" value="NewRowCabang" type="hidden"><th><input name="daerah[]" type="text" class="form-control" value=""></th><th><input name="jalan[]" type="text" class="form-control" value=""></th><th><button style="float: right;" id="removeNewCabangRow" type="button" class="btn btn-danger">Hapus</button></th></tr>';
		html += '';
        $('#isiCabang').append(html);
    });

    // Hapus Row Cabang
    $(document).on('click', '#removeNewCabangRow', function () {
		nomorGlobalCabang = nomorGlobalCabang - 1;
        $(this).closest('#inputFormRowDaerah').remove();
    });


	// Hapus Row Pearturan
	$(document).on('click', '#removeNewPeraturanRow', function () {
		nomorGlobalPeraturan = nomorGlobalPeraturan - 1;
        $(this).closest('#inputFormRow').remove();
    });

</script>
@stop