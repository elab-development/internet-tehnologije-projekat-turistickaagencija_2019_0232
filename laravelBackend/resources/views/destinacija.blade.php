<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Ajax Pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <br/>
    <h2>Laravel Paginacija </h2>
    <h4>Prikaz svih destinacija u bazi podataka </h4>
    <br/>
    <div id="data-wrapper">
        <div class="row">
        @foreach ($destinacija as $ds)
        <div class="col-3" style="padding-bottom:10px;">
            <div class="card">
            <img src="https://thumbs.dreamstime.com/b/happy-travel-woman-vacation-concept-funny-traveler-enjoy-her-trip-ready-to-adventure-happy-travel-woman-vacation-concept-118679424.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $ds->id }}  : {{ $ds->Naziv }}</h5>
                <p class="card-text">{!! $ds->Opis !!}</p>
            </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
  
    <div class="d-flex">
         {!! $destinacija->links() !!}
    </div>
</div>
</body>
</html>