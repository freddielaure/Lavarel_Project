<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produkte;

class produkteController  extends Controller
{
protected $redirectTo = '/home';

  protected function insert(Request $request)
 {
   $data = $request->all();
      Produkte::create([

         'name' => $data['name'],
         'mindestbestand' => $data['mindestbestand'],
         'lagerarten_id' => $data['lagerarten_id'],

     ]);

      return redirect()->back()->with('message','Operation Successful !');











 }

 public function index(){
 return view('hinzufuegen');
 }

}
