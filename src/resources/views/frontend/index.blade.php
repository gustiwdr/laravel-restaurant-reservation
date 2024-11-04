@extends('layouts.frontend')
@section('title', 'HOME')

@section('content')
<body>
    <div>
        <div class="container-xxl py-5 bg-dark hero-header mb-1">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Nikmati Makanan<br>Lezat Kami</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Jelajahi keajaiban kuliner bersama Master Chef kami! Dengan pengalaman bertahun-tahun di dapur dan keahlian yang tak tertandingi, Master Chef kami menciptakan kreasi-kreasi kuliner yang memukau lidah Anda.</p>
                        <a href="/booking" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Reservasi Meja</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="frontend/img/ayam-hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl bg-white p-0">

        <div style="background-color: azure">
            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-4">
                        @php
                            $icons = [
                                'storage/9/664889e50fab0_icons8-chef-50.png',
                                'storage/10/66488a0acdea0_icons8-spoon-and-fork-50.png',
                                'storage/13/6696733fcaafe_icons8-money-50.png',
                                'storage/12/66488a2acdf9d_icons8-headset-50.png'
                            ];
                        @endphp
                        @foreach ($dataservice as $index => $ds)
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.{{ ($index + 1) * 1 }}s">
                                <div class="service-item rounded pt-3" style="height: 400px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="p-4" style="flex: 1;">
                                        <img src="{{ asset($icons[$index]) }}" alt="Service Icon {{ $index + 1 }}" style="max-width: 100%; height: auto;">
                                        <h5 style="margin: 10px 0;">{{$ds->name}}</h5>
                                        <p>{{$ds->detail}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Service End -->

            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="frontend/img/about4.jpg">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="frontend/img/about1.jpg" style="margin-top: 15%;">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="frontend/img/maxresdefault.jpg">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="frontend/img/about2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
                            <h1 class="mb-4">Selamat Datang di <br> Waroeng Ayam Bago <i class="fa fa-utensils text-primary me-2"></i></h1>
                            @foreach ($dataabout as $da)
                            <p>{!! $da->description !!}</p>
                            <h5>Visi:</h5>
                            <p class="mb-4">{!! $da->vision !!}</p>
                            <h5>Misi:</h5>
                            <p class="mb-4">{!! $da->mission !!}</p>
                            <div class="row g-4 mb-4">
                            @endforeach
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5</h1>
                                        <div class="ps-4">
                                            <p class="mb-0">Tahun</p>
                                            <h6 class="text-uppercase mb-0">Pengalaman</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">6</h1>
                                        <div class="ps-4">
                                            <p class="mb-0">Master Chefs</p>
                                            <h6 class="text-uppercase mb-0">Populer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Team Start -->
        <div class="container-xx1 pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Anggota Tim</h5>
                    <h1 class="mb-5">Master Chefs Kami</h1>
                </div>
                <div class="row g-3" style="margin-left: 40px">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden" style="max-width: 300px">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Bryan Immanuel</h5>
                            <small>Head Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden" style="max-width: 300px">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="frontend/img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Gordon Ramsay</h5>
                            <small>Chef de Cuisine</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden" style="max-width: 300px">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="frontend/img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Juna Rorimpandey</h5>
                            <small>Sous Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden" style="max-width: 300px">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="frontend/img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Arnold Poernomo</h5>
                            <small>Announcer</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden" style="max-width: 300px">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="frontend/img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Bobon Santoso</h5>
                            <small>Station Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden" style="max-width: 300px">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="frontend/img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Tyler Florence</h5>
                            <small>Saute Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
            <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Apa Kata Pelanggan Kami?</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, aliquam provident magni quisquam temporibus reprehenderit? Voluptas quam rem quisquam consectetur. Incidunt facere, asperiores officia ipsa ullam nostrum voluptate earum laboriosam.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="frontend/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="frontend/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="frontend/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="frontend/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection