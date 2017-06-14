<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="https://apex.oracle.com/pls/apex/fw_consulting/r/1373/files/static/v21/favicon.ico">

   <title>Home</title>

   <!-- Bootstrap core CSS -->
   <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="/css/style.css" rel="stylesheet">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">





   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>

  <body>



    @include('layouts.app')
    @section('content')
    @endsection



<div class="container">
    <div class="row">
        <h3>Überblick auf alle Produkte</h3>
        <p>Hier können Sie einen Überblick von einem Produkt haben</p>
        <hr/>

    </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Produkt</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('itemCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    </div>

    <div class="container">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                {{ $item->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mindestbestand:</strong>
                {{ $item->mindestbestand}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lagerarten_id:</strong>
                {{ $item->lagerarten_id}}
            </div>
        </div>



    </div>





</body>

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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</html>
