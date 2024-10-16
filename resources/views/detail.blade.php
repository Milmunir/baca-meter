
@extends('tamplate.head')
@section('bodhi')  
    @foreach ($data as $key)
        @if ($key->nosambungan == $nosambungan)
            <nav class="nav bg-primary text-white nav-fill py-2 mb-2">
                <div class="container">
                    <div class="row my-2">
                        <div class="col-2 align-self-center text-start PrevP">
                            @if (!$loop->first)
                                <i class="bi bi-caret-left-fill fs-1 px-0 py-0"
                                    style="font-weight: bolder; cursor: pointer;"
                                    onclick="location.href = '/detail/{{ base64_encode($data[$loop->index - 1]->nosambungan) }}'"></i>
                            @endif
                        </div>
                        <div class="col-2 align-self-center text-start">
                            <h3 class="px-0 py-0 my-0">{{ $loop->index + 1 }}</h3>
                        </div>
                        <div class="col-4 align-self-center text-center">
                            <h3 class="px-0 py-0 my-0">Dari</h3>
                        </div>
                        <div class="col-2 align-self-center text-end">
                            <h3 class="px-0 py-0 my-0">{{ $loop->count }}</h3>
                        </div>
                        <div class="col-2 align-self-center text-end nextP">
                            @if (!$loop->last)
                                <i class="bi bi-caret-right-fill fs-1 px-0 py-0"
                                    style="font-weight: bolder; cursor: pointer;"
                                    onclick="location.href = '/detail/{{ base64_encode($data[$loop->index + 1]->nosambungan) }}'"></i>
                            @endif
                        </div>
                    </div>
                </div>
             </nav>

            <div class="container main_container shadow px-4 py-2 mx-1 my-2 bg-white rounded" style="cursor: pointer;">
                <div class="row py-2">
                    <div class="row py-2">
                        <h5>No Sambung</h5>
                        <p>{{ $key->nosambungan }}</p>
                    </div>
                    <div class="row py-2">
                        <h5>Nama Pelanggan</h5>
                        <p>{{ $key->nama }}</p>
                    </div>
                    <div class="row py-2">
                        <h5>Alamat</h5>
                        <p>{{ $key->alamat }}</p>
                    </div>
                    <div class="row py-2">
                        <h5>Tarif</h5>
                        <p>{{ $key->idtarif }}</p>
                    </div>
                    <div class="row py-2">
                        <h5>Wilayah</h5>
                        <p>{{ $key->idwilayah }}</p>
                    </div>
                </div>
            </div>

            <div class="container main_container shadow px-4 py-2 mx-1 my-2 bg-white rounded" style="cursor: pointer;">
                <form action="" id="formBacaan">
                    @csrf
                    <div class="row py-2">
                        <div class="row py-2">
                            <div class="row py-2 mx-auto" style="height: 256px; width: 256px;">
                                <img id="blah" src="#" alt="your image" />
                            </div>
                            <div class="row d-grid gap-2 col-6 mx-auto mt-">
                                <label for="imgInp" class="btn btn-info" style="color: white;">Upload Foto</label>
                                <input accept="image/*;capture=camera" type='file' id="imgInp" style="display: none;" />
                            </div>
                        </div>
                        <div class="row py-2">
                            <h5>Stan Lalu</h5>
                            <p>{{ $key->stanlalu }}</p>
                        </div>
                        <div class="row py-2">
                            <label for="Stan_Meter" class="form-label">Stan Meter</label>
                            <input type="text" class="form-control" id="Stan_Meter">
                        </div>
                        <div class="row py-2">
                            <h5>Pakai</h5>
                            <p>{{ $key->pakai }}</p>
                        </div>
                        <div class="row py-2">
                            <label for="Catatan" class="form-label">Catatan</label>
                            <input type="text" class="form-control" id="Catatan">
                        </div>
                        <label for="latitude">Latitude:</label>
                        <input type="text" id="latitude" name="latitude" readonly>
                        <br>
                        <label for="longitude">Longitude:</label>
                        <input type="text" id="longitude" name="longitude" readonly>
                        <br>
                        <button type="button" onclick="getLocation()">Get Location</button>
                    </div>
                </form>
            </div>
        @endif
    @endforeach

    <p id="console"></p>
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

    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Update the form fields
                    document.getElementById('latitude').value = latitude;
                    document.getElementById('longitude').value = longitude;
                    
                    // Optionally, send the coordinates to your Laravel backend
                    // fetch('/your-laravel-route', {
                    //     method: 'POST',
                    //     headers: {
                    //         'Content-Type': 'application/json',
                    //         'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    //     },
                    //     body: JSON.stringify({ latitude, longitude })
                    // });
                }, function(error) {
                    document.getElementById('console').value = error;
                });
            } else {
                document.getElementById('console').value = "Geolocation is not supported by this browser.";
            }
        }
    </script>
@endsection
