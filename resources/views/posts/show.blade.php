<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/awesome/css/font-awesome.min.css') }}">

    <title>Posts Edwin</title>
</head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Edwin Samir</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> {{ $post->title }} <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<body>
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $post->body }}</p>
                            <a href="/posts" class="btn btn-danger">Back</a>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        {{ $user->name }} - ({{ $user->username }})
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <p>Phone</p> {{ $user->phone }}
                                </li>
                                <li class="list-group-item">
                                    <p>WEB</p> {{ $user->website }}
                                </li>
                                <li class="list-group-item">
                                    <p>email</p> {{ $user->email }}
                                </li>
                            </ul>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>
