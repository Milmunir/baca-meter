@foreach ($pelanggan as $key)
            <div class="container main_container shadow px-4 py-2 mx-1 my-2 bg-white rounded"
                onclick="location.href = 'detail/{{base64_encode($key->nosambungan)}}'" style="cursor: pointer;">
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