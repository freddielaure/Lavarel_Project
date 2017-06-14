<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usersController  extends Controller
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

      public function index(Request $request){
        $User = User::orderBy('id','DESC')->paginate(7);  //Hier gebe ich wieviel Zeile ich pro Seite zeigen möchte
        return view('users',compact('User'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
      }


}
