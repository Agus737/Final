<!-- Modal -->
<div class="modal fade" id="eliminar{{$consulta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Alumno</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('alumno.destroy',$consulta->id)}}" method="POST">
            @csrf
            @method('delete')
            "Esta seguro que quiere eliminar el Registro de este Alumno"
            <p>{{$consulta->name}}</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No Autorizo</button>
            <button type="submit" class="btn btn-primary">Autorizo</button>
        </form>
      </div>
    </div>
  </div>
</div>