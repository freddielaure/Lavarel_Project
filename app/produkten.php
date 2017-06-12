<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class produkten extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'produktes';
    protected $fillable = [
        'produkte_id', 'name', 'lagerarten_id',   'mindestbestand'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
