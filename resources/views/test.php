
@extends('layouts.app')
@section('content')

<!-- Begin page content -->
   <div class="container cont">
     <div class="page-header ph">
       <h1>Lagerverwaltug</h1><?php
       $bb=Session::get('message');
       if ($bb!= null){

       echo "<Pierre> $bb </Pierre>";
     }
     ?>
     </div>
     <p class="lead">Ich überlege mir noch, was ich hier schreiben soll. Dies ist nur ein blablablablablbalablablablablablabalablablabla</p>

 </div>


<div class="container con">
     <h2>Chefkoch <p class="lead">Bitte folgende Daten eintragen!</p></h2>
     <!-- Quand je vais cliquer sur le button "Produkte eingeben cava summit!"-->
      <form class="form-horizontal" role="form" method="POST" action="/insert">
        {{ csrf_field() }}
  <div class="form-group">
    <label class="col-sm-1" for="Produktname">Produktname:</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" name="Produktname"  value="{{ old('Produktname') }}" id="Produktname" placeholder="Produktname">
  </div>


  <label class="col-sm-1" for="Kategorie">Kategorie:</label>
  <div class="col-sm-5">
         {{ Form::select('Kategorie', [
    '1' => 'Tomaten',
    '2' => 'Potatoes',
    '3' => 'Orange',
    '4' => 'Paprika']
  ) }}
</div>

  </div>


  <div class="form-group">
    <label class="col-sm-1" for="Typ">Typ:</label>

      <div class="col-sm-5">
             {{ Form::select('Typ', [
        '1' => 'Gemüse',
        '2' => 'Getränke',
        '3' => 'Teller',
        '4' => 'Gabe']
      ) }}

  </div>


  <label class="col-sm-1" for="Preis">Preis:</label>
  <div class="col-sm-5">
  <input type="text" class="form-control" name="Preis"  value="{{ old('Preis') }}" id="Preis" placeholder="Preis ">
</div>
</div>

<div class="form-group">
  <div class="col-sm-6">
  <label class="col-sm-1"  for="Beschreibung">Beschreibung:</label>

  <textarea class="form-control" rows="5" name="Beschreibung"  value="{{ old('Beschreibung') }}" id="Beschreibung"></textarea>
  </div>
</div>



<div class="form-group">
  <div class="col-sm-3">
  <label>Regal Nr:</label>

  <input type="text" class="form-control" name="RegalNr"  value="{{ old('RegalNr') }}" id="reg" placeholder="Regal Nr"></div>

  <div class="col-sm-3">
  <label>Minimal Wert:</label>

  <input type="text" class="form-control"  name="MinimalWert"  value="{{ old('MinimalWert') }}" id="minw" placeholder="Minimal Wert">
</div>
</div>




<div class="form-group">
   <div class="col-sm-3">
   <label>Bestandswert:</label>

      <input type="text" class="form-control"  name="Bestandswert"  value="{{ old('Bestandswert') }}" id="Bestand" placeholder="Bestandswert">
   </div>

    <div class="col-sm-3">
   <label >Bestelltswert:</label>

      <input type="text" class="form-control" name="Bestelltswert"  value="{{ old('Bestelltswert') }}" id="Bestell" placeholder="Bestelltswert">
   </div>
</div>



<div class="form-group">
   <div class = "col-sm-3">

   <label>Lieferant:</label>

      <input type="text" class="form-control" name="Lieferant"  value="{{ old('Lieferant') }}" id="Lief" placeholder="Lieferant">
   </div>
   <div class = "col-sm-3">
   <label>Lieferante Adresse:</label>

      <input type="text" class="form-control" name="LieferantAdresse" value="{{ old('LieferantAdresse') }}" id="lief" placeholder="Lieferant Adresse">
   </div>
</div>




  <div class="col-md-0">
      <button type="submit" class="btn btn-primary">
          <span class="t-Icon fa fa-edit"></span> Produkte eingeben
      </button>
  </div>


  </div>





</form>

</div>

@endsection
<style>
.con{
    background: #ccc !important;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2E6D73;
    width: 555px;
    height: 60px;
    font-size: 18px !important;
}
.ph {
    padding-bottom: 3px !important;
    margin: 0px 0 3px !important;
    border-bottom: 1px solid #eee;
}
.cont{
  margin-top: -12px !important;
}

select {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100% !important;
    height: 35px !important;
    background: white !important;
}

Pierre{
  color: #4F8A10;
    float: right;
    margin-top: -59px;
    background: #DFF2BF;
    font-size: 2.5rem;
    padding: 9px;
}



</style>
