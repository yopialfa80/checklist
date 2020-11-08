<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class CeklistKendaraan extends Model
{
    protected $table = 'ceklist_kendaraan';
	
	protected $primaryKey = 'id';
	
	protected $guarded = [];
	
	public $timestamps = false;
}
