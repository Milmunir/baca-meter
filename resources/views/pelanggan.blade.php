{{-- bagian main mengikuti templating yang ada di (views/template/head.blade.php) --}}
@extends('template.head')

{{-- memanggil navbar di bagian template (views/template/navib.blade.php) --}}
@section('navi')
    @include('template.navib')
@endsection

{{-- section bodhi terhubung dengan bagian template head.php dibagian body yield('bodhi') --}}
@section('bodhi') 

{{-- sama seperti bagian atas table bagian main/list jalan, hilang kalau layar diatas
768 pixel class Jadoel nya juga sama dengan yang ada di bagian list jalan--}}
    
{{-- sama seperti bagian atas table bagian main/list jalan, hilang kalau layar diatas
768 pixel class Jadoel nya juga sama dengan yang ada di bagian list jalan--}}
    <div class="container px-md-4">
        <div class="row mx-lg-1 px-2 px-sm-0">

            <div class="container d-none d-lg-block pb-2 shadow my-2 rounded pt-md-2 Jadoel">
                <div class="row">
                    <div class="col-1 px-md-auto my-md-auto">
                        <p class="Sub_Perum">No</p>
                    </div>
                    <div class="col-2 p-0 col-md-1 m-md-auto p-sm-auto">
                        <p class="Sub_Perum">Foto</p>
                    </div>
                    <div class="col-8 col-md-10 col-lg-9 my-md-auto">
                        <div class="row">
                            <div class="col-12 col-md-4 px-0">
                                <p class="Sub_Perum">Nama</p>
                            </div>
                            <div class="col-12 px-0 pt-1 col-md-4 pt-md-0">
                                <p class="Sub_Perum">No Meter</p>
                            </div>
                            <div class="col-12 pt-1 col-md-4 pt-md-0">
                                <p class="Sub_Perum">Alamat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-1 p-md-0 my-auto">
                        <p class="Sub_Perum">No Urut</p>
                    </div>
                </div>
            </div>

{{-- container bagian menampilkan list pelanggan di jalan tertentu tergantung jalan yang
dipilih sebelumnya, list pelanggan dikirim dari controller fungsi getbacaan(), pelanggan
yang ditampilkan tergantung dari jalan yang dipilih dan id pengguna aplikasi (tegantung
siapa yang login di awal tadi) --}}

            @foreach ($pelanggan as $key)
                <div class="container main_container shadow px-4 py-2 my-2 mx-sm-auto my-sm-2 px-lg-0 rounded col-12" 
                onclick="location.href = '{{Request::url().'/detail/'.base64_encode($key->nosambungan)}}'" style="cursor: pointer;">
                    <div class="row">
                        <div class="d-none d-lg-block col-lg-1 px-md-auto my-md-auto Jadoel">
                            <h4 class="px-lg-2">{{ $loop->iteration }}</h4> {{-- numbering berdasarkan berapa kali loop berjalan (iterasi) dimulai dari 1 --}}
                        </div>
                        <div class="col-2 p-0 col-lg-1 p-sm-auto m-my-auto PP_Max_Size_pel">
                            <img src="{{URL::asset('/image/PP.jpg')}}" class="PP_Container roounder_pel" alt="">
                        </div>
                        <div class="col-8 col-lg-9 my-md-auto">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <p class="Nama_pelanggan">{{$key->nama}}</p>
                                </div>
                                <div class="col-12 pt-1 col-lg-4 pt-md-0">
                                    <p class="Sub_NP">{{$key->nosambungan}}</p>
                                </div>
                                <div class="col-12 pt-1 col-lg-4 pt-md-0">
                                    <p class="Sub_NP">{{$key->alamat}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-lg-1 p-md-0 my-auto">
                           {{$key->nourut}}/100  {{-- /100 masih perlu diganti --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    
    
    <script>
    </script>
@endsection

