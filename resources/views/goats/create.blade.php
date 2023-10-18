@section('main')

@extends('layout')


<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<h1>Make a goat</h1>

<form method="post" action="/goats">
  @csrf
  <input type="checkbox" name="sex">
  <input type="text" placeholder="nom" name="name">
  <input type="number" placeholder="prix" name="price">
  <input type="text" placeholder="couleur" name="color">
  <input type="date" placeholder="birthday" name="birthday">



  <button>Valider</button>
</form>
</body>

</html>
@endsection