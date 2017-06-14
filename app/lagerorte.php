<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class lagerorte extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'lagerorte';
       protected $primaryKey = 'lagerorte_id';
    protected $fillable = [
        'lagerorte_id', 'name', 'strasse_hnr',   'plz','Lagerort_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
