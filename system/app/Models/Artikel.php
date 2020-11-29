<?php
namespace App\Models;
use App\Models\User;
use App\Models\Komentar;

class Artikel extends Model{
    protected $table = 'artikel';

    function penulis(){
        return $this->belongsTo(User::class, 'id_user');
    }    
    function komentar(){
        return $this->hasMany(Komentar::class, 'id_artikel');
    }

}
