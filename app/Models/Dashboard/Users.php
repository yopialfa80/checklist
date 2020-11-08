<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','name','username','email','address','email_verified_at','hak_akses','phone','password','two_factor_secret','two_factor_recovery_codes','remember_token'];
}
