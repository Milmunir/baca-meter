<head>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>


<body>
    <nav class="navbar navbar-dark bg-primary text-white">
        <div class="container">
            <div class="row my-2">
                <div class="col-2 align-self-center">
                    <i class="bi bi-arrow-left-short fs-1 px-0 py-0" style="font-weight: bolder; cursor: pointer;"
                        onclick="location.href = 'main.html'"></i>
                </div>
                <div class="col align-self-center">
                    <h3 class="px-0 py-0 my-0">NAMA PERUM</h3>
                </div>
            </div>
        </div>
    </nav>
    @foreach ($pelanggan as $key)
        <div class="container main_container shadow px-4 py-2 mx-1 my-2 bg-white rounded"
            onclick="location.href = '{{Request::url().'/detail/'.base64_encode($key->nosambungan)}}'" style="cursor: pointer;">
            <div class="row">
                <div class="col-2 p-0">
                    <img src="../reeesource/PP.jpg" style="height: 100%;" class="ratio ratio-1x1" alt="">
                </div>
                <div class="col-8">
                    <div class="row">
                        <h2>{{$key->nama}}</h2>
                    </div>
                    <div class="row">
                        <p>{{$key->nosambungan}}</p>
                    </div>
                    <div class="row">
                        <p>{{$key->alamat}}</p>
                    </div>
                </div>
                <div class="col-2 align-self-center">
                    {{$key->nourut}}/100
                </div>
            </div>
        </div>
    @endforeach

    <script></script>
</body>
