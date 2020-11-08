<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class SettingSurat extends Model
{
    protected $table = 'kop_surat';
    protected $fillable = ['id','kop_surat_1','kop_surat_2','kop_surat_3','kop_surat_4','logo_kanan','logo_kiri','watermark'];
}
