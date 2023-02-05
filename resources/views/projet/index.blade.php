list projet
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
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Devoir (Gestion de Projet)</h2>
                    </div>
                    <div class="card-body">
                        <br> <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Date Debut</th>
                                        <th>Date de Fin</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($projetslistes as $projet)
                                    <tr>
                                        <td>{{ $projet->id}}</td>
                                        <td>{{ $projet->nom}}</td>
                                        <td>{{ $projet->description}}</td>
                                        <td>{{ $projet->datebebut}}</td>
                                        <td>{{ $projet->datefin}}</td>
                                        <td>
                                            <a href="{{route ('show',$projet->id)}}" class="btn btn-infos">Mise a Jour Projet</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-infos">Details Projet</a>
                                        </td>
                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>