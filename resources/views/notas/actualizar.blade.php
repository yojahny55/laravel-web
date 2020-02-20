@extends('template');

@section('section')
<h1>Actualizar Nota {{ $nota->id }}</h1>
@if (session('mensaje'))
<div class="alert alert-success" role="alert">
   {{  session('mensaje') }}
</div>

@endif

<form action="{{ route('notas.update',$nota->id) }}" method="post">
    @method('put')
    @csrf

  @error('nombre')
  <div class="alert alert-danger" role="alert">
      El nombre es obligatorio
  </div>

  @enderror

  @error('descripcion')
  <div class="alert alert-danger" role="alert">
     La descripcion es obligatoria
  </div>

  @enderror
    <input type="text"
     placeholder="nombre"
      name="nombre"
      id=""
      class="form-controls mb-2"
       value="{{ $nota->nombre }}">


    <input
     type="text"
     placeholder="descripcion"
     name="descripcion" id=""
     class="form-controls mb-2"
     value="{{ $nota->descripcion }}">
    <button class="btn btn-primary" type="submit">Editar</button>
</form>

@endsection
