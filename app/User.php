<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

     protected $table = 'users';

    use Notifiable;
    use \Venturecraft\Revisionable\RevisionableTrait; // making history of data


    protected $dontKeepRevisionOf = array(
    'remember_token'
    );

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_akun','name','photo','detail_toko','lokasi','status','no_rek','atas_nama','bank','cabang_bank','email','nik','nama_ktp','no_hp','kurir_jne','kurir_jt','kurir_pos','password','type','activation_code','status_user',
        'premium'

    ];

    public static function boot()
    {
        parent::boot();
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
