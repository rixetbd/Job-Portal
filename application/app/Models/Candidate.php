<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Candidate extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guard = 'candidateauth';

    protected $guarded = ['id'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
