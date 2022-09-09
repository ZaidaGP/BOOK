<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
</head>


<div class="container">
<form action ="{{route('book.store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
<div class= "row justify-content-center">
<div class="col-md-8 text center">
<div class="card ">
    <div class="card-header">Book</div>
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea  class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" class="form-control" name="url">
        </div>
        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" class="form-control" name="editorial">
        </div>
        
        <div class="row">
            <div class="col-sm-4">
            <div class="form-group">
                <label for="year_published">Year Published</label>
                <input type="text" class="form-control" name="year_published">
            </div>
            </div>
            <div class="col-sm-4">
                
                <div class="form-check form-switch" style="margin-top:25px">
                    <input class="form-check-input" type="checkbox" id="available" name="available">
                    <label class="form-check-label" for="available">Available</label>
                </div><!--cierre form-check-->
                
            </div><!--cierre col-sm-4-->

            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary icon"> Save book</a>
            </div><!--cierre col-sm-4-->
            </div> 
        </div>

        
    
    </div><!--cierre del card-->
</div><!--cierre del col-md-8-->
</div>
</div>
</div>
</form>