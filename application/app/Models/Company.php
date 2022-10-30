<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $guard = 'CompanyAuth';

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
