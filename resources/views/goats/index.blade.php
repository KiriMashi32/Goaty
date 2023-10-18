@extends('layout')
@section('main')

    <h1>All the goats</h1><a href="/goats/create">+</a>
    <table>
    <tr>
        <th>Id</th>
        <th>Sexe</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Couleur</th>
        <th>Prix</th>
    </tr>
    
        @foreach ($goats as $goat)

        <tr>
            <td><a href='../goats/{{$goat->id}}'>{{$goat->id}}</a></td>
            <td>{{$goat->sex ? 'Femelle' : 'Male'}}</td>
            <td>{{$goat->name}}</td>
            <td>{{$goat->birthday}}</td>
            <td>{{$goat->color}}</td>
            <td>{{$goat->price}}</td>
        </tr>
        @endforeach
    </table>
</html>
@endsection