<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

    <body>
    Title : {{ $data->title }} <br>
    Deskripsi : {{ $data->description }} <br>
    Created At : {{ $data->created_at }} <br>
    Updated At : {{ $data->updated_at }} <br> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
    </body>
    
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Edit
</button>

        <br>
        <br>
        <form action="{{route('delete', $data->id)}}" method="GET">
        {{ csrf_field() }}
        <button type="submit" onclick="return confirm('yakin menghapus?')" class="btn btn-danger">Delete</button>
        </form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('update.blog', $data->id) }}" method="POST">
        {{ csrf_field() }}
        Title : <input type="text" value="{{ $data->title }}" name="title"> <br>
        Deskripsi : <input type="text" value="{{ $data->description }}" name="desc">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">update</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
</html>