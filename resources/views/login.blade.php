<head>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body class="container mt-5 login_container">
    <div class="judul text-center">
        <div class="row rounded mx-auto d-block">
            <img src="../reeesource/Logo.jpg" alt="" style="width: 200px;">
        </div>
        <div class="row mt-3">
            <h1>AMBATUKAM</h1>
        </div>
        <div class="row mb-4">
            <h5>Aplikasi Mobile BAca meTer Unggul aKurat AMan </h5>
        </div>
    </div>
    
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
                <input type="password" name="password" class="form-control lg-input" id="password" placeholder="Nama User">
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
    <div class="container">
        <div class="row mx-3">
            <a href="#">Reset data user ?</a>
        </div>
    </div>
    
    <script>
        
    </script>
</body>