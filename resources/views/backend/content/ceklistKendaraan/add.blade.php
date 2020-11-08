@extends('backend.body')
@section('content')
<script src="{{url('assets/backend')}}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script src="{{url('assets/backend')}}/js/demo_pages/table_elements.js"></script>
<!-- <script src="{{url('assets/backend')}}/js/demo_pages/form_checkboxes_radios.js"></script> -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
			
			 <input name="tags" type="hidden" value=""/> 
			
			
				<div class="card border-2 border-purple-800">
				<form id="form-header" class="form-horizontal">
			 			{{ csrf_field() }}
						 
					<div class="card-header header-elements-inline">
							<h6 class="text-semibold font-weight-semibold">
								
								Information Checklist Vechile<br>
								<small class="display-block">Tell a bit about information</small>
							</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
					
						<fieldset class="step" id="step1">
							<div class="row">
								<div class="col-md-6">
								
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Nomor <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="nomor" name="nomor" class="form-control" placeholder="Nomor" value=""/>
										
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Tanggal <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<div class="input-group">
										<span class="input-group-addon"><i class="icon-calendar22 mr-2 mt-2"></i></span>
										<input type="text" name="tanggal" class="form-control form-control-sm daterange-single" value="">
										 
										</div>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Jenis Towing <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<select name="jenis_towing" data-placeholder="Select Kategori" class="form-control">
											<option></option>
											<optgroup label="Pilih kategori">
											<option value="Single Towing" >Single Towing</option>
											<option value="Carcarier">Carcarier</option>
											<option value="Self Driver">Self Driver</option>
											</optgroup>
										</select>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Dari - Tujuan <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<textarea name="dari_tujuan" data-placeholder="Select position" class="form-control multiselect" placeholder="Dari/Tujuan"></textarea>
										
										</div>
									</div>
								</div>
							 
								
							 
								<div class="col-md-6">
									<div class="form-group">
										 
										<div class="form-control-plaintext">
											<div class="alert alert-info border-0 alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
									<span class="font-weight-semibold">Field input yang bertanda (<span class="text-danger">*</span>) wajib untuk diisi ! <a href="#" class="alert-link">terimakasih</a>.
							    </div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Nama Driver <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" name="nama_driver" class="form-control" placeholder="Nama Driver" value=""/>
										
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Telp Driver <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" name="hp_driver" class="form-control" placeholder="Nama Driver" value=""/>
										
										</div>
									</div>
									
									 
								</div>

							</div>	
						</fieldset>
						<div class="col-md-12 pt-2">
						<hr>
							<div class="form-group row" id="unix-url">
								
								
							</div>
						 
						</div>
						<div class="content-divider">
							<span class="pt-10 pb-10"> </span>
						</div>
					
						<div class="text-left" id="btn-header">
							<a onclick="goBack()" class="btn btn-default"><i class="icon-arrow-left13 position-left"></i> Cancel</a>
							<button type="submit" id="submit_header" class="btn btn-primary">Create Document Checklist <i class="icon-arrow-right14 position-right"></i></button>
						</div>
						
						</form>	
					</div>
				</div>

				
				<!-- Select2 sizing -->
				<div class="mb-3 pt-2">
					<h6 class="text-semibold font-weight-semibold">Checklist Form<br>
					<small class="display-block">Tell a bit about vechile</small>
				</div>
				 
				<form id="ChecklistForm-Update" class="form-horizontal">
					{{ csrf_field() }}
				<div class="row class-chekclist" hidden>
					<div class="col-md-6">
						<div class="card border-2 border-purple-800">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">PENGIRIM</h5>
								
							</div>

							<div class="card-body">
							<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Nama <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="nama_pengirim" name="nama_pengirim" class="form-control" placeholder="Nama Pengirim" value=""/>
										
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Alamat <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<textarea name="alamat_pengirim" data-placeholder="Select position" class="form-control multiselect" placeholder="Alamat"></textarea>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Telepon <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="tlp_pengirim" name="tlp_pengirim" class="form-control" placeholder="Nomor Telepon" value=""/>
										
										</div>
									</div>
									<hr>
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Jenis Kendaraan <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="jenis_kendaraan" name="jenis_kendaraan" class="form-control" placeholder="Jenis Kendaraan" value=""/>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">NOPOL<span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="nopol_kendaraan" name="nopol_kendaraan" class="form-control" placeholder="Nomor Polisi Kendaraan" value=""/>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Nomor Rangka<span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="no_rangka" name="no_rangka" class="form-control" placeholder="Nomor Rangka Kendaraan" value=""/>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Nomor Mesin<span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="no_mesin" name="no_mesin" class="form-control" placeholder="Nomor Mesin Kendaraan" value=""/>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Warna Kendaraan<span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="warna_kendaraan" name="warna_kendaraan" class="form-control" placeholder="Warna Kendaraan" value=""/>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Kondisi Kendaraan<span class="text-danger">*</span></label>
										<div class="col-lg-7">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-check-input-styled" name="kondisi_unit" data-fouc value="baru">
													Baru
												</label>
											</div>

											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-check-input-styled" name="kondisi_unit" data-fouc value="bekas">
													Bekas
												</label>
											</div>
										</div>
									</div>

									
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-2 border-purple-800">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">PENERIMA</h5>
								
							</div>

							<div class="card-body">
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Nama <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="nama_Penerima" name="nama_penerima" class="form-control" placeholder="Nama Penerima" value=""/>
										
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Alamat <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<textarea name="alamat_penerima" data-placeholder="Select position" class="form-control multiselect" placeholder="Alamat"></textarea>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Telepon <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="text" id="hp_penerima" name="hp_penerima" class="form-control" placeholder="Nomor Telepon" value=""/>
										
										</div>
									</div>
									<hr>
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Catatan <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<textarea rows="15" name="catatan" data-placeholder="Select position" class="form-control multiselect" placeholder="Tambahkan catatan"></textarea>
										
										</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				 

				<div class="row class-chekclist" hidden>
					<div class="col-md-6">
						<div class="card border-2 border-purple-800">
							<div class="table-responsive">
							<table class="table datatable table-bordered table-striped table-hover table-md" id="datatable-artikel">
								<thead class="text-center">
									<tr >
										<th>No.</th> 
										<th><div style="width: 200px;">Perlengkapan</div></th> 
										<th>Ada</th>
										<th>Tidak</th>
									</tr>
								</thead>
								<tbody>
									<tr >
										<td class="text-center">1.</td> 
										<td>Air Conditioner (AC)</td> 
										<td class="text-center pl-4"><input type="radio" id="ac2" name="ac" class="form-input-styled" value="ON" checked="checked"> </td>
										<td class="text-center pl-4"><input type="radio" id="ac2" name="ac" class="form-input-styled" value="OFF" checked="checked"></td>
									</tr>
									<tr >
										<td class="text-center">2.</td> 
										<td>Antena Luar</td> 
										<td class="text-center pl-4"><input type="radio" name="antena" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="antena" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">3.</td> 
										<td>Asbak</td> 
										<td class="text-center pl-4"><input type="radio" name="asbak" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="asbak" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">4.</td> 
										<td>Ban Serep</td> 
										<td class="text-center pl-4"><input type="radio" name="ban_serep" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="ban_serep" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">5.</td> 
										<td>Buku Manual / Service</td> 
										<td class="text-center pl-4"><input type="radio" name="buku" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="buku" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">6.</td> 
										<td>Dongkrak / Stang</td> 
										<td class="text-center pl-4"><input type="radio" name="dongkrak" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="dongkrak" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">7.</td> 
										<td>Dop Roda / Wheel dop</td> 
										<td class="text-center pl-4"><input type="radio" name="dop_roda" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="dop_roda" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">8.</td> 
										<td>Spion Luar</td> 
										<td class="text-center pl-4"><input type="radio" name="spion_luar" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="spion_luar" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">9.</td> 
										<td>Spion Dalam</td> 
										<td class="text-center pl-4"><input type="radio" name="spion_dalam" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="spion_dalam" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">10.</td> 
										<td>Karpet Depan</td> 
										<td class="text-center pl-4"><input type="radio" name="karpet_depan" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="karpet_depan" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">11.</td> 
										<td>Karpet Tengah</td> 
										<td class="text-center pl-4"><input type="radio" name="karpet_tengah" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="karpet_tengah" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">12.</td> 
										<td>Karpet Belakang</td> 
										<td class="text-center pl-4"><input type="radio" name="karpet_belakang" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="karpet_belakang" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr>
										<td class="text-center">13.</td> 
										<td>Kotak P3K</td> 
										<td class="text-center pl-4"><input type="radio" name="kotak_p3k" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="kotak_p3k" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
								</tbody>
							</table>
							</div>	
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-2 border-purple-800">
							
							<div class="table-responsive">
							<table class="table datatable table-bordered table-striped table-hover table-md" id="datatable-artikel">
								<thead class="text-center">
									<tr >
										<th>No.</th> 
										<th><div style="width: 200px;">Perlengkapan</div></th> 
										<th>Ada</th>
										<th>Tidak</th>
									</tr>
								</thead>
								<tbody>
									<tr >
										<td class="text-center">14.</td> 
										<td>Klakson / Horn</td> 
										<td class="text-center pl-4"><input type="radio" name="klakson" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="klakson" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">15.</td> 
										<td>Kunci Kontak / Remote</td> 
										<td class="text-center pl-4"><input type="radio" name="kunci_kontak" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="kunci_kontak" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">16.</td> 
										<td>Lighter / Pematik Api</td> 
										<td class="text-center pl-4"><input type="radio" name="lighter" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="lighter" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">17.</td> 
										<td>Penahan Lumpur</td> 
										<td class="text-center pl-4"><input type="radio" name="penahan_lumpur" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="penahan_lumpur" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">18.</td> 
										<td>Radio / Tape / LCD</td> 
										<td class="text-center pl-4"><input type="radio" name="radio" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="radio" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">19.</td> 
										<td>Sabuk Pengaman</td> 
										<td class="text-center pl-4"><input type="radio" name="sabuk_pengaman" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="sabuk_pengaman" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">20.</td> 
										<td>Sandaran Kepala</td> 
										<td class="text-center pl-4"><input type="radio" name="sandaran_kepala" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="sandaran_kepala" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">21.</td> 
										<td>Segi Tiga Pengaman</td> 
										<td class="text-center pl-4"><input type="radio" name="segitiga_pengaman" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="segitiga_pengaman" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">22.</td> 
										<td>STNK / STCK Profit</td> 
										<td class="text-center pl-4"><input type="radio" name="stnk" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="stnk" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">23.</td> 
										<td>Talang Air / Stan Mica</td> 
										<td class="text-center pl-4"><input type="radio" name="talang_air" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="talang_air" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr >
										<td class="text-center">24.</td> 
										<td>Tool Set</td> 
										<td class="text-center pl-4"><input type="radio" name="tool_set" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="tool_set" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr>
										<td class="text-center">25.</td> 
										<td>Wiper Kaca Depan</td> 
										<td class="text-center pl-4"><input type="radio" name="wiper_depan" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="wiper_depan" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
									<tr>
										<td class="text-center">26.</td> 
										<td>Wiper Kaca Belakang</td> 
										<td class="text-center pl-4"><input type="radio" name="wiper_belakang" class="form-input-styled" checked data-fouc value="ON"></td>
										<td class="text-center pl-4"><input type="radio" name="wiper_belakang" class="form-input-styled" checked data-fouc value="OFF"></td>
									</tr>
								</tbody>
							</table>
							</div>	
						</div>
					</div>

					
				</div>
				<!-- /select2 sizing -->
				<div class="card border-2 border-purple-800">
				<div class="card-body">
						<fieldset class="step" id="step1">
							<div class="row">
								<div class="col-md-6">
								<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Kilometer <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<input type="number" id="kilometer" name="kilometer" class="form-control" placeholder="Kilometer Kendaraan" value=""/>
										
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Bahan Bakar <span class="text-danger">*</span></label>
										<div class="col-lg-7">
										<select name="bahan_bakar" data-placeholder="Select Kondisi Bahan Bakar" class="form-control">
											<option></option>
											<optgroup label="Pilih kategori">
											<option value="E" >E</option>
											<option value="1/4">1/4</option>
											<option value="1/2">1/2</option>
											<option value="3/4">3/4</option>
											<option value="F">F</option>
											</optgroup>
										</select>
										</div>
									</div>
									
								</div>
							 
								
							 
								<div class="col-md-6">
									
								</div>

							</div>	
						</fieldset>
						
						<div class="content-divider">
							<span class="pt-10 pb-10"> </span>
						</div>
					
						<div class="text-left" id="btn-header">
							<button type="submit" id="submit_checklist" class="btn btn-primary">Save Checklist <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
					</div>
				</div>
				
				<!-- /summernote editor -->
				
			</div>
			<!-- /content area -->
		</div>

		<div class="modal fade" id="modal-generate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Generate Temporary Url</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body-generate">
					<div class="loader loaderMe text-center"></div>
				</div>
				<div class="modal-footer">
				<h6 id="btn-generate">Encoding</h6>
				</div>
				</div>
			</div>
		</div>
		<!-- /main content -->
	<script type="text/javascript" src="{{url('assets/backend')}}/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="{{url('assets/backend')}}/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="{{url('assets/backend')}}/js/demo_pages/picker_date.js"></script>

	<script type="text/javascript" src="{{url('assets/backend')}}/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/pickers/daterangepicker.js"></script>
	<script src="{{url('assets/backend')}}/js/demo_pages/picker_date.js"></script>
	
<script>
$('body').addClass('sidebar-xs');
$('.form-input-styled').uniform();



	var id = window.location.pathname.split('/').pop();
	$(":radio").uniform({radioClass: 'myRadioClass'});
	function loadView(){
		if ($.isNumeric(id)){
		$.ajax({
					data: "",
					url: ServeUrl+"/ceklist-kendaraan/view/"+id,
                    crossDomain: false,
                    method: 'GET',
                    complete: function(response){ 			
                        if(response.status == 200){
							$('.form-input-styled').uniform();
							$('#submit_header').html('UPDATE DOCUMENT CHECKLIST');
							$('#btn-header').append('<a onclick="createChecklist(`'+id+'`)" class="btn btn-danger ml-1 text-white">Generate URL Checklist</a>');
							if(response.responseJSON.data.unix_url){
							$('#unix-url').html('<label class="col-form-label col-lg-1 font-weight-semibold text-uppercase">URL</label><div class="col-lg-5"><div class="small alert alert-primary" role="alert"><a target="_blank" href="'+BaseUrl+'/temp/'+response.responseJSON.data.unix_url+'">'+BaseUrl+'/temp/'+response.responseJSON.data.unix_url+'</a></div></div>');
							
							$('#btn-header').append('<a href="whatsapp://send?text='+response.responseJSON.data.unix_url+'" type="button" class="btn btn-primary ml-1">Share To <i class="icon-arrow-right14 position-right"></i></a>');
							};
							$('input[name=nomor]').val(response.responseJSON.data.nomor);
							$('input[name=tanggal]').val(response.responseJSON.data.tanggal);
							$('select[name=jenis_towing]').val(response.responseJSON.data.jenis_towing);
							$('textarea[name=dari_tujuan]').val(response.responseJSON.data.dari_tujuan);
							$('input[name=nama_driver]').val(response.responseJSON.data.nama_driver);
							$('input[name=hp_driver]').val(response.responseJSON.data.hp_driver);
							$('.class-chekclist').removeAttr('hidden');

							$('input[name=nama_pengirim]').val(response.responseJSON.data.nama_pengirim);
							$('textarea[name=alamat_pengirim]').val(response.responseJSON.data.alamat_pengirim);
							$('input[name=tlp_pengirim]').val(response.responseJSON.data.tlp_pengirim);
							$('input[name=nama_penerima]').val(response.responseJSON.data.nama_penerima);
							$('textarea[name=alamat_penerima]').val(response.responseJSON.data.alamat_penerima);
							$('input[name=hp_penerima]').val(response.responseJSON.data.hp_penerima);
							$('input[name=jenis_kendaraan]').val(response.responseJSON.data.jenis_kendaraan);
							$('input[name=nopol_kendaraan]').val(response.responseJSON.data.nopol_kendaraan);
							$('input[name=no_rangka]').val(response.responseJSON.data.no_rangka);
							$('input[name=no_mesin]').val(response.responseJSON.data.no_mesin);
							$('input[name=warna_kendaraan]').val(response.responseJSON.data.warna_kendaraan);
							$('input[name=kondisi_unit]').val(response.responseJSON.data.kondisi_unit);
							$('textarea[name=catatan]').val(response.responseJSON.data.catatan);

							$('input[name=kilometer]').val(response.responseJSON.data.kilometer);
							$('select[name=bahan_bakar]').val(response.responseJSON.data.bahan_bakar);

							
							
							if (response.responseJSON.data.ac === 'ON') {
								console.log("Helpp");
								$('input[name="ac"]').filter('[value="ON"]').attr('checked', true);

								
								// $("input[name='radioGroup'][value='1']").prop("checked")
							}

							$( document ).ajaxComplete(function() {
								$('.form-input-styled').uniform();
								$.uniform.update();
							});

                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                }).done(function() {
					console.log("Scaterrrrsss ......");
					$('.form-input-styled').uniform();
				});
		}
	};
	loadView();
	
	$(function() {
	$("[name='ac']").bootstrapSwitch({
		// options
	});
});

	$("#form-header").submit(function(event) {
		event.preventDefault();
		
		var data = $(this).serialize();
		
		if($.isNumeric(id)){
			var path = ServeUrl+"/ceklist-kendaraan/update_header/"+id;
		}else{
			var path = ServeUrl+"/ceklist-kendaraan/save_header";
		}
				$.ajax({
							data: data,
							url: path,
							method: 'POST',
							complete: function(response){                
							  if(response.status == 201){
								  
								  swal({
										title: '',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
											if(response.responseJSON.data.id != undefined){
												window.location.replace(BaseUrl+'/dashboard/ceklist-kendaraan/update/'+response.responseJSON.data.id);
											}else{
												location.reload();
											}
										}
									}); 
							  }else if(response.status == 404){
								   swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
										 										
										}
									});    
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								  swal({
										title: '',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											 								
										}
									});	 
							  }
							},
							dataType:'json'
				})
				 
	});

	$("#ChecklistForm-Update").submit(function(event) {
		event.preventDefault();
		
		console.log("tee");
		var data = $(this).serialize();
		var path = ServeUrl+"/ceklist-kendaraan/update_checklistform/"+id;

				$.ajax({
							data: data,
							url: path,
							method: 'POST',
							complete: function(response){                
							  if(response.status == 201){
								  
								  swal({
										title: '',
										text: response.responseJSON.message,
										type:'success',
										// onClose: function () {
										// 	if(response.responseJSON.data.id != undefined){
										// 		window.location.replace(BaseUrl+'/dashboard/ceklist-kendaraan/update/'+response.responseJSON.data.id);
										// 	}else{
										// 		location.reload();
										// 	}
										// }
									}); 
							  }else if(response.status == 404){
								   swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
										 										
										}
									});    
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								  swal({
										title: '',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
											 								
										}
									});	 
							  }
							},
							dataType:'json'
				})
				 
	});
	
	function createChecklist(id){
		swal({
                title: 'Are you sure?',
                text: "Anda akan membuat url sementara untuk form ceklist ini!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, create it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function (result) {
				if(result.value == true){
				
				$('#modal-generate').modal('show');
					var path = ServeUrl+"/ceklist-kendaraan/generate_url/";
					$.ajax({
										data: {"id": id},
										url: path,
										method: 'GET',
										complete: function(response){                
										if(response.status == 201){
											$('#body-generate').html('<div class="alert alert-primary" role="alert">'+response.responseJSON.data.unix_url+'</div>');
											$('#btn-generate').html('<a href="whatsapp://send?text='+response.responseJSON.data.unix_url+'" type="button" class="btn btn-primary">Share To</a>');
										}
										}
					});
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

	$('#modal-generate').on('show.bs.modal', function () {
		$('.loaderMe').show();
	});
	$("#modal-generate").on("hidden.bs.modal", function () {
		location.reload();
	});
</script>
@stop
