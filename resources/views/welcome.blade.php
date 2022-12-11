<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Student Personal Data</title>
</head>
<body>
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
