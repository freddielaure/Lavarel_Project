<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class bestaende extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'bestaende';
       protected $primaryKey = 'bestaende_id';
    protected $fillable = [
        'bestaende_id', 'menge',   'mengeneinheiten_id','produkte_id','lagerorte_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
