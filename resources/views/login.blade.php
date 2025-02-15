<head>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_new.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="container px-5 px-xl-2 mt-5 login_container">
    {{-- Bagian atas (logo dan nama aplikasi) --}}
    <div class="judul text-center">
        <div class="row rounded mx-auto d-block">
            {{-- url mengarah ke bagian public/image/(gambar.png/jpg/dll) --}}
            <img src="{{URL::asset('/image/Logo.jpg')}}" alt="" style="width: 200px;">
        </div>
        <div class="row mt-3">
            <h1>Delta Tirta Sidoarjo</h1>
        </div>
        <div class="row mb-4">
            <h5>Aplikasi Baca Meter</h5>
        </div>
    </div>
    
    {{-- Bagian form username, password, dan tombol login
    setelah tombol login ditekan  data di oper (method = POST) ke bagian user controller function login untuk dicek -
    - apakah username dan password sesuai dengan yang ada di database jika tidak maka return 401 (Unauthorized),
    jika ada maka generate token, cookie, dsb (waktu expired login) --}}

    <form class="container mt-4" action="login" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="form-group">
                <label for="namauser">Username</label>
                <input type="text" name="namauser" class="form-control lg-input" id="uname" placeholder="Nama User">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control lg-input" id="password" placeholder="Password">
            </div>
        </div>
        {{-- @error($e)
            {{$e}}
        @enderror --}}
        <div class="row justify-content-center"></div>
            <div class="row mx-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block logbtn">Masuk</button>
            </div>
        </div>
    </form>
    
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
</body>