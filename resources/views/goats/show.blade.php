@extends('layout')
@section('main')
<body>
    <h1>Just one goat</h1>
    <a href='/goats/{{$goat->id}}/edit'>Modifier {{$goat->name}} </a>
    <ul>
        <li>{{$goat->id}}</li>
        <li>{{$goat->sex}}</li>
        <li>{{$goat->name}}</li>
        <li>{{$goat->birthday}}</li>
        <li>{{$goat->color}}</li>
        <li>{{$goat->price}}</li>
    </ul>
    <a href="/goats">All the goats</a>

</body>
@endsection