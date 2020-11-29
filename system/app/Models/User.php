<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Artikel;
class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function artikel(){
        return $this->hasMany(Artikel::class, 'id_user');
    }
}
