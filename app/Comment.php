<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [
        'kode','photo1','photo2','photo3','komentar','user','image_profil',
    ];

}
