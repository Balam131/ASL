@extends('tema.app')

@section('title', 'Listado de Asistencias')

@section('contenido')

    <h3>Listado de Asistencias</h3>
    <p> </p>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Numero de cuenta
                </th>
                <th>
                    Fecha de Asistencias
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>
                        {{ $alumno->nocuenta }}
                    </td>
                    <td>
                        {{ $alumno->fecha_asis }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection