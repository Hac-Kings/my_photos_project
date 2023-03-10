<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>MyPhotos</title>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
            <a class="navbar-brand" href="{{route('photos.index')}}">MyPhotos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse d-flex justify-content-end" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @guest
                        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
                    @else
                    <li class="nav-item"><a href="#" class="nav-link">Benvenuto {{Auth::user()->name}}</a></li>
                    <li class="nav-item"><a href="{{route('logout')}}" class="nav-link" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();
                        ">Log Out</a>
                    </li>
                    <form action="{{route('logout')}}" class="d-none" id="logout-form" method="POST">@csrf</form>
                    <li class="nav-item"><a href="{{route('photos.create')}}" class="btn btn-success">NEW PHOTO</a></li>
                    @endguest
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>   
    </header>
    
    <main class="container">

        {{$slot}}

    </main>
    
</body>
</html>