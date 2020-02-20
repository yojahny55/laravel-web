@extends('template')

@section('section')
<div class="container">
    <h1>Equipo de trabajo</h1>
    @foreach ($equipo as $item)
    <a href="{{ route('nosotros',$item) }}">{{ $item }}</a>
    @endforeach


    @if (!empty($nombre))

    @switch($nombre)
        @case('Juanito')

        <div class="mt-5">
            <p>La cosa</p>
        </div>

            @break
        @case('Pedrito')
        <p>La cosa</p>
            @break
        @case('Marijuana')
        <p>La cosa 2</p>
            @break
        @case('Regaeton')
        <p>La cosa 3</p>
            @break
        @default

    @endswitch
    @endif

</div>
@endsection
