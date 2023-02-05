add projet
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
<div class="container mt-5">
    <div class="card col-md-6">
        <div class="card-header">Ajout Projet</div>
        <div class="card-body"></div>
        @if(isset($confirmation))
            @if ($confirmation ==1)
                <div class="alert alert-success">Projet Ajouter</div>
            @else
                <div class="alert alert-success">Projet Non_Ajouter</div>
            @endif
        @endif
        <form  method="POST" action="create">
            @csrf
            <label for="">Nom Projet</label>
            <input type="text" class="form-control" name="nom">
            <label for="">Description Projet</label>
            <input type="text" class="form-control" name="description">
            <label for="">Date Debut Projet</label>
            <input type="date" class="form-control" name="datebebut">
            <label for="">Date Fin Projet</label>
            <input type="date" class="form-control" name="datefin">
            <button type="submit" class="btn btn-success mt-2 offset-4" >Ajouter</button>
            <a href="{{route ('listeprojet')}}" class="btn btn-infos mt-2 offset-4">liste Projet</a>
        </form>
    </div>
</div>

</body>
</html>