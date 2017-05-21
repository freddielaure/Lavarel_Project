<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Products extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Produktname', 'Kategorie', 'password',   'Bestandswert', 'Preis', 'Typ',
        'Beschreibung',  'Lieferant', 'LieferantAdresse', 'RegalNr','Bestelltswert'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
