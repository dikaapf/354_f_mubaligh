<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_ajar extends Model {

    //

    protected $table = 'kategori_ajars';
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'link_foto',
        'status',
    ];

}
