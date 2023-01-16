<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    //Relación uno a muchos. Porque una foto va a poder tener más de un comentario y más de un like
    //Servirá para sacar los comentarios que tenga una imagen
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //Relación uno a muchos
    public function likes(){
        return $this->hasMany(Like::class);
    }

    //Relación muchos a uno, porque el mismo usuario puede crear muchas imagenes.
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
