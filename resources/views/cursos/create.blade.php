@extends('layouts.plantilla')
@section('title', 'Crear Curso') 
@section('content')
    <h1>Crear Nuevo Curso</h1>
    <form action="{{ route('cursos.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración</label>
            <input type="text" class="form-control" id="duracion" name="duracion" required>
        </div>
        <div class="mb-3">
            <label for="profesor" class="form-label">Profesor</label>
            <input type="text" class="form-control" id="profesor" name="profesor" required>
        </div>
        <div class="mb-3">
            <label for="dia" class="form-label">Día</label>
            <input type="text" class="form-control" id="dia" name="dia" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Curso</button>
    </form>
@endsection
