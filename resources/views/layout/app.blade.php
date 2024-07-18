<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="{{ url('/') }}">E-commerce</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active text-light" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="{{ url('products/all') }}">Products</a>
                    </li>
                    @if(Auth::user() && Auth::user()->role== 'admin')
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="{{ url('products/create') }}">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="{{ url('charts') }}">Charts</a>
                    </li>
                    @endif
                    @if(!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="{{ url('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="{{ url('login') }}">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="{{ url('logout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="#">welcome {{ Auth::user()->lower_name }}</a>
                    </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>

    @yield('main-section')

    <footer class="container-expand bg-primary">
        <div class=" p-2 mt-5">
            <h1 class="text-center ">welcome to our web site</h1>
        </div>
    </footer>
</body>

</html>
