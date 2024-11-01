{{-- bagian main mengikuti templating yang ada di (views/template/head.blade.php) --}}
@extends('template.head')

{{-- memanggil navbar di bagian template (views/template/navia.blade.php) --}}
@section('navi')
  @include('template.navia')
@endsection

{{-- section bodhi terhubung dengan bagian template head.php dibagian body yield('bodhi') --}}
@section('bodhi')

{{-- bagian atas table (hidden saat view dibawah 768px untuk mengganti minimal muncul edit/pindahkan 
class jadoel di public/css/style_new.css bagian @media min-width: 768px) --}}
    <div class="container">
      <div class="row px-2">
        <div class="container d-none d-md-block pb-2 shadow my-2 rounded pt-md-2">
          <div class="row">
              <div class="col-1 px-md-auto my-md-auto Jadoel">
                <p class="Sub_Perum">No</p>
              </div>
              <div class="col-1 align-self-center">
                <p class="Sub_Perum">Icon</p>
              </div>
              <div class="col-8 align-self-center">
                <div class="row">
                  <div class="col-12 col-md-6 p-0">
                    <p class="Sub_Perum">Nama Perum</p>
                  </div>
                  <div class="col-12 col-md-6 p-0">
                    <p class="Sub_Perum">Kode Area</p>
                  </div>
                </div>
              </div>
              <div class="col-2 p-0">
                <p class="Sub_Perum">Jumlah Meter</p>
              </div>
          </div>    
        </div>

       
        {{-- container bagian menampilkan list jalan, $jalan adalah array yang berisi data jalan yang
di ambil dari database melalui controller fungsi getjalan(), array get jalan didefinisikan
di halaman ini sebagai array key, dan untuk setiap array jalan yang dirubah menjadi $key program
akan mengloop sampai semua $jalan diubah/didefinisikan sebagai $key. $key->(namajalan,idjalan,idcabang)
mengarah ke column (namajalan,idjalan,idcabang) di database rekening table table jalan --}}
        @foreach ($jalan as $key)
        <div class="container main_container pb-2 shadow my-2 rounded pt-md-2" onclick="location.href = '/bacaan/{{$key->idjalan}}'" style="cursor: pointer;">
          <div class="row">
              <div class="d-none d-md-block col-md-1 px-md-auto my-md-auto Jadoel">
                <h4>{{ $loop->iteration }}</h4> {{-- numbering berdasarkan berapa kali loop berjalan (iterasi) dimulai dari 1 --}}
              </div>
              <div class="col-2 px-auto pt-3 pb-1 col-md-1 p-md-0 my-md-2 mx-md-auto p-sm-auto PP_Max_Size">
                <img src="{{URL::asset('/image/TIS.jpg')}}" class="PP_Container roounder" alt="">
              </div>
              <div class="col-8 align-self-center">
                <div class="row">
                  <div class="col-12 col-md-6 px-md-1">
                    <p class="Nama_Perum">{{$key->namajalan}}</p>
                  </div>
                  <div class="col-12 col-md-6 px-md-1">
                    <p class="Sub_Perum">{{$key->idcabang}}/{{$key->idwilayah}}/{{$key->idjalan}}</p>
                  </div>
                </div>
              </div>
              <div class="col-2 d-flex my-auto mx-auto col-md-2 px-md-1">
                <p class="Sub_Perum">0/{{$key->jumlah}}</p>
              </div>
          </div>    
        </div>
        @endforeach

      </div>
    </div>
@endsection