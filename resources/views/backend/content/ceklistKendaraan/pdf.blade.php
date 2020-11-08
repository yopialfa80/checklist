<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- {{dd($data_peraturan)}} --}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
            
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
    </head>
    <body id="content" style="margin: 150px 150px; background-color: #FAFAFA">
        {{-- <a style="background-color: red" href='/download'>Download PDF</a> --}}


{{-- <a href="javascript:demoFromHTML()" class="button">Run Code</a>
<div >
    <h1>  
        We support special element handlers. Register them with jQuery-style.
    </h1>
</div> --}}

            <table style="width:100%">
                <tr>
                    @foreach ($data as $item)
                    <td style="width: 20%"><img style="width: 100px;" src="assets/images/web/{{$item -> logo_kiri}}"></td>
                    <td style="width: 60%; text-align: center;">
                        <h3 style="font-size: 15px; padding: 0px;">{{$item -> kop_surat_1}}</h3>
                        <h4 style="font-size: 12px; padding: 0px;">{{$item -> kop_surat_2}}</h4>
                        <p style="font-size: 12px; padding: 0px;">{{$item -> kop_surat_3}}</p>
                    </td>
                    <td style="width: 20%;"><img style="width: 100px;" src="assets/images/web/{{$item -> logo_kanan}}"></td>
                    @endforeach
                </tr>
            </table>

            <table class="font-12" style="width:100%">
                <tr>
                    @foreach ($data as $item)
                        <td style="font-size: 16px; text-align: center;"><b>{{$item -> kop_surat_4}}</b></td>
                    @endforeach
                </tr>
            </table>

            <table class="font-11" style="width:100%; margin-top: 20px"  cellspacing="0" cellpadding="0">
                <tr>
                    <td style=" width: 15%;">NOMOR</td>
                    <td style=" width: 2%;">:</td>
                    <td style="">
                    @foreach ($alldata as $item)
                    {{$item -> nomor}}
                    @endforeach
                </td>
                </tr>
                <tr>
                    <td style="">TANGGAL</td>
                    <td style="">:</td>
                    <td style="">
                    {{$item -> tanggal}}
                    </td>
                </tr>
                <tr>
                    <td style="">JENIS</td>
                    <td style=""></td>
                    <td style="">
                        
                        Single Towing &emsp;
                        <?php if ($item -> jenis_towing == "Single Towing") {?>
                              <span class="box-atas">&nbsp;<img style="width: 8px;" src="assets/img/check.png">&nbsp;</span>&emsp;&emsp;&emsp;&emsp;
                        <?php } ?>
                        Carcarier &emsp;
                        <?php
                        if ($item -> jenis_towing == "Carcarier") {?>
                            <span class="box-atas">&nbsp;<img style="width: 8px;" src="assets/img/check.png">&nbsp;</span>&emsp;&emsp;&emsp;&emsp;
                        <?php } ?>
                        Self Drive &emsp;
                        <?php
                        if ($item -> jenis_towing == "Carcarier") { ?>
                             &emsp;<span class="box-atas">&nbsp;<img style="width: 8px;" src="assets/img/check.png">&nbsp;</span>&emsp;&emsp;&emsp;&emsp;
                        <?php } ?>
                        
                    </td>
                </tr>
                <tr>
                    <td style="">DARI / TUJUAN</td>
                    <td style="">:</td>
                    <td style="">
                    {{$item -> dari_tujuan}}
                    </td>
                </tr>
                <tr>
                    <td style="">NOPOL</td>
                    <td style="">:</td>
                    <td style="">
                    {{$item -> nomor}}
                    </td>
                </tr>
                <tr>
                    <td style="">NAMA DRIVER</td>
                    <td>:</td>
                    <td>
                    {{$item -> nama_driver}}
                    </td>
                </tr>
                <tr>
                    <td style="">NOMOR HP</td>
                    <td>:</td>
                    <td>
                        {{$item -> hp_driver}}
                    </td>
                </tr>
            </table>

            <br>

            <table class="font-11" style="width: 100%;" cellspacing="0" cellpadding="0">
                <tr>
                    <td style=" width: 15%; border: 1px solid black; border-right: none; border-bottom: none; padding-left: 10px; padding-top: 10px;">
                        <b>PENGIRIM</b>
                    </td>
                    <td style=" width: 2%; border-top: 1px solid black;">
                    
                    </td>
                    <td style=" width: 31%; max-width: 26%; border-top: 1px solid black;">
                        
                    </td>
                    {{-- batas --}}
                    <td style=" width: 2%; border-right: 1px solid black; border-left: 1px solid black; border-top: none; border-bottom: none" rowspan="5">
                        
                    </td>
                    <td style=" width: 15%; border-top: 1px solid black; padding-left: 10px; padding-top: 10px;">
                        <b>PENERIMA</b>
                    </td>
                    <td style=" width: 2%; border-top: 1px solid black;">

                    </td>
                    <td style=" width: 31%; border-top: 1px solid black; border-right: 1px solid black; ">
                        
                    </td>
                </tr>

                <tr>
                    <td style=" border-left: 1px solid black; padding-left: 10px;">
                        NAMA
                    </td>
                    <td>:</td>
                    <td>
                        {{$item -> nama_pengirim}}
                    </td>
                    <td style=" padding-left: 10px; padding-top: vertical-align: top">
                        NAMA
                    </td>
                    <td style=" vertical-align: top">
                        :
                    </td>
                    <td style=" border-right: 1px solid black; vertical-align: top">
                        {{$item -> nama_penerima}}
                    </td>
                </tr>
             
                <tr>
                    <td style=" border-left: 1px solid black; padding-left: 10px; vertical-align: top;">
                        ALAMAT
                    </td>
                    <td style=" vertical-align: top"> :</td>
                    <td style=" vertical-align: top">
                        {{$item -> alamat_pengirim}}
                        {{-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard --}}
                    </td>
                    <td style=" padding-left: 10px; vertical-align: top">
                        ALAMAT
                    </td>
                    <td style=" vertical-align: top">
                        :
                    </td>
                    <td style=" border-right: 1px solid black; vertical-align: top">
                        {{$item -> alamat_penerima}}
                    </td>
                </tr>

                <tr>
                    <td style=" border-left: 1px solid black;">
                        
                    </td>
                    <td></td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td></td>
                    <td style=" border-right: 1px solid black; ">
                        
                    </td>
                </tr>

                <tr>
                    <td style=" border: 1px solid black; padding-left: 10px; border-top: none; border-right: none;  padding-bottom: 5px;">
                        TELEPON
                    </td>
                    <td style=" border-bottom: 1px solid black;">
                        :
                    </td>
                    <td style=" border-bottom: 1px solid black;">
                        {{$item -> tlp_pengirim}}
                    </td>
                    <td style=" border-bottom: 1px solid black; padding-left: 10px;">
                        TELEPON
                    </td>
                    <td style=" border-bottom: 1px solid black;">
                        :
                    </td>
                    <td style=" border-bottom: 1px solid black; border-right: 1px solid black;">
                        {{$item -> hp_penerima}}
                    </td>
                </tr>
            </table>

            {{-- TABLE 2 --}}
            <table class="font-11" style="width: 100%;" cellspacing="0" cellpadding="0">
                <tr>
                    <td style=" width: 20%; border-left: 1px solid black; padding-left: 10px; padding-top: 5px;">
                        JENIS KENDARAAN
                    </td>
                    <td style=" width: 2%;">
                        :
                    </td>
                    <td style=" width: 27%;">
                        {{$item -> jenis_kendaraan}}
                    </td>
                    {{-- batas --}}
                    <td style=" width: 1%; border-left: 1px solid black;" rowspan="7">
                        
                    </td>
                    <td style=" width: 1%; border-right: 1px solid black;" rowspan="7">
                        
                    </td>
                    <td  style=" width: 49%; border-right: 1px solid black; text-align: center; vertical-align:top; padding-top: 5px;">
                        CATATAN
                    </td>
                </tr>
                
                <tr>
                    <td style=" border-left: 1px solid black; padding-left: 10px;">
                        NOPOL
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{$item -> nopol_kendaraan}}
                    </td>
                    <td style="border-bottom: 1px solid black; border-right: 1px solid black; text-align: center; vertical-align:top;" rowspan="6">
                        {{$item -> catatan}}
                    </td>
                </tr>

                <tr>
                    <td style=" border-left: 1px solid black; padding-left: 10px;">
                        NOMOR RANGKA
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{$item -> no_rangka}}
                    </td>
                </tr>

                <tr>
                    <td style=" border-left: 1px solid black; padding-left: 10px;">
                        NOMOR MESIN
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{$item -> no_mesin}}
                    </td>
                </tr>

                <tr>
                    <td style=" border-left: 1px solid black; padding-left: 10px;">
                        WARNA
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{$item -> warna_kendaraan}}
                    </td>
                </tr>

                <tr>
                    <td style=" border-left: 1px solid black; padding-left: 10px;">
                        KONDISI UNIT
                    </td>
                    <td style="">
                        
                    </td>
                    <td style="">
                        Baru 
                            <?php if ($item -> kondisi_unit == "baru") {?>
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="box-atas">&nbsp;<img style="width: 8px;" src="assets/img/check.png">&nbsp;
                            <?php } ?>
                        </span>
                    </td>
                </tr>

                <tr>
                    <td style="border-left: 1px solid black;border-bottom: 1px solid black;">
                        
                    </td>
                    <td style="border-bottom: 1px solid black; padding-bottom: 5px">
                        
                    </td>
                    <td style="border-bottom: 1px solid black;">
                        Bekas 
                            <?php if ($item -> kondisi_unit == "bekas") {?>
                                &nbsp;&nbsp;<span class="box-atas">&nbsp;&nbsp;<img style="width: 8px;" src="assets/img/check.png">&nbsp;
                            <?php } ?>
                        </span>
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
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> ac == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> ac == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        14
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Klakson / Horn
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> klakson == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> klakson == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        2
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Antena Luar
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> antena == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> antena == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        15
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Kunci Kontak / Remote
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> kunci_kontak == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> kunci_kontak == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none;4 text-align: center">
                        3
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;4">
                        Asbak
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> asbak == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> asbak == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        16
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Lighter / Pematik Api
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> lighter == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> lighter == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        4
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Ban Serep
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> ban_serep == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> ban_serep == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        17
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Penahan Lumpur
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> penahan_lumpur == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> penahan_lumpur == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        5
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Buku Manual / Service
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> buku == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> buku == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        18
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Radio / Tape / LCD
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> radio == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> radio == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        6
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Dongkrak / Stang
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> dongkrak == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> dongkrak == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        19
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Sabuk Pengaman
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> sabuk_pengaman == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> sabuk_pengaman == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        7
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Dop Roda / Wheel Dop
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> dop_roda == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> dop_roda == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        20
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Sandaran Kepala
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> sandaran_kepala == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> sandaran_kepala == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        8
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Kaca Spion Luar
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> spion_luar == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                            if ($item -> spion_luar == "OFF") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        21
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Segi Tiga Pengaman
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                            if ($item -> segitiga_pengaman == "ON") {
                                ?><div class="box"><img src="assets/img/check.png"></div><?php
                            }
                        ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> segitiga_pengaman == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        9
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Kaca Spion Dalam
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> spion_dalam == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> spion_dalam == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        22
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        STNK / STCK Profit
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> stnk == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> stnk == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        10
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Karpet Depan
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> karpet_depan == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> karpet_depan == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        23
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Talang Air / Stan Mica
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> talang_air == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> talang_air == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        11
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Karpet Tengah
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> karpet_tengah == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> karpet_tengah == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        24
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Tool Set
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> tool_set == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> tool_set == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center">
                        12
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Karpet Belakang
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> karpet_belakang == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> karpet_belakang == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; border-bottom: none; text-align: center;">
                        25
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black;">
                        Wiper Kaca Depan
                    </td>
                    <td style="border: 2px solid black; border-bottom: none; text-align: center;">
                        <?php
                        if ($item -> wiper_depan == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; border-right: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> wiper_depan == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                </tr>

                <tr>
                    <td style="border: 2px solid black; border-bottom: 2px solid black; text-align: center">
                        13
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black; border-bottom: 2px solid black;">
                        Kotak P3K
                    </td>
                    <td style="border: 2px solid black; border-bottom: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> kotak_p3k == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border-top: 2px solid black; border-bottom: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> kotak_p3k == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>

                    <td style="border: 2px solid black; border-left: none; text-align: center;">
                        26
                    </td>
                    <td class="padding-table" style="border-top: 2px solid black; border-bottom: 2px solid black;">
                        Wiper Kaca Belakang
                    </td>
                    <td style="border: 2px solid black; border-bottom: 2px solid black; text-align: center;">
                        <?php
                        if ($item -> wiper_belakang == "ON") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
                    </td>
                    <td style="border: 2px solid black; border-left: none; text-align: center;">
                        <?php
                        if ($item -> wiper_belakang == "OFF") {
                            ?><div class="box"><img src="assets/img/check.png"></div><?php
                        }
                    ?>
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
                <td style="vertical-align: top">{{ $item -> kilometer}}<br>{{ $item -> bahan_bakar}}</td>
                    <td class="font-8" rowspan="2">
                        @foreach ($data_peraturan as $item)
                        {{$item->nomor}}. &nbsp;{{$item->isi}} <br>
                        @endforeach
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
                    @foreach ($data as $item)
                    <td><img style="width: 200px" src="assets/images/web/{{$item -> watermark}}"></td>
                    @endforeach
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

                    
                        <td style="width: 33.3%; vertical-align: top">
                        
                            <?php foreach (array_slice($data_cabang, 0, 4) as $item){  ?>
                            <b>
                                <?php echo $item['daerah']; ?></b><br>
                                    <?php foreach ($item['jalan'] as $item2) { ?>
                                        <?php echo $item2->jalan; ?>
                                        <br>
                                    <?php  } ?>
                                <?php } ?>
                        </td>
                        <td style="width: 33.3%; vertical-align: top">
                        
                            <?php foreach (array_slice($data_cabang, 5, 4) as $item){  ?>
                            <b>
                                <?php echo $item['daerah']; ?></b><br>
                                    <?php foreach ($item['jalan'] as $item2) { ?>
                                        <?php echo $item2->jalan; ?>
                                        <br>
                                    <?php  } ?>
                                <?php } ?>
                        </td>
                        <td style="width: 33.3%; vertical-align: top">
                        
                            <?php foreach (array_slice($data_cabang, 10, 4) as $item){  ?>
                            <b>
                                <?php echo $item['daerah']; ?></b><br>
                                    <?php foreach ($item['jalan'] as $item2) { ?>
                                        <?php echo $item2->jalan; ?>
                                        <br>
                                    <?php  } ?>
                                <?php } ?>
                        </td>
                </tr>
                <tr>
                    
                </tr>
            </table>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.1.1/jspdf.umd.min.js"></script>
            <script src="assets/js/jspdf.js"></script>
            <script type="text/javascript" language="javascript">

    function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#content');
        specialElementHandlers = {
          
            '#bypassme': function (element, renderer) {
  
                return true
            }
        };
        margins = {
            top: 0,
            bottom: 0,
            left: 0,
            width: 100
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Test.pdf');
            }, margins
        );
    }
            </script>

    </body>
</html>
