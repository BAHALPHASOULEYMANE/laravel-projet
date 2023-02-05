details projet
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $projet->nom }}</h5>
        <p class="card-text">
            <strong>Email:</strong> {{ $projet->description }} <br>
            <strong>Phone:</strong> {{ $projet->datebebut }} <br>
            <strong>Message:</strong> {{ $projet->datefin }}
        </p>
    </div>
</div>

<div class="card">
                <table class="table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Nom Phase</th>
                        <th>Priorite</th>
                        <th>Duree</th>
                    </thead>
                    <tbody>
                        @foreach($projet->phases as $phase)
                            <tr>
                                <td>{{$phase->id}}</td>
                                <td>{{$phase->nom}}</td>
                                <td>{{$phase->priorite}}</td>
                                <td>{{$phase->duree}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>