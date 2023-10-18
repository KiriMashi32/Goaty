@extends('layout')
@section('main')
<body>
    <h1>Just one goat</h1>
    <ul>
        <li>{{$goat['id']}}</li>
        <li>{{$goat['nom']}}</li>
        <li>{{$goat['prix']}}</li>
    </ul>
</body>
@endsection