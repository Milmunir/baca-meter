@extends('template.head')

<nav class="nav bg-primary text-white nav-fill py-2 mb-4">
    <div class="container">
        <div class="row my-2">

            <div class="col-6 col-md-5 col-lg-4 col-xl-3">
                <div class="row">
                    <div class="col-2 text-start my-auto">
                        <a href="{{url('/jalan')}}" class="log_button px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                               <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" stroke="white" stroke-width="1" fill="white"/>
                            </svg>
                        </a> 
                    </div>
                    <div class="col align-self-center">
                        <h3 class="px-0 py-0 my-0">Daftar Pelanggan</h3>
                    </div>
                </div>
            </div>

            <div class="col-6"></div>

        </div>
    </div>
</nav>