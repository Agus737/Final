<!-- Modal -->
<div class="modal fade" id="editar{{$consulta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Alumno</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('alumno.update',$consulta->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="txtname" value="{{$consulta->name}}">
                    <p>{{$errors->first('txtname')}}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Course</label>
                    <input type="text" class="form-control" name="txtcourse" value="{{$consulta->course}}">
                    <p>{{$errors->first('txtcourse')}}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="txtaddress" value="{{$consulta->address}}">
                    <p>{{$errors->first('txtaddress')}}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Movile No</label>
                    <input type="number" class="form-control" name="txtmovile" value="{{$consulta->movile_no}}">
                    <p>{{$errors->first('txtmovile')}}</p>
                  </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>