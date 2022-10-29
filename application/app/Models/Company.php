<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Authenticatable
{
    use HasFactory;

    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'CompanyAuth';
    protected $guarded = ['id'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
