@extends('layouts.plantilla')
@section('title', 'Index Cursos') 
@section('content')
<h1>Bienvenido a los cursos</h1>
<p><b>Lista de cursos disponible</b></p>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre del curso</th>
        <th scope="col">Duracion</th>
        <th scope="col">Profesor</th>
        <th scope="col">Dia</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>PHP</td>
        <td>20 horas</td>
        <td>Mauricio</td>
        <td>Lunes</td>
        <td>
          <button type="button" class="btn btn-primary btn-sm">Editar</button>
          <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>HTML</td>
        <td>20 horas</td>
        <td>Mauricio</td>
        <td>Martes</td>
        <td>
          <button type="button" class="btn btn-primary btn-sm">Editar</button>
          <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>CSS</td>
        <td>20 horas</td>
        <td>Mauricio</td>
        <td>Miercoles</td>
        <td>
          <button type="button" class="btn btn-primary btn-sm">Editar</button>
          <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>JavaScript</td>
        <td>20 horas</td>
        <td>Mauricio</td>
        <td>Jueves</td>
        <td>
          <button type="button" class="btn btn-primary btn-sm">Editar</button>
          <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
  
  
@endsection