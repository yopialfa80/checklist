@extends('backend.body')
@section('content')

<style>
	.tittle {
		text-align: center;
		margin: 0px;
		padding: 0px;
		font-size: 20px;
	}

	.tittle-jalan {
		text-align: center;
		margin: 0px;
		padding: 0px;
		font-size: 15px;
	}

	.tittle-pengiriman{
		text-align: center;
		margin: 0px;
		padding: 0px;
		font-size: 15px;
	}

	.tittle-main{
		text-align: center;
		font-size: 20px;
	}

	.box{
		display: inline;
		width: 100%;
		height: 10px;
		outline: 3px solid black;
	
	}

	.box-atas{
		display: inline;
		width: 100%;
		height: 9px;
		border: 1px solid black;
		
	
	}

	.box-kilometer{
		display: inline;
		width: 100%;
		height: 10px;
		outline: 3px solid black;
	}

	.table-box{
		margin-top: 50px;
		width:50%;
		border: 2px solid black;
		display: inline-block;
	}

	.font-8{
		font-size: 8px;
	}

	.font-11{
		font-size: 11px;
	}

	.font-12{
		font-size: 12px;
	}
	
	.padding-table{
		padding-left: 10px;
		padding-top: 5px;
		padding-bottom: 5px;
	}

</style>
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
			  <div class="card border-2 border-dark">
					<div class="card-header header-elements-inline bg-dark">
						<h6 class="text-semibold">Detail Nomor {{ $data['result']['nomor']}} </h6>	
						<a class="btn btn-dark" style="background-color: white; color: black;" href="{{url('/dashboard/ceklist-kendaraan/download')}}">Download PDF</a>
						 
						<div class="header-elements">
							<div class="list-icons">
									<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
				  </div>

					<div class="card-body">
					
								<table style="width:100%">
									<tr>
										
										<td style="width: 20%; text-align: left" id="logo_kiri"></td>
										<td style="width: 60%; text-align: center;">
											<h3 style="font-size: 15px; padding: 0px; font-weight: bold; margin: 0px;" id="kop_surat_1"></h3>
											<h4 style="font-size: 12px; padding: 0px; margin: 0px;" id="kop_surat_2"></h4>
											<p style="font-size: 12px; padding: 0px;" id="kop_surat_3"></p>
										</td>
										<td style="width: 20%; text-align: right" id="logo_kanan"></td>
										
									</tr>
								</table>
					
								<table class="font-12" style="width:100%">
									<tr>
										<td style="font-size: 16px; text-align: center; font-weight: bold;" id="kop_surat_4"><b></b></td>
									</tr>
								</table>
					
								<table class="font-11" style="width:100%; margin-top: 20px"  cellspacing="0" cellpadding="0">
									<tr>
										<td style=" width: 15%;">NOMOR</td>
										<td style=" width: 2%;">:</td>
										<td id="nomor" style=""></td>
									</tr>
									<tr>
										<td style="">TANGGAL</td>
										<td style="">:</td>
										<td id="tanggal" style=""></td>
									</tr>
									<tr>
										<td style="">JENIS</td>
										<td style=""></td>
										<td id="" style="">
											Single Towing &emsp;<span  id="single"></span>&emsp;&emsp;&emsp;&emsp;
											Carcarier &emsp;<span  id="carcarier"></span>&emsp;&emsp;&emsp;&emsp;
											Self Drive &emsp;<span  id="self"></span>&emsp;&emsp;&emsp;&emsp;
										</td>
									</tr>
									<tr>
										<td style="">DARI / TUJUAN</td>
										<td style="">:</td>
										<td id="dari_tujuan" style=""></td>
									</tr>
									<tr>
										<td style="">NOPOL</td>
										<td style="">:</td>
										<td id="nopol_towing" style=""></td>
									</tr>
									<tr>
										<td style="">NAMA DRIVER</td>
										<td>:</td>
										<td id="nama_driver"></td>
									</tr>
									<tr>
										<td style="">NOMOR HP</td>
										<td>:</td>
										<td id="hp_driver"></td>
									</tr>
								</table>
					
								<br>
					
								<table class="font-11" style="width: 100%;" cellspacing="0" cellpadding="0">
									<tr>
										<td style=" width: 15%; border: 2px solid black; border-right: none; border-bottom: none; padding-left: 10px; padding-top: 10px;">
											<b>PENGIRIM</b>
										</td>
										<td style=" width: 2%; border-top: 2px solid black;">
										
										</td>
										<td style=" width: 31%; max-width: 26%; border-top: 2px solid black;">
											
										</td>
										{{-- batas --}}
										<td style=" width: 2%; border-right: 2px solid black; border-left: 2px solid black; border-top: none; border-bottom: none" rowspan="5">
											
										</td>
										<td style=" width: 15%; border-top: 2px solid black; padding-left: 10px; padding-top: 10px;">
											<b>PENERIMA</b>
										</td>
										<td style=" width: 2%; border-top: 2px solid black;">
					
										</td>
										<td style=" width: 31%; border-top: 2px solid black; border-right: 2px solid black; ">
											
										</td>
									</tr>
					
									<tr>
										<td style=" border-left: 2px solid black; padding-left: 10px;">
											NAMA
										</td>
										<td>:</td>
										<td id="nama_pengirim">
											
										</td>
										<td style=" padding-left: 10px; padding-top: vertical-align: top">
											NAMA
										</td>
										<td style=" vertical-align: top">
											:
										</td>
										<td id="nama_penerima" style=" border-right: 2px solid black; vertical-align: top">
											
										</td>
									</tr>
								 
									<tr>
										<td style=" border-left: 2px solid black; padding-left: 10px; vertical-align: top;">
											ALAMAT
										</td>
										<td style=" vertical-align: top"> :</td>
										<td id="alamat_pengirim" style=" vertical-align: top">
											{{-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard --}}
										</td>
										<td style=" padding-left: 10px; vertical-align: top">
											ALAMAT
										</td>
										<td style=" vertical-align: top">
											:
										</td>
										<td id="alamat_penerima" style=" border-right: 2px solid black; vertical-align: top">
											
										</td>
									</tr>
					
									<tr>
										<td style=" border-left: 2px solid black;">
											
										</td>
										<td></td>
										<td>
											
										</td>
										<td>
											
										</td>
										<td></td>
										<td style=" border-right: 2px solid black; ">
											
										</td>
									</tr>
					
									<tr>
										<td style=" border: 2px solid black; padding-left: 10px; border-top: none; border-right: none;  padding-bottom: 5px;">
											TELEPON
										</td>
										<td style=" border-bottom: 2px solid black;">
											:
										</td>
										<td id="hp_penerima" style=" border-bottom: 2px solid black;">
											
										</td>
										<td style=" border-bottom: 2px solid black; padding-left: 10px;">
											TELEPON
										</td>
										<td style=" border-bottom: 2px solid black;">
											:
										</td>
										<td id="tlp_pengirim" style=" border-bottom: 2px solid black; border-right: 2px solid black;">
											
										</td>
									</tr>
								</table>
					
								{{-- TABLE 2 --}}
								<table class="font-11" style="width: 100%;" cellspacing="0" cellpadding="0">
									<tr>
										<td style=" width: 20%; border-left: 2px solid black; padding-left: 10px; padding-top: 5px;">
											JENIS KENDARAAN
										</td>
										<td style=" width: 1.9%;">
											:
										</td>
										<td id="jenis_kendaraan" style=" width: 27%;">
											
										</td>
										{{-- batas --}}
										<td style=" width: 1%; border-left: 2px solid black;" rowspan="7">
											
										</td>
										<td style=" width: 1.05%; border-right: 2px solid black;" rowspan="7">
											
										</td>
										<td  style=" width: 49%; border-right: 2px solid black; text-align: center; vertical-align:top; padding-top: 5px;">
											CATATAN
										</td>
									</tr>
									
									<tr>
										<td style=" border-left: 2px solid black; padding-left: 10px;">
											NOPOL
										</td>
										<td>
											:
										</td>
										<td id="nopol_kendaraan">
											
										</td>
										<td id="catatan" style="border-bottom: 2px solid black; border-right: 2px solid black; text-align: center; vertical-align:top;" rowspan="6">
											
										</td>
									</tr>
					
									<tr>
										<td style=" border-left: 2px solid black; padding-left: 10px;">
											NOMOR RANGKA
										</td>
										<td>
											:
										</td>
										<td id="no_rangka">
											
										</td>
									</tr>
					
									<tr>
										<td style=" border-left: 2px solid black; padding-left: 10px;">
											NOMOR MESIN
										</td>
										<td>
											:
										</td>
										<td id="no_mesin">
											
										</td>
									</tr>
					
									<tr>
										<td style=" border-left: 2px solid black; padding-left: 10px;">
											WARNA
										</td>
										<td>
											:
										</td>
										<td id="warna_kendaraan">
											
										</td>
									</tr>
					
									<tr>
										<td style=" border-left: 2px solid black; padding-left: 10px;">
											KONDISI UNIT
										</td>
										<td style="">
											
										</td>
										<td style="">
											Baru &nbsp;&nbsp;<span id="kondisi_unit1" name="kondisi_unit">&nbsp;</span>
										</td>
									</tr>
					
									<tr>
										<td style="border-left: 2px solid black;border-bottom: 2px solid black;">
											
										</td>
										<td style="border-bottom: 2px solid black; padding-bottom: 5px">
											
										</td>
										<td style="border-bottom: 2px solid black;">
											Bekas &nbsp;&nbsp;<span id="kondisi_unit2" name="kondisi_unit" ></span>
										</td>
									   
									</tr>
								</table>
					
								<table class="font-11" style="text-align: center; width: 100%;">
									<tr>
										<td>
											<b>PERLENGKAPAN KENDARAAN</b>
										</td>
									</tr>
								</table>
					
								<table class="font-11" style="width: 100%; margin-bottom: 15px;" cellspacing="0" cellpadding="0">
									<tr>
										<td style="width: 5%; border: 2px solid black; border-right: 2px solid black; border-bottom: none; padding: 10px; text-align: center;">
											NO
										</td>
										<td style="width: 35%; border-top: 2px solid black; text-align: center">
											PERLENGKAPAN
										</td>
										<td style="width: 4%; border: 2px solid black; border-bottom: none; text-align: center;">
											ADA
										</td>
										<td style="width: 4%; border-top: 2px solid black; text-align: center;">
											TIDAK
										</td>
										{{-- batas --}}
										<td style="width: 2%; border-right: 2px solid black; border-left: 2px solid black; border-top: none; border-bottom: none" rowspan="14">
											
										</td>
										<td style="width: 5%; border-top: 2px solid black; border-right: 2px solid black; padding: 10px; text-align: center;">
											NO
										</td>
										<td style="width: 35%; border-top: 2px solid black; text-align: center">
											PERLENGKAPAN
										</td>
										<td style="width: 4%; border: 2px solid black; border-bottom: none; text-align: center;">
											ADA
										</td>
										<td style="width: 4%; border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											TIDAK
										</td>
									</tr>
					
									<tr>
										<td  style="border: 2px solid black; border-bottom: none; text-align: center">
											1
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Air Conditioner (AC)
										</td>
										<td id="ac1" name="ac" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="ac2" name="ac" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											14
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Klakson / Horn
										</td>
										<td id="klakson1" name="klakson" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="klakson2" name="klakson" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											2
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Antena Luar
										</td>
										<td id="antena1" name="antena" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="antena2" name="antena" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											15
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Kunci Kontak / Remote
										</td>
										<td id="kunci_kontak1" name="kunci_kontak" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="kunci_kontak2" name="kunci_kontak" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center;">
											3
										</td>
										<td class="padding-table" style="border-top: 2px solid black;4">
											Asbak
										</td>
										<td id="asbak1" name="asbak" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="asbak2" name="asbak" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											16
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Lighter / Pematik Api
										</td>
										<td id="lighter1" name="asbak" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="lighter2" name="asbak" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
									
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											4
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Ban Serep
										</td>
										<td id="ban_serep1" name="ban_serep" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="ban_serep2" name="ban_serep" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											17
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Penahan Lumpur
										</td>
										<td id="penahan_lumpur1" name="penahan_lumpur" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="penahan_lumpur2" name="penahan_lumpur" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											5
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Buku Manual / Service
										</td>
										<td id="buku1" name="buku" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="buku2" name="buku" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											18
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Radio / Tape / LCD
										</td>
										<td id="radio1" name="radio" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="radio2" name="radio" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											6
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Dongkrak / Stang
										</td>
										<td id="dongkrak1" name="dongkrak" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="dongkrak2" name="dongkrak" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											19
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Sabuk Pengaman
										</td>
										<td id="sabuk_pengaman1" name="sabuk_pengaman" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="sabuk_pengaman2" name="sabuk_pengaman" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											7
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Dop Roda / Wheel Dop
										</td>
										<td id="dop_roda1" name="dop_roda" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="dop_roda2" name="dop_roda" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											20
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Sandaran Kepala
										</td>
										<td id="sandaran_kepala1" name="sandaran_kepala" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="sandaran_kepala2" name="sandaran_kepala" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											8
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Kaca Spion Luar
										</td>
										<td id="spion_luar1" name="spion_luar" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="spion_luar2" name="spion_luar" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											21
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Segi Tiga Pengaman
										</td>
										<td id="segitiga_pengaman1" name="segitiga_pengaman" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="segitiga_pengaman2" name="segitiga_pengaman" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											9
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Kaca Spion Dalam
										</td>
										<td id="spion_dalam1" name="spion_dalam" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="spion_dalam2" name="spion_dalam" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											22
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											STNK / STCK Profit
										</td>
										<td id="stnk1" name="stnk" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="stnk2" name="stnk" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											10
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Karpet Depan
										</td>
										<td id="karpet_depan1" name="karpet_depan" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="karpet_depan2" name="karpet_depan" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											23
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Talang Air / Stan Mica
										</td>
										<td id="talang_air1" name="talang_air" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="talang_air2" name="talang_air" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											11
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Karpet Tengah
										</td>
										<td id="karpet_tengah1" name="karpet_tengah" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="karpet_tengah2" name="karpet_tengah" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											24
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Tool Set
										</td>
										<td id="tool_set1" name="tool_set" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="tool_set2" name="tool_set" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: none; text-align: center">
											12
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Karpet Belakang
										</td>
										<td id="karpet_belakang1" name="karpet_belakang" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="karpet_belakang2" name="karpet_belakang" style="border-top: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
											25
										</td>
										<td class="padding-table" style="border-top: 2px solid black;">
											Wiper Kaca Depan
										</td>
										<td id="wiper_depan1" name="wiper_depan" style="border: 2px solid black; border-bottom: none; text-align: center;">
											
										</td>
										<td id="wiper_depan2" name="wiper_depan" style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
											
										</td>
									</tr>
					
									<tr>
										<td style="border: 2px solid black; border-bottom: 2px solid black; text-align: center">
											13
										</td>
										<td class="padding-table" style="border-top: 2px solid black; border-bottom: 2px solid black;">
											Kotak P3K
										</td>
										<td id="kotak_p3k1" name="kotak_p3k" style="border: 2px solid black; border-bottom: 2px solid black; text-align: center;">
											
										</td>
										<td id="kotak_p3k2" name="kotak_p3k" style="border-top: 2px solid black; border-bottom: 2px solid black; text-align: center;">
											
										</td>
					
										<td style="border: 2px solid black; border-left: none; text-align: center;">
											26
										</td>
										<td class="padding-table" style="border-top: 2px solid black; border-bottom: 2px solid black;">
											Wiper Kaca Belakang
										</td>
										<td id="wiper_belakang1" name="wiper_belakang" style="border: 2px solid black; border-bottom: 2px solid black; text-align: center;">
											
										</td>
										<td id="wiper_belakang2" name="wiper_belakang" style="border: 2px solid black; border-left: none; text-align: center;">
											
										</td>
									</tr>
								</table>
								
								<table class="font-12" style="width: 100%;" cellspacing="0" cellpadding="0">
									<tr>
										<td style="width: 25%;"><b>PEMBACAAN SPIDOMETER</b></td>
										<td style="width: 25%;"></td>
										<td style="width: 50%;"><b>PERHATIAN</b></td>
									</tr>
									<tr>
										<td style="vertical-align: top"><b>Kilometer</b><br>Bahan Bakar</td>
										<td style="vertical-align: top"><span id="kilometer" name="kilometer"></span><br><span id="bahan_bakar" name="bahan_bakar" ></span></td>
										<td class="font-11" rowspan="2" id="isiPeraturan">

										</td>
									</tr>
								</table>
					
								<table class="font-11" style="width: 100%; margin-top: 20px; border: solid 2px black; border-bottom: none; text-align: center">
									<tr>
										<td style="width: 25%"><b>PENGIRIM</b></td>
										<td style="width: 25%"><b>DRIVER</b></td>
										<td style="width: 25%"><b>DRIVER LANGSIR</b></td>
										<td style="width: 25%"><b>PENERIMA</b></td>
									</tr>
								</table>
					
								<table class="font-11" style="width: 100%; border: solid 2px black; border-top: none; border-bottom: none; text-align: center">
									<tr>
										<td id="watermark"></td>
									</tr>
								</table>
					
								<table class="font-11" style="width: 100%; border: solid 2px black; border-top: none; text-align: center">
									<tr>
										<td style="width: 25%"><b>(...........................)</b></td>
										<td style="width: 25%"><b>(...........................)</b></td>
										<td style="width: 25%"><b>(...........................)</b></td>
										<td style="width: 25%"><b>(...........................)</b></td>
									</tr>
								</table>
					
								<table class="font-11" style="width: 100%; margin-top: 20px; font-size: 10px;">
									<tr>
											<td style="width: 33.3%; vertical-align: top" id="cabang1"></td>
											<td style="width: 33.3%; vertical-align: top" id="cabang2"></td>
											<td style="width: 33.3%; vertical-align: top" id="cabang3"></td>
									</tr>
									<tr>
										
									</tr>
								</table>
					</div>
				</div>
				
			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->
	 
<script>

	function GetSettingSurat() {
		
		$.ajax({ data: "", url: ServeUrl+"/setting-surat", method: 'GET',

        	complete: function(response){ 

				if(response.status == 200){

					$("#kop_surat_1").html(response.responseJSON.data.setting_surat.kop_surat_1);
					$("#kop_surat_2").html(response.responseJSON.data.setting_surat.kop_surat_2);
					$("#kop_surat_3").html(response.responseJSON.data.setting_surat.kop_surat_3);
					$("#kop_surat_4").html(response.responseJSON.data.setting_surat.kop_surat_4);
					$("#logo_kanan").html('<img style="width: 200px;" src="'+response.responseJSON.data.setting_surat.logo_kanan+'" alt="">');
					$("#logo_kiri").html('<img style="width: 200px;" src="'+response.responseJSON.data.setting_surat.logo_kiri+'" alt="">');
					$("#watermark").html('<img style="width: 200px;" src="'+response.responseJSON.data.setting_surat.watermark+'" alt="">');

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
					$.each(response.responseJSON.data.setting_peraturan, function(index, value) {

						peraturan += value.nomor+'&emsp;'+value.isi+'<br>'
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

	$.ajax({ data: "", url: ServeUrl+"/setting-cabang/group", method: 'GET',

		complete: function(response){ 

			if(response.status == 200){

				var countArray = response.responseJSON.data.setting_cabang.length;
				var divide1 = countArray / 3;
				var divide2 = divide1 + divide1;
				var divide3 = divide2 + divide1;
				
				$.each(response.responseJSON.data.setting_cabang, function(index, value) {
					
			
					if (index >= 0 && index <= divide1) {
						cabang1 += '<br><b>'+value.daerah+'</b><br>'+value.jalan;
					} else if (index >= divide1 && index <= divide2) {
						cabang2 += '<br><b>'+value.daerah+'</b><br>'+value.jalan;
					} else if (index >= divide2 && index <= divide3) {
						cabang3 += '<br><b>'+value.daerah+'</b><br>'+value.jalan;
					}

				});
				$('#cabang1').html(cabang1);
				$('#cabang2').html(cabang2);
				$('#cabang3').html(cabang3);

			}else if(response.status == 401){
				e('info','401 server conection error');

			}else if(response.status == 404){
				e('info','404 Not Found');
			}
		},dataType:'json'
	})
	};
	GetSettingCabang();

	$('#update').on( 'click',function () {
        var id = window.location.pathname.split('/').pop();
		window.location.href = BaseUrl+"/dashboard/ceklist-kendaraan/update/"+id;
    } );
	
	$('#delete').on( 'click',function () {
		var id = window.location.pathname.split('/').pop();
		swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: 'Yes, remove it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function (result) {
				if(result.value == true){
				
				$.ajax({
							data: "",
							url: BaseUrl+"/dashboard/ceklist-kendaraan/delete/"+id,
							crossDomain: false,
							method: 'GET',
							complete: function(response){                
							  if(response.status == 200){ 
								  swal({
										title: ' Removed!',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
											window.location.replace(BaseUrl+'/admin/artikel');
										}
									}); 
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else if(response.status == 403){
								    swal({
										title: ' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
										window.location.replace(BaseUrl+'/admin/artikel');								
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
            });
	 } );
 
function loadAllData() {

	
	$("#nomor").html({!! json_encode($data["result"]['nomor']) !!});
	$("#tanggal").html({!! json_encode($data["result"]['tanggal']) !!});
	$("#jenis_towing").html({!! json_encode($data["result"]['jenis_towing']) !!});
	$("#dari_tujuan").html({!! json_encode($data["result"]['dari_tujuan']) !!});
	$("#nopol_towing").html({!! json_encode($data["result"]['nopol_towing']) !!});
	$("#nama_driver").html({!! json_encode($data["result"]['nama_driver']) !!});
	$("#hp_driver").html({!! json_encode($data["result"]['hp_driver']) !!});
	$("#nama_pengirim").html({!! json_encode($data["result"]['nama_pengirim']) !!});
	$("#alamat_pengirim").html({!! json_encode($data["result"]['alamat_pengirim']) !!});
	$("#tlp_pengirim").html({!! json_encode($data["result"]['tlp_pengirim']) !!});

	$("#nama_penerima").html({!! json_encode($data["result"]['nama_penerima']) !!});
	$("#alamat_penerima").html({!! json_encode($data["result"]['alamat_penerima']) !!});
	$("#hp_penerima").html({!! json_encode($data["result"]['hp_penerima']) !!});

	$("#jenis_kendaraan").html({!! json_encode($data["result"]['jenis_kendaraan']) !!});
	$("#nopol_kendaraan").html({!! json_encode($data["result"]['nopol_kendaraan']) !!});
	$("#no_rangka").html({!! json_encode($data["result"]['no_rangka']) !!});
	$("#no_mesin").html({!! json_encode($data["result"]['no_mesin']) !!});
	$("#warna_kendaraan").html({!! json_encode($data["result"]['warna_kendaraan']) !!});
	$("#kondisi_unit").html({!! json_encode($data["result"]['kondisi_unit']) !!});
	$("#catatan").html({!! json_encode($data["result"]['catatan']) !!});

	$("#kilometer").html({!! json_encode($data["result"]['kilometer']) !!});
	$("#bahan_bakar").html({!! json_encode($data["result"]['bahan_bakar']) !!});

	var someNumbers = ["ac", "antena", "asbak", "ban_serep", "buku", "dongkrak", "dop_roda", "spion_luar", "spion_dalam", 
        "karpet_depan", "karpet_tengah", "karpet_belakang", "kotak_p3k", "klakson", "kunci_kontak", "lighter", "penahan_lumpur", 
        "radio", "sabuk_pengaman", "sandaran_kepala", "segitiga_pengaman", "stnk", "talang_air", "tool_set", "wiper_depan", "wiper_belakang"];
        
		var dataFix = {!! json_encode($data) !!}

        for (var i = 0; i < someNumbers.length; i++) {
            if (dataFix["result"][someNumbers[i]] === 'ON') {
                var idCheck = someNumbers[i] + "1";
				var test = '';
				test += '<img style="padding: 1px 7px;" src="{{ asset('assets/img/check.png') }}">'
				$('#' + idCheck).html(test);
            } else {
				var idCheck = someNumbers[i] + "2";
                var test = '';
				test += '<img style="padding: 1px 7px;" src="{{ asset('assets/img/check.png') }}">'
				$('#' + idCheck).html(test);
            }
        }

            if (dataFix["result"]['kondisi_unit'] === 'baru') {
				var kondisiUnit = '';
				kondisiUnit += '<img style="width: 8px;" src="{{ asset('assets/img/check.png') }}">'
				$('#kondisi_unit1').html(kondisiUnit);
            } else {
                var kondisiUnit = '';
				kondisiUnit += '<img style="width: 8px;" src="{{ asset('assets/img/check.png') }}">'
				$('#kondisi_unit2').html(kondisiUnit);
            }
        
			if (dataFix["result"]['jenis_towing'] === 'Single Towing') {
				var jenis = '';
				jenis += '<img style="width: 8px;" src="{{ asset('assets/img/check.png') }}">'
				$('#single').html(jenis);
            } else if (dataFix["result"]['jenis_towing'] === 'Carcarier') {
                var jenis = '';
				jenis += '<img style="width: 8px;" src="{{ asset('assets/img/check.png') }}">'
				$('#carcarier').html(jenis);
            } else {
				var jenis = '';
				jenis += '<img style="width: 8px;" src="{{ asset('assets/img/check.png') }}">'
				$('#self').html(jenis);
			}

			
}
loadAllData();
</script>
@stop
