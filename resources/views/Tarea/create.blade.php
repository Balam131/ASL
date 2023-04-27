@extends('tema.app')

@section('title', 'Nueva tarea')

@section('contenido')

    <form action="{{ route('Tarea.store') }}" method="POST">
        <x-tarea-form-body/>

    </form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
@endsection