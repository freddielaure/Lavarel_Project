@include('layouts.app')
@section('content')
@endsection





<div class="container df">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produkte bearbeiten</h2>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr class="bach">
          <th>Nr</th>
          <th>Name</th>
           <th>Mindestbestand</th>
           <th>Lagerarten_id</th>
           <!-- Button-->
            <th width="280px">Action</th>
            <th width="280px">Action</th>
            <th width="280px">Action</th>

        </tr>
   @foreach ($Produkte as $key => $item)
    <tr class="hoverable">
        <td>{{ ++$i }}</td>  <!-- incremente a chaque le numero-->
        <td>{{ $item->name }}</td>
        <td>{{ $item->mindestbestand}}</td>
        <td>{{ $item->lagerarten_id }}</td>
          <td>
            <a class="btn btn-info" href="{{ route('itemCRUD.show',$item->id) }}">Show</a>
         </td>



                  <td>
                    <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}">Edit</a>
                  </td>



                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['itemCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
              </td>
    </tr>
    @endforeach
    </table>

    {!! $Products->render() !!}

  </div>

  <footer class="footer">
       <div class="container">
        @include('footer')
       </div>
     </footer>



<style>

.bach{
 background: rgb(59, 119, 171);
   color: rgb(255, 255, 255);
   text-align: center;
}

.df {
   padding: 20px 15px 0 !important;

}

th ,tr{
   text-align: center;
}


.hoverable:hover {
         background-color: rgba(241, 241, 241, 0.77);

   }
   .df{
     margin: 80px;
   }
   .footer{
     background: #337ab7 !important;
}
.nav a {
  color: white;
}
.navbar-nav{
  margin-left: 300px !important;
}
</style>
