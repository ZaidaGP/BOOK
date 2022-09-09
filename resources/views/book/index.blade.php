<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    </head>
    
<div class="container">
    
<div class= "row justify-content-center"> <!--clase bootstrap para centrar el contenido-->
<div class="col-md-10 text center"> <!--los elementos abarcaran 10 columnas-->
    <a href="/createbook" class="btn btn-primary icon" role="button"> Create new book</a><!--botón que dirige a vista store-->
<div class="card "> <!--card para el formulario-->
    <div class="card-header">Books</div> <!--titulo del card-->
    <div class="card-body"> <!--cuerpo del card-->

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tittle</th>
        <th scope="col">Editorial</th>
        <th scope="col">Year Published</th>
        <th scope="col">Available</th>
        <th scope="col" style="text-align:center;">Actions</th>
      </tr>
    </thead>
    <tbody>
      <!--foreach para cargar los libros guardados-->
        @foreach ($books as $key=> $book)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$book->title}}</td>
        <td>{{$book->editorial}}</td>
        <td>{{$book->year_published}}</td>
        <td>{{$book->available}}</td>
      
       
      
        <td style="text-align:center;">
            <a href="{{route('showbook',$book->id)}}" class="btn btn-primary icon" role="button"> </a>
            <a href="{{route('editbook',$book->id)}}" class="btn btn-primary icon" role="button"> </a>
            <a href="#" class="btn btn-primary icon " data-bs-toggle="modal" data-bs-target="#exampleModal{{$book->id}}" role="button"> </a>
        </td>
        <div class="modal fade" id="exampleModal{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <form action="{{route('destroybook',$book->id)}}" method="POST"> @csrf
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to delete this book?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
              </div>
            </div>
          </div>
         </form>
        </div>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$books->links()}}
  
  

    </div><!--cierre card-body-->
</div><!--cierre card-->
</div><!--cierre col-md-8-->
</div><!--cierre row-justify-->
</div><!--cierre container-->