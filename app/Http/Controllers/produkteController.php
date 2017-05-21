<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class produkteController  extends Controller
{
protected $redirectTo = '/home';

  protected function insert(Request $request)
 {
   $data = $request->all();
      Products::create([

         'Produktname' => $data['Produktname'],
         'Typ' => $data['Typ'],
         'Kategorie' => $data['Kategorie'],
         'Preis' => $data['Preis'],
         'LieferantAdresse' => $data['LieferantAdresse'],
         'Lieferant' => $data['Lieferant'],
         'Beschreibung' => $data['Beschreibung'],
         'Bestelltswert' => $data['Bestelltswert'],
         'Bestandswert' => $data['Bestandswert'],
         'RegalNr' => $data['RegalNr'],

     ]);
     
      return redirect()->back()->with('message','Operation Successful !');











 }

 public function index(){
 return view('hinzufuegen');
 }

}
