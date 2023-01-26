

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/awesome/css/font-awesome.min.css') }}">

   
    <title>Posts Edwin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">Edwin Samir</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Posts <span class="sr-only">(current)</span></a>
            </li>
           
          </ul>   
          <a  class="btn btn-outline-success my-2 my-sm-0 btn-modal" href="#" data-container=".view" data-href="{{ route('newPost') }}"   data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>

      
        </div>
    </nav>
    <main role="main" class="container">
    <div class="row">
            @foreach ($posts as $post)
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->body }}</p>
              <a href="/posts/{{ $post->id }}" class="btn btn-primary">Detalle</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</main>

<div class="modal fade view no-print" tabindex="-1" role="dialog"  aria-labelledby="myLargeModalLabel">
</div>

    <script src="{{ asset('js/vendor.js') }}"></script>
 
  </body>
</html>



