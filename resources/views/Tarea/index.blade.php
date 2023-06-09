@extends('tema.app')

@section('title', 'Listado de tareas')

@section('contenido')

    <h3>Listado de tareas</h3>
    <p> </p>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Finalizada
                </th>
                <th>
                    Fecha Limite
                </th>
                <th>
                    Urgencia
                </th>
                <th>
                    Descripción
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->nombre }}
                    </td>
                    <td>
                        {{ $tarea->estafinalizada() }}
                    </td>
                    <td>
                        {{ $tarea->fecha_limite }}
                    </td>
                    <td>
                        {{ $tarea->urgencia()}}
                    </td>
                    <td>
                        {{ $tarea->descripcion }}
                    </td>
                    <td>
                        <a href="{{ route('Tarea.edit', $tarea) }}">Editar</a>
                        <a href="{{ route('Tarea.show', $tarea) }}">Ver</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection