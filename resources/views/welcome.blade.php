@extends('template');
@section('section');

    <div class="container mt-4">
        <h1>Notas</h1>

        @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
           {{  session('mensaje') }}
        </div>

        @endif
    <form action="{{ route('notas.crear') }}" method="post">
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
            <input type="text" placeholder="nombre" name="nombre" id="" class="form-controls mb-2" value="{{ old('nombre') }}">
            <input type="text" placeholder="descripcion" name="descripcion" id="" class="form-controls mb-2"  value="{{ old('descripcion') }}">
            <button class="btn btn-primary" type="submit">Agregar</button>
        </form>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $notas as $item )

                <tr>
                <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td><a href="{{ route('nota.detalles',$item) }}">Detalles </a> </td>
                    <td><a href="{{ route('nota.actualizar',$item) }}">Actualizar </a> </td>
                    <td>
                    <form action="{{ route('nota.eliminar',$item) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf()
                        <button type="submit">Eliminar</button>
                        </form>
                    </td>
                  </tr>
                  <tr>

                @endforeach


            </tbody>
          </table>
    </div>
    @endsection

