@extends('layout')

@section('title', 'Talleres')

@section('content')

<h1 class="font-bold">TALLERES DISPONIBLES</h2>

@foreach ($talleres as $item )

    <li>{{ $item['taller'] }}</li>
    
@endforeach

@endsection