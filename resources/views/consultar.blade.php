@extends('plantilla')
    @section('contenido')

    @if (session()->has('confirm'))
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Se ha agregado un nuevo Alumno',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif
    @if (session()->has('eliminado'))
    {!!"<script> Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'Se ha eliminado el Alumno',
      showConfirmButton: false,
      timer: 3500
    })</script>"!!}
  @endif
  @if (session()->has('editado'))
  {!!"<script> Swal.fire({
    position: 'center',
    icon: 'warning',
    title: 'Se ha editado el Alumno',
    showConfirmButton: false,
    timer: 3500
  })</script>"!!}
@endif
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#registro">
                Add
              </button>
          </div>
        <p class="fs-1">Student Personal Data</p>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                <th >Id</th>
                <th >Name</th>
                <th >Course</th>
                <th >Address</th>
                <th >Movile No</th>
                <th >Action</th>
                <th >Delete</th>
                </tr>
            </thead>
                @foreach($consultaRegistros as $consulta)
                <tbody>
                    <tr>
                    <th>{{$consulta->id}}</th>
                    <td>{{$consulta->name}}</td>
                    <td>{{$consulta->course}}</td>
                    <td>{{$consulta->address}}</td>
                    <td>{{$consulta->movile_no}}</td>
                    <th><button type="button" class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#editar{{$consulta->id}}">Edit</button></th>
                    <th><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$consulta->id}}">Delete</button></th>
                    @include('eliminar')
                    @include('editar')
                </tr>
                </tbody>
                @endforeach
        </table>
    </div>
    @include('registro')
    

   
@endsection