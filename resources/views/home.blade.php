@extends('layouts.app')
@section('content')

<div class="container ID">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <p id="text">
            <marquee width="1000" height='250' direction="up">
        Willkommen bei Delicious! Unser Lagerverwaltungssystem.
      </MARQUEE>
      </p>

        </div>
    </div>
</div>

<!-- Casrd implementierung -->
<div class="container wrt">
<div class="row">
  <div class="col-sm-4">
    <div class="card card1">
    <div class="t-Card-icon u-color1"><span class="t-Icon fa fa-search-plus"><span class="t-Card-initials" role="presentation"></span></span></div>
      <div class="card-block">
        <h3 class="card-title">Produkte hinzufügen</h3>
        <p class="card-text">Möglcihkeit den Zustand einem bestimmten Produkte zu ändern.</p>
        <a href="hinzufuegen" class="btn btn-primary">Bestätigen</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card card1">
      <div class="t-Card-icon u-color2"><span class="t-Icon fa fa-search-minus"><span class="t-Card-initials" role="presentation"></span></span></div>
      <div class="card-block">
        <h3 class="card-title">Produkte bearbeiten</h3>
        <p class="card-text">Produkte, welche ungewünscht sind, aus der Liste rausnehmen.</p>
        <a href="itemCRUD" class="btn btn-primary">Bestätigen</a>

      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card card3">
      <div class="t-Card-icon u-color3"><span class="t-Icon fa fa-check"><span class="t-Card-initials" role="presentation"></span></span></div>
      <div class="card-block">
        <h3 class="card-title">Kritische Bestände ansehen</h3>
        <p class="card-text">Sich angucken, welche Produkte bestellt werden müssen.</p>
        <a href="itemCRUD" class="btn btn-primary">Bestätigen</a>
      <!--<a href="test" class="btn btn-primary">Test</a>-->
      </div>
    </div>
  </div>
</div>
</div>





<div class="container wrt">
<div class="row">
  <div class="col-sm-4">
    <div class="card card1">
    <div class="t-Card-icon u-color1"><span class="t-Icon fa fa-search-plus"><span class="t-Card-initials" role="presentation"></span></span></div>
      <div class="card-block">
        <h3 class="card-title">Benutzerverwaltung</h3>
        <p class="card-text">Hier können Sie die Benutzer verwalten</p>
        <a href="users" class="btn btn-primary">ansehen</a>
      </div>
    </div>
  </div>



</div>
</div>
@endsection
<link href="/css/home_style.css" rel="stylesheet">
