
<!DOCTYPE html>

<html>
<head>
    <title>Datenbaank Praktikum</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
</head>
<body>


<div class="container">
  <table id="users" class="table table-hover table-condensed" style="width:100%">
    <thead>
        <tr>
           <th>Produktname</th>
            <th>Kategorie</th>
            <th>Produktname</th>
            <th>Typ</th>
            <th>Beschreibung</th>
            <th>Lieferant</th>
            <th>RegalNr</th>
            <th>Bestandswert</th>
            <th>Bestelltswert</th>
            <th>LieferantAdresse</th>
        </tr>
    </thead>
  </table>
</div>


<script type="text/javascript">
$(document).ready(function() {
    oTable = $('#users').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('datatable.getposts') }}",
        "columns": [
          {data: 'id', name: 'id'},
          {data: 'Produktname', name: 'Produktname'},
          {data: 'Kategorie', name: 'Kategorie'},
          {data: 'Typ', name: 'Typ'},
          {data: 'Beschreibung', name: 'Beschreibung'},
          {data: 'Lieferant', name: 'Lieferant'},
          {data: 'RegalNr', name: 'RegalNr'},
          {data: 'Bestandswert', name: 'Bestandswert'},
          {data: 'Bestelltswert', name: 'Bestelltswert'},
          {data: 'LieferantAdresse', name: 'LieferantAdresse'}
        ]
    });
});
</script>

</body>
</html>
