@extends('template');

@section('section')
<h1>Detallesa de la nota</h1>
<h3>Nombre: {{ $nota->nombre }}</h3>
<h3>Nombre: {{ $nota->descripcion }}</h3>

@endsection
