<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class SettingCabang extends Model
{
    protected $table = 'cabang';
    protected $fillable = ['id','daerah','jalan'];
}
