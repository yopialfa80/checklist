{{-- {{ dd($data) }} --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Micro backend</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('assets/backend')}}/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('assets/backend')}}/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('assets/backend')}}/css/checkbox.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{url('assets/backend')}}/js/main/jquery.min.js"></script>
	<script src="{{url('assets/backend')}}/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{url('assets/backend')}}/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="{{url('assets/backend')}}/js/plugins/ui/moment/moment.min.js"></script>
    <script src="{{url('assets/backend')}}/js/plugins/pickers/daterangepicker.js"></script>
    
	<script src="{{url('assets/backend')}}/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->
    <script src="{{url('assets/backend')}}/js/main/jquery.min.js"></script>
	<script src="{{url('assets/backend')}}/js/main/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="{{url('assets/backend')}}/js/app.js"></script>
    
	<script src="{{url('assets/backend')}}/js/demo_pages/form_checkboxes_radios.js"></script>
    <script src="{{url('assets/backend')}}/js/plugins/buttons/spin.min.js"></script>
    <script src="{{url('assets/backend')}}/js/plugins/buttons/ladda.min.js"></script>
    <script src="{{url('assets/backend')}}/js/demo_pages/components_buttons.js"></script>
    
</head>

<!-- Page header -->
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">

        <div class="header-elements d-none py-0 mb-3 mb-md-0">
            <div class="breadcrumb">
                <br>
            </div>
        </div>
    </div>
</div>

    <!-- ----------------------------------------------------------- Main ----------------------------------------------------------- -->
    <div class="page-content pt-0"><div class="content-wrapper"><div class="content">
        <form id="Update-All" class="form-horizontal">
            {{ csrf_field() }}

    <!-- ------------------------------------------------------------ Row ------------------------------------------------------------ -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Information</h6>
                </div>

                <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Nomor :</label>
                            <input type="text" class="form-control" placeholder="Nomor" name="nomor" readonly>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-calendar22 mr-2 mt-2"></i></span>
                                <input type="text" id="tanggal" name="tanggal" class="form-control form-control-sm daterange-single" value="" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Jenis Towing :</label>
                            <input type="text" class="form-control" name="jenis_towing" placeholder="Jenis Towing" readonly>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Dari / Tujuan :</label>
                            <input type="text" class="form-control" name="dari_tujuan" placeholder="Dari / Tujuan" readonly>
                        </div>
                </div>
            </div>
        </div>

        <!-- -------------------------------------------------------- Divide Here -------------------------------------------------------- -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Information</h6>
                </div>

                <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Driver :</label>
                            <input type="text" class="form-control" name="nama_driver" placeholder="Nama Driver" readonly>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Telepon Driver :</label>
                            <input type="text" class="form-control" name="hp_driver" placeholder="Telepon Driver" readonly>
                        </div>

                        <div style="padding: 24.5px 0px" class="form-group">
                            <div class="toast bg-slate border-transparent" style="opacity: 1; max-width: none; padding: 10px;">
                                <div class="toast-body p-md-4">
                                    Field input yang bertanda (*) wajib untuk diisi ! terimakasih.
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------- End Row ---------------------------------------------------------- -->

    <!-- ------------------------------------------------------------ Row ------------------------------------------------------------ -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Pengirim</h6>
                </div>

                <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama :</label>
                            <input type="text" class="form-control" name="nama_pengirim" placeholder="Nama Pengirim">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Alamat :</label>
                            <div class="input-group">
                                <textarea type="text" id="tanggal" name="alamat_pengirim" nama="alamat_pengirim" class="form-control form-control-sm daterange-single" value="" placeholder="Alamat Pengirim"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Telepon  :</label>
                            <input type="text" class="form-control" name="tlp_pengirim" placeholder="Telepon Pengirim">
                        </div>
                </div>
            </div>
        </div>

        <!-- -------------------------------------------------------- Divide Here -------------------------------------------------------- -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Penerima</h6>
                </div>

                <div class="card-body">
                        
                        <div class="form-group">
                            <label class="font-weight-bold">Nama :</label>
                            <input type="text" class="form-control" name="nama_penerima" placeholder="Nama Penerima">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Alamat :</label>
                            <textarea type="text" id="tanggal" name="alamat_pengirim" nama="alamat_penerima" class="form-control form-control-sm daterange-single" value="" placeholder="Alamat Penerima"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Telepon :</label>
                            <input type="text" class="form-control" name="hp_penerima" placeholder="Telepon Penerima">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------- End Row ---------------------------------------------------------- -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Informasi Tambahan</h6>
                </div>

                <div class="card-body">
                        
                        <div class="form-group">
                            <label class="font-weight-bold">Jenis Kendaraan :</label>
                            <input type="text" class="form-control" name="jenis_kendaraan" placeholder="Jenis Kendaraan">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nopol :</label>
                            <input type="text" class="form-control" name="nopol_kendaraan" placeholder="Nopol Kendaraan">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nomor Rangka :</label>
                            <input type="text" class="form-control" name="no_rangka" placeholder="Nomor Rangka">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nomor Mesin :</label>
                            <input type="text" class="form-control" name="no_mesin" placeholder="Nomor Mesin">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Warna Kendaraan :</label>
                            <input type="text" class="form-control" name="warna_kendaraan" placeholder="Warna Kendaraan">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kondisi Kendaraan :</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="option-input radio" name="kondisi_unit" id="kondisi_unit1" value="BARU" />
                                    &emsp;Baru
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="option-input radio" name="kondisi_unit" id="kondisi_unit2" value="BEKAS" />
                                    &emsp;Bekas
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Catatan :</label>
                            <textarea type="text" rows="5" cols="5" class="form-control" name="catatan"></textarea>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------ Row ------------------------------------------------------------ -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">

                <div class="card-body">
                        <table class="table datatable-basic">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th>Perlengkapan</th>
                                    <th style="text-align: center">Ada</th>
                                    <th style="text-align: center">Tidak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">1</td>
                                    <td>Air Conditioner (AC)</td>
                                    <td><input type="radio" class="option-input radio" name="ac" id="ac1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="ac" id="ac2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">2</td>
                                    <td>Antena Luar</td>
                                    <td><input type="radio" class="option-input radio" name="antena" id="antena1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="antena" id="antena2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">3</td>
                                    <td>Asbak</td>
                                    <td><input type="radio" class="option-input radio" name="asbak" id="asbak1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="asbak" id="asbak2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">4</td>
                                    <td>Ban Serep</td>
                                    <td><input type="radio" class="option-input radio" name="ban_serep" id="ban_serep1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="ban_serep" id="ban_serep2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">5</td>
                                    <td>Buku Manual / Service</td>
                                    <td><input type="radio" class="option-input radio" name="buku" id="buku1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="buku" id="buku2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">6</td>
                                    <td>Dongkrak / Stang</td>
                                    <td><input type="radio" class="option-input radio" name="dongkrak" id="dongkrak1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="dongkrak" id="dongkrak2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">7</td>
                                    <td>Dop Roda / Wheel dop</td>
                                    <td><input type="radio" class="option-input radio" name="dop_roda" id="dop_roda1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="dop_roda" id="dop_roda2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">8</td>
                                    <td>Spion Luar</td>
                                    <td><input type="radio" class="option-input radio" name="dop_roda" id="dop_roda1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="dop_roda" id="dop_roda2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">9</td>
                                    <td>Spion Dalam</td>
                                    <td><input type="radio" class="option-input radio" name="spion_dalam" id="spion_dalam1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="spion_dalam" id="spion_dalam2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">10</td>
                                    <td>Karpet Depan</td>
                                    <td><input type="radio" class="option-input radio" name="karpet_depan" id="karpet_depan1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="karpet_depan" id="karpet_depan2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">11</td>
                                    <td>Karpet Tengah</td>
                                    <td><input type="radio" class="option-input radio" name="karpet_tengah" id="karpet_tengah1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="karpet_tengah" id="karpet_tengah2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">12</td>
                                    <td>Karpet Belakang</td>
                                    <td><input type="radio" class="option-input radio" name="karpet_belakang" id="karpet_belakang1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="karpet_belakang" id="karpet_belakang2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">13</td>
                                    <td>Kotak P3K</td>
                                    <td><input type="radio" class="option-input radio" name="kotak_p3k" id="kotak_p3k1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="kotak_p3k" id="kotak_p3k2" value="OFF"/></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        <!-- -------------------------------------------------------- Divide Here -------------------------------------------------------- -->

        <div class="col-xl-6">
            <div class="card">

                <div class="card-body">
                        
                        <table class="table datatable-basic">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th>Perlengkapan</th>
                                    <th style="text-align: center">Ada</th>
                                    <th style="text-align: center">Tidak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">14</td>
                                    <td>Klakson / Horn</td>
                                    <td><input type="radio" class="option-input radio" name="klakson" id="klakson1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="klakson" id="klakson2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">15</td>
                                    <td>Kunci Kontak / Remote</td>
                                    <td><input type="radio" class="option-input radio" name="kunci_kontak" id="kunci_kontak1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="kunci_kontak" id="kunci_kontak2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">16</td>
                                    <td>Lighter / Pematik Api</td>
                                    <td><input type="radio" class="option-input radio" name="lighter" id="lighter1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="lighter" id="lighter2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">17</td>
                                    <td>Penahan Lumpur</td>
                                    <td><input type="radio" class="option-input radio" name="penahan_lumpur" id="penahan_lumpur1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="penahan_lumpur" id="penahan_lumpur2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">18</td>
                                    <td>Radio / Tape / LCD</td>
                                    <td><input type="radio" class="option-input radio" name="radio" id="radio1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="radio" id="radio2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">19</td>
                                    <td>Sabuk Pengaman</td>
                                    <td><input type="radio" class="option-input radio" name="sabuk_pengaman" id="sabuk_pengaman1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="sabuk_pengaman" id="sabuk_pengaman2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">20</td>
                                    <td>Sandaran Kepala</td>
                                    <td><input type="radio" class="option-input radio" name="sandaran_kepala" id="sandaran_kepala1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="sandaran_kepala" id="sandaran_kepala2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">21</td>
                                    <td>Segi Tiga Pengaman</td>
                                    <td><input type="radio" class="option-input radio" name="segitiga_pengaman" id="segitiga_pengaman1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="segitiga_pengaman" id="segitiga_pengaman2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">22</td>
                                    <td>STNK / STCK Profit</td>
                                    <td><input type="radio" class="option-input radio" name="stnk" id="stnk1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="stnk" id="stnk2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">23</td>
                                    <td>Talang Air / Stan Mica</td>
                                    <td><input type="radio" class="option-input radio" name="talang_air" id="talang_air1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="talang_air" id="talang_air2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">24</td>
                                    <td>Tool Set</td>
                                    <td><input type="radio" class="option-input radio" name="tool_set" id="tool_set1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="tool_set" id="tool_set2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">25</td>
                                    <td>Wiper Kaca Depan</td>
                                    <td><input type="radio" class="option-input radio" name="wiper_depan" id="wiper_depan1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="wiper_depan" id="wiper_depan2" value="OFF"/></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">26</td>
                                    <td>Wiper Kaca Belakang</td>
                                    <td><input type="radio" class="option-input radio" name="wiper_belakang" id="wiper_belakang1" value="ON" /></td>
                                    <td><input type="radio" class="option-input radio" name="wiper_belakang" id="wiper_belakang2" value="OFF"/></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------- End Row ---------------------------------------------------------- -->

    <!-- ------------------------------------------------------------ Row ------------------------------------------------------------ -->
    <div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <label class="font-weight-bold">Kilometer :</label>
                <input type="text" class="form-control" name="kilometer" placeholder="Kilometer">
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <label class="font-weight-bold">Bahan Bakar :</label>
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
    </div>
    <!-- ---------------------------------------------------------- End Row ---------------------------------------------------------- -->

    <!-- ------------------------------------------------------------ Row ------------------------------------------------------------ -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn bg-blue-400 btn-ladda btn-ladda-progress" data-style="slide-right">
                        <span class="ladda-label">Simpan</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------- End Row ---------------------------------------------------------- -->
    </form>
</div>

<script>

function loadData() {

    // Default
    $('input[name=nomor]').val({!! json_encode($data['data']["nomor"]) !!});
    $('input[name=tanggal]').val({!! json_encode($data['data']["tanggal"]) !!});
    $('input[name=jenis_towing]').val({!! json_encode($data['data']["jenis_towing"]) !!});
    $('input[name=dari_tujuan]').val({!! json_encode($data['data']["dari_tujuan"]) !!});
    $('input[name=nama_driver]').val({!! json_encode($data['data']["nama_driver"]) !!});
    $('input[name=hp_driver]').val({!! json_encode($data['data']["hp_driver"]) !!});

    // Penerima
    $('input[name=nama_pengirim]').val({!! json_encode($data['data']["nama_pengirim"]) !!});
    $('textarea[name=alamat_pengirim]').val({!! json_encode($data['data']["alamat_pengirim"]) !!});
    $('input[name=tlp_pengirim]').val({!! json_encode($data['data']["tlp_pengirim"]) !!});

    // Penerima
    $('input[name=nama_penerima]').val({!! json_encode($data['data']["nama_penerima"]) !!});
    $('textarea[name=alamat_penerima]').val({!! json_encode($data['data']["alamat_penerima"]) !!});
    $('input[name=hp_penerima]').val({!! json_encode($data['data']["hp_penerima"]) !!});

    // Informasi Tambahan
    $('input[name=jenis_kendaraan]').val({!! json_encode($data['data']["jenis_kendaraan"]) !!});
    $('input[name=nopol_kendaraan]').val({!! json_encode($data['data']["nopol_kendaraan"]) !!});
    $('input[name=no_rangka]').val({!! json_encode($data['data']["no_rangka"]) !!});
    $('input[name=no_mesin]').val({!! json_encode($data['data']["no_mesin"]) !!});
    $('input[name=warna_kendaraan]').val({!! json_encode($data['data']["warna_kendaraan"]) !!});
    $('input[name=kondisi_unit]').val({!! json_encode($data['data']["kondisi_unit"]) !!});
    $('textarea[name=catatan]').val({!! json_encode($data['data']["catatan"]) !!});

    // Bahan Bakar
    $('input[name=kilometer]').val({!! json_encode($data['data']["kilometer"]) !!});
    $('select[name=bahan_bakar]').val({!! json_encode($data['data']["bahan_bakar"]) !!});

    // Radio
    var someNumbers = ["ac", "antena", "asbak", "ban_serep", "buku", "dongkrak", "dop_roda", "spion_luar", "spion_dalam", 
        "karpet_depan", "karpet_tengah", "karpet_belakang", "kotak_p3k", "klakson", "kunci_kontak", "lighter", "penahan_lumpur", 
        "radio", "sabuk_pengaman", "sandaran_kepala", "segitiga_pengaman", "stnk", "talang_air", "tool_set", "wiper_depan", "wiper_belakang"];
        
        var dataFix = {!! json_encode($data) !!}
        for (var i = 0; i < someNumbers.length; i++) {

            if (dataFix["data"][someNumbers[i]] === 'ON') {
                var idCheck = someNumbers[i] + "1";
                $( '#' + idCheck ).prop( "checked", true );
            } else {
                var idCheck = someNumbers[i] + "2";
                $( '#' + idCheck ).prop( "checked", true );
            }
        }

        console.log({!! json_encode($data['data']["kondisi_unit"]) !!})
        if ({!! json_encode($data['data']["kondisi_unit"]) !!} === 'baru') {
                $( '#kondisi_unit1' ).prop( "checked", true );
            } else {
                $( '#kondisi_unit2' ).prop( "checked", true );
        }
}
loadData();

$("#Update-All").submit(function(event) {
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

        
                            
</script>
