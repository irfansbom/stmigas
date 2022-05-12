<!DOCTYPE html>
<html>

<head>
    <title>Survei Tahunan Migas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"
        media="all">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"
        media="all">
    </script>

    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-print-css/css/bootstrap-print.min.css">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" media='all'>
    <script src="{{url('js/bootstrap.js')}}" media='all'></script> --}}
</head>
<style>
    .nav-link {
        color: white
    }
</style>

<body>
    <main>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                @if (Auth::user()->level == 'admin')
                <div class="col-auto col-md-2 col-xl-2 px-sm-2 px-0 bg-dark collapse collapse-horizontal" id="sidebar">
                    <div
                        class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="{{url('/')}}"
                            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li class="nav-item">
                                <a href="{{url('monitoring')}}" class="nav-link align-middle px-0">
                                    <i class="bi bi-speedometer2"></i>
                                    <span class="ms-1 d-none d-sm-inline">Monitoring</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('user')}}" class="nav-link align-middle px-0">
                                    <i class="bi bi-person-fill"></i>
                                    <span class="ms-1 d-none d-sm-inline">User</span>
                                </a>
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>
                @endif
                <div class="col px-0">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                        <div class="container-fluid">
                            @if (Auth::user()->level == 'admin')
                            <button class="btn btn-sm nav-link p-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="true"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            @endif
                            <a class="navbar-brand p-0" href="{{url('/')}}"><img
                                    src="{{url('images/logowhitelong.png')}}" height="30px"></a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                </ul>

                                <div class="navbar-nav">
                                    <a class="nav-link" href="{{url('profile')}}"> Profile</a>
                                    <form action="{{url('logout')}}" method="post" id="logout" class="m-0">
                                        @csrf
                                        <a class="nav-link" href="javascript:{}"
                                            onclick="document.getElementById('logout').submit();">Log Out</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="container px-1">
                        {{-- <div class="container "> --}}
                            <div class="container">
                                @yield('content')
                            </div>
                            {{--
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>



    </main>
</body>

</html>
