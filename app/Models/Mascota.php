<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mascota extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'tipo',
        'raza',
        'color',
        'age',
        'dueño',
    ];
}
