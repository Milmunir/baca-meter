<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="../bs/css/bootstrap.min.css">
        <script src="../bs/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <body>
        <nav class="nav bg-primary text-white nav-fill py-2 mb-2">
            <div class="container">
                <div class="row my-2">
                    <div class="col-2 align-self-center text-start PrevP">
                        <i class="bi bi-caret-left-fill fs-1 px-0 py-0" style="font-weight: bolder; cursor: pointer;" onclick="location.href = 'Pelanggan2.html'"></i>
                    </div>
                    <div class="col-2 align-self-center text-start">
                        <h3 class="px-0 py-0 my-0">1</h3>
                    </div>
                    <div class="col-4 align-self-center text-center">
                        <h3 class="px-0 py-0 my-0">Dari</h3>
                    </div>
                    <div class="col-2 align-self-center text-end">
                        <h3 class="px-0 py-0 my-0">2</h3>
                    </div>
                    <div class="col-2 align-self-center text-end nextP">
                        <i class="bi bi-caret-right-fill fs-1 px-0 py-0" style="font-weight: bolder; cursor: pointer;" onclick="location.href = 'Pelanggan2.html'"></i>
                    </div>
                </div>
            </div>
          </nav>
        
        <div class="container">
            <div class="row">

                <div class="container main_container shadow px-4 py-2 mx-1 my-2 bg-white rounded" style="cursor: pointer;">
                    <div class="row py-2">
                        <div class="row py-2">
                            <h5>No Sambung</h5>
                            <p>05/V /021/0021/2D</p>
                        </div>
                        <div class="row py-2">
                            <h5>Nama Pelanggan</h5>
                            <p>Budi Jhonson Santosa</p>
                        </div>
                        <div class="row py-2">
                            <h5>Alamat</h5>
                            <p>Jl. Mawar Mekar</p>
                        </div>
                        <div class="row py-2">
                            <h5>Tarif</h5>
                            <p>2D1</p>
                        </div>
                        <div class="row py-2">
                            <h5>Wilayah</h5>
                            <p>V-2</p>
                        </div>
                    </div>
                </div>

                <div class="container shadow px-4 py-2 mx-1 my-2 bg-white rounded" style="cursor: pointer;">
                    <div class="row py-2">
                        <div class="row py-2">
                            <form runat="server">
                                <div class="row py-2 mx-auto" style="height: 256px; width: 256px;">
                                    <img id="blah" class="PP_Container" src="#" alt="your image"/>
                                </div>
                                <div class="row d-grid gap-2 col-6 mx-auto mt-2">
                                    <label for="imgInp" class="btn btn-info" style="color: white;">Upload Foto</label>
                                    <input accept="image/*;capture=camera" type='file' id="imgInp" style="display: none;"/>
                                </div>
                            </form>
                        </div>
                        <div class="row py-2">
                            <h5>Stan Lalu</h5>
                            <p>33</p>
                        </div>
                        <div class="row py-2">
                            <label for="Stan_Meter" class="form-label">Stan Meter</label>
                            <input type="text" class="form-control" id="Stan_Meter">
                        </div>
                        <div class="row py-2">
                            <h5>Pakai</h5>
                            <p>0</p>
                        </div>
                        <div class="row py-2">
                            <label for="Catatan" class="form-label">Catatan</label>
                            <input type="text" class="form-control" id="Catatan">
                        </div>
                    </div>
                </div>

                <div class="container shadow px-4 py-2 mx-1 my-2 bg-white rounded" style="cursor: pointer;">
                    <div class="row py-2">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-danger" onclick="location.href = 'main.html'">KEMBALIE</button>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-success" onclick="location.href = 'main.html'">SIEMPAN</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    
          <script>
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }
          </script> 
    </body>
    