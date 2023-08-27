<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../resources/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('../resources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../resources/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../resources/css/styleUser.css') }}">
    <title>User</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">User</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="http://laravel/public/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="http://laravel/public/about">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="http://laravel/public/admin">Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>                    
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Footer</h3>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('../resources/js/bootstrap.min.js') }}"></script>
</body>
</html>