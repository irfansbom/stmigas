<html>

<head>
    <title>Survei Tahunan Migas</title>

    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"
        media="print"> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-print-css/css/bootstrap-print.min.css">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" media='all'>
    <script src="{{url('js/bootstrap.js')}}" media='all'></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">ST MIGAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
    <div class="container px-5">
        <div class="container ">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
