{{-- bagian main mengikuti templating yang ada di (views/template/head.blade.php) --}}
@extends('template.head')
@section('bodhi')

{{-- bagian navbar tidak dipisah karena ada fungsi looping yang mencakup bagian navbar
dan container atas --}}
    @foreach ($data as $key)
        @if ($key->nosambungan == $nosambungan)
            <nav class="nav bg-primary text-white nav-fill py-2 mb-2">
                <div class="container">
                    <div class="row my-2">
                        <div class="col-2 align-self-center text-start PrevP">
                            @if (!$loop->first)
                                <i class="bi bi-caret-left-fill fs-1 px-0 py-0" style="font-weight: bolder; cursor: pointer;"
                                    onclick="location.href = '{{ base64_encode($data[$loop->index - 1]->nosambungan) }}'"></i>
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
                                    onclick="location.href = '{{ base64_encode($data[$loop->index + 1]->nosambungan) }}'"></i>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container">
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
                    <form action="/upstan" id="formBacaan" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="number" name="bulan" value="{{$key->bulan}}" hidden> --}}
                        {{-- <input type="number" name="tahun" value="{{$key->tahun}}" hidden> --}}
                        <input type="text" name="nosambungan" value="{{ $key->nosambungan }}" hidden>
                        <input type="number" name="pakai" value="{{ $key->pakai }}" hidden>
                        <input type="number" name="idjalan" value="{{ $key->idjalan }}" hidden>
                        {{-- <input type="number" name="pakairata" value="{{$key->pakairata}}" hidden> --}}
                        <input type="text" name="iduser" value="{{ $key->iduser }}" hidden>
                        <div class="row py-2">
                            <div class="row py-2">
                                <div class="row py-2 col-12 mx-auto" style="height: 20rem">
                                    <img id="blah" src="#" class="mh-100" style="object-fit: contain" alt="your image" />
                                </div>
                                <div class="row d-grid gap-2 col-12 mx-auto mt-">
                                    {{-- bagian upload dan preview foto terhubung dengan javascript yang ada dibawah foto.onchange tiap tombol
                                     ditekan fungsi akan langsung dijalankan --}}
                                    <label for="foto" class="btn btn-info py-2" style="color: white;">
                                        <h5>Upload Foto</h5>
                                    </label>
                                    <input accept="image/*;capture=camera" type='file' name="foto" id="foto" style="display: none;" />
                                </div>
                            </div>

                            <div class="row py-2">
                                <h5>Stan Lalu</h5>
                                <p>{{ $key->stanlalu }}</p>
                            </div>
                            <div class="row py-2">
                                <label for="stan" class="form-label">Stan Meter</label>
                                <input type="text" class="form-control" name="stan" id="stan">
                            </div>
                            <div class="row py-2">
                                <h5>Pakai</h5>
                                <p>{{ $key->pakai }}</p>
                            </div>
                            <div class="row py-2">
                                <label for="idcatatan" class="form-label">Catatan</label>
                                {{-- <input type="text" class="form-control" name="idcatatan" id="idcatatan"> --}}
                                <select name="idcatatan" id="idcatatan" class="form-control">
                                    @foreach ($catatan as $key)
                                        <option value="{{$key->idcatatan}}">{{$key->keterangan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row py-2">
                                <label for="lat" class="form-label">Latitude:</label>
                                <input type="text" class="form-control" id="lat" name="lat" readonly>
                            </div>
                            <div class="row py-2">
                                <label for="long" class="form-label">Longitude:</label>
                                <input type="text" class="form-control" id="long" name="long" readonly>
                            </div>
                            <button type="button" class="btn btn-info py-2" style="color: white;" onclick="getLocation()">
                                <h5>Get Location</h5>
                            </button>
                        </div>
                        <div class="row py-2">
                            <h5>Stan Lalu</h5>
                            <p>{{ $key->stanlalu }}</p>
                        </div>
                        <div class="row py-2">
                            <label for="stan" class="form-label">Stan Meter</label>
                            <input type="text" class="form-control" name="stan" id="stan">
                        </div>
                        <div class="row py-2">
                            <h5>Pakai</h5>
                            <p>{{ $key->pakai }}</p>
                        </div>
                        <div class="row py-2">
                            <label for="idcatatan" class="form-label">Catatan</label>
                            <input type="text" class="form-control" name="idcatatan" id="idcatatan">
                        </div>
                        <div class="row py-2">
                            <label for="lat" class="form-label">Latitude:</label>
                            <input type="text" class="form-control" id="lat" name="lat" readonly>
                        </div>
                        <div class="row py-2">
                            <label for="long" class="form-label">Longitude:</label>
                            <input type="text" class="form-control" id="long" name="long" readonly>
                        </div>
                        <button type="button" class="btn btn-info py-2" style="color: white;" onclick="getLocation()"><h5>Get Location</h5></button>
                    </div>
                </form>
            </div>
        @endif
    @endforeach

            <p id="console"></p>
            <div class="container shadow px-4 py-2 mx-1 my-2 bg-white rounded" style="cursor: pointer;">
                <div class="row py-2">
                    {{-- tombol untuk kembali ke list pelanggan --}}
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-danger py-2" onclick="location.href = 'main.html'"><h5>KEMBALIE</h5></button>
                    </div>
                    {{-- tombol untuk menyimpan perubahan --}}
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-success py-2" onclick="location.href = 'main.html'"><h5>SIEMPAN</h5></button>
                    </div>
                    </form>
                </div>
            @break
    @endif
@endforeach

<p id="console"></p>
<div class="container shadow px-4 py-2 mx-1 my-2 bg-white rounded" style="cursor: pointer;">
    <div class="row py-2">
        {{-- tombol untuk kembali ke list pelanggan --}}
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-danger py-2" onclick="location.href = '{{ Str::before(Request::url(), '/detail')}}'">
                <h5>KEMBALI</h5>
            </button>
        </div>
        {{-- tombol untuk menyimpan perubahan --}}
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success py-2" form="formBacaan">
                <h5>SIEMPAN</h5>
            </button>
        </div>
    </div>
</div>
</div>

<script>
    foto.onchange = evt => {
        const [file] = foto.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
        // fungsi js untu mendapatkan latitude dan longitude (tergantung lokasi device sekarang)
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Update form longitude dan latitude
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
    }
</script>
@endsection
