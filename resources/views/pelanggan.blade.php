@extends('template.head')

@section('navi')
    @include('template.navib')
@endsection

@section('bodhi') 
    @yield('navbar.navia')
    
    <div class="container px-md-4">
        <div class="row mx-lg-1 px-2 px-sm-0">

            <div class="container d-none d-lg-block pb-2 shadow my-2 rounded pt-md-2">
                <div class="row">
                    <div class="col-1 px-md-auto my-md-auto Jadoel">
                        <p class="Sub_Perum">No</p>
                    </div>
                    <div class="col-2 p-0 col-md-1 m-md-auto p-sm-auto">
                        <p class="Sub_Perum">Foto</p>
                    </div>
                    <div class="col-8 col-md-10 col-lg-9 my-md-auto">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <p class="Sub_Perum">Nama</p>
                            </div>
                            <div class="col-12 pt-1 col-md-4 pt-md-0">
                                <p class="Sub_Perum">No Meter</p>
                            </div>
                            <div class="col-12 pt-1 col-md-4 pt-md-0">
                                <p class="Sub_Perum">Alamat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-1 p-md-0 my-auto">
                        <p class="Sub_Perum">Meter ?</p>
                    </div>
                </div>
            </div>

            @foreach ($pelanggan as $key)
                <div class="container main_container shadow px-4 py-2 my-2 mx-sm-auto my-sm-2 rounded col-12" 
                onclick="location.href = 'detail/{{base64_encode($key->nosambungan)}}'" style="cursor: pointer;">
                    <div class="row">
                        <div class="d-none d-lg-block col-lg-1 px-md-auto my-md-auto Jadoel">
                            <h4>1</h4>
                        </div>
                        <div class="col-2 p-0 col-md-1 m-md-auto p-sm-auto align-self-center align-self-lg-start PP_Max_Size">
                            <img src="../reeesource/PP.jpg" class="ratio ratio-1x1 PP_Container roounder" alt="">
                        </div>
                        <div class="col-8 col-md-10 col-lg-9 my-md-auto">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <p class="Nama_pelanggan">{{$key->nama}}</p>
                                </div>
                                <div class="col-12 pt-1 col-md-4 pt-md-0">
                                    <p class="Sub_NP">{{$key->nosambungan}}</p>
                                </div>
                                <div class="col-12 pt-1 col-md-4 pt-md-0">
                                    <p class="Sub_NP">{{$key->alamat}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-md-1 p-md-0 my-auto">
                            {{$key->nourut}}/100
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    
    
    <script></script>
@endsection
