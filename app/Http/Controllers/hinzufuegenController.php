<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hinzufuegenController  extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()        //Pour voir la page HOME il faut s'authentifier
    {
        $this->middleware('auth');
    }

      /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Http\Response
       */

      public function index(){
      return view('hinzufuegen');
      }


}
