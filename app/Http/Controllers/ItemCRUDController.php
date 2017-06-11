<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produkte;

class ItemCRUDController extends Controller
{

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {
       $Produkte = Produkte::orderBy('produkte_id','DESC')->paginate(7);
       return view('index',compact('Produkte'))
           ->with('i', ($request->input('page', 1) - 1) * 5);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request, [
         'name' => 'bail|required|unique:Products|max:255',
         'Typ' => 'required',
         'Preis' => 'digits:2',
         'categorie' => '|required|max:255',
         //'Kunde' => '|required|max:255',
         'Lieferant' => '|required|max:255',
         'Minimalwert' => '|required|max:255',
         'beschreibung' => '|required|min:20|max:1000',
        // 'Kunde' => 'nullable|date',
       ]);

       Item::create($request->all());
       return redirect()->route('itemCRUD.index')
                       ->with('success','Item created successfully');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $item = Products::find($id);
       return view('show',compact('item'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $item = Products::find($id);
       return view('edit',compact('item'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $this->validate($request, [
         'name' => 'bail|required|unique:Products|max:255',
         'Typ' => 'required',
         'Preis' => 'digits:2',
         'categorie' => '|required|max:255',
         //'Kunde' => '|required|max:255',
         'Lieferant' => '|required|max:255',
         'Minimalwert' => '|required|max:255',
         'beschreibung' => '|required|min:20|max:1000',
       ]);

       Products::find($id)->update($request->all());
       return redirect()->route('itemCRUD.index')
                       ->with('success','Item updated successfully');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       Products::find($id)->delete();
       return redirect()->route('itemCRUD.index')
                       ->with('success','Item deleted successfully');
   }
}
