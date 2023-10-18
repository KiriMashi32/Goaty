@extends('layout')
@section('main')
<body>
    <h1>Just one goat</h1>
    <ul>
        <li>{{$goat->id}}</li>
        <li>{{$goat->name}}</li>
        <li>{{$goat->price}}</li>
    </ul>
</body>
@endsection