@extends('plantilla')
    @section('titulo', 'consulta students')
    @section('contenido')
        
    
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
                    </tr>
                </tbody>
                @endforeach
        </table>
    </div>
    @include('registro')

   
@endsection