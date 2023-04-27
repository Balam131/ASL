@extends('tema.app')

@section('title', 'Tarea')

@section('contenido')

    <h3>
        {{ $tarea->nombre }}</i>
    </h3>
    <ul>
        <li>
            Finalizada: <strong>{{ $tarea->estafinalizada() }}</strong>
        </li>
        <li>
            Urgencia: <strong>{{ $tarea->urgencia() }}</strong>
        </li>
        <li>
            Fecha Limite: <strong>{{ $tarea->fecha_limite }}</strong>
        </li>
    </ul>
    <p>
        {{ $tarea->descripcion }}
    </p>
    <hr>
    <div class="row">
        <div class="col-sm-12 mb-2">
            <form action="{{ route('Tarea.destroy', $tarea) }}" method="post">
                @csrf
                @method('delete')
                <x-primary-button class="ml-3">
                    Borrar
                </x-primary-button>
            </form>
        </div>
    </div>


@endsection
