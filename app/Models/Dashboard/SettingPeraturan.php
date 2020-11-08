<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class SettingPeraturan extends Model
{
    protected $table = 'peraturan';
    protected $fillable = ['id','nomor','isi'];
}