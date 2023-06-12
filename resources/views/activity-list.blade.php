@extends('layouts.landing.master')
@section('content')
    <section class="section bg-gradient">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="home-title">
                    <h1 class="mb-3 text-white text-center">Discover Your Activity Today</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- contact start -->
    <section class="section" id="contact">
        <div class="container-fluid">
            <div class="row">
                <h3>Research</h3>
                <div class="row bg-white">
                <div class="card card-body col-xl-3 col-sm-6">
                    <i class="fe-search"></i>
                    <input name="position" id="name" type="text" class="form-control text-center" placeholder="Position">
                </div>
                <div class="card card-body col-xl-3 col-sm-6">
                    <i class="fe-search"></i>
                    <input name="veneu" id="name" type="text" class="form-control text-center" placeholder="Location">
                </div>
                <div class="card card-body col-xl-3 col-sm-6">
                    <i class="fe-search"></i>
                    <input name="company" id="name" type="text" class="form-control text-center" placeholder="Company">
                </div>
                <div class="card card-body col-xl-3 col-sm-6">
                    <button class="btn btn-custom">Search
                        <i class="fe-search"></i>
                    </button>
                </div>
            </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="get-in-touch">
                        <h3>Activity List</h3>
                    </div>
                    <ul class="nav nav-pills features-tab mb-5" id="pills-tab" role="tablist">
                        <li class="mb-2">
                            <a class="" id="pills-code-tab" data-bs-toggle="pill" href="#pills-code" role="tab">
                                <div class="services-box card-body bg-white">
                                    <div class="services-img float-start me-4">
                                        <img class="" src="{{ asset('landing') }}/images/tokped-img.png"
                                            alt="" height="56">
                                    </div>
                                    <div class="overflow-hidden">
                                        <h5>Web Developing Research at Tokopedia</h5>
                                        <p class="text">
                                            Tokopedia | Kota Jakarta Selatan <br>
                                            Rayinda Pramudya Soesanto S.T M.T <br>
                                            Durasi : 4 Bulan <br>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="" id="pills-code-tab" data-bs-toggle="pill" href="#pills-code" role="tab">
                                <div class="services-box card-body bg-white">
                                    <div class="services-img float-start me-4">
                                        <img class="" src="{{ asset('landing') }}/images/freeport-img.png"
                                            alt="" height="56">
                                    </div>
                                    <div class="overflow-hidden">
                                        <h5>Biodiversity Research  PT. Freeport Indonesia</h5>
                                        <p class="text">
                                            PT. Freeport Indonesia | Kota Jakarta Selatan <br>
                                            Rayinda Pramudya Soesanto S.T M.T <br>
                                            Durasi : 4 Bulan <br>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8" id="pills-tabContent">
                    <div class="custom-form bg-white">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="feature-icon mb-4">
                                <h3><img class="" src="{{ asset('landing') }}/images/tokped-img.png" alt=""
                                        height="80"></h3>
                            </div>
                            <h3>Web Developing Research</h3>
                            <h5>Tokopedia | Kota Jakarta Selatan</h5>
                            <br>
                            <h5>
                                Durasi Kegiatan<br>
                                16 Feb - 30 Jun 3s03s3
                            </h5><br>
                            <h3>Rincian Kegiatan</h3>
                            <h4>Research PT. Tokopedia</h4>
                            <p class="text">Perusahaan akan menerima mahasiswa/i dari latar belakang jurusan teknik
                                untuk menjalani kegiatan pengabdian masyarakat dalam beberapa kelompok yang masing-masing
                                akan mengerjakan proyek penelitian terspesialisasi di dalam PT. Freeport Indonesia.</p><br>
                            <h3>Kriteria Peserta</h3>
                            <p class="text">
                                1. Good looking<br />
                                2. Wangi<br />
                                3. Berpenampilan menarik<br />
                                4. Baik hati<br />
                            </p>
                            <div class="watch-video mt-5 text-center">
                                <a href="#" class="btn btn-custom me-4">Apply Now<i
                                        class="mdi mdi-chevron-right ms-1"></i></a>
                            </div>
                        </div>
                        <!-- end details -->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- contact end -->
@endsection
