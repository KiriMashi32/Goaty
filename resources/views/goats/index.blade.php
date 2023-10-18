@extends('layout')
@section('main')
    <h1>All the goats</h1>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prix</th>
    </tr>
    <table>
        @foreach ($goats as $goat)
        <tr>
            <td><a href='../goats/{{$goat['id']}}'>{{$goat['id']}}</a></td>
            <td>{{$goat['nom']}}</td>
            <td>{{$goat['prix']}}</td>
        </tr>
        @endforeach
    </table>
</html>
@endsection