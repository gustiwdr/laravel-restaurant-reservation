@extends('layouts.frontend')
@section('title', 'MENU')

@section('content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Menu Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Our Dishes</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Menu</small>
                                <h6 class="mt-n1 mb-0">Puas</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Minuman</small>
                                <h6 class="mt-n1 mb-0">Segar</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    @foreach($tabs as $index => $tab)
                        <div id="tab-{{ $index+1 }}" class="tab-pane fade show p-0 {{ $index === 0 ? 'active' : '' }}">
                            <div class="row g-4">
                                @php
                                    $icons = [
                                        'storage/5/66463973111bd_IMG_20240510_183329.jpg',
                                        'storage/6/66463b358c820_2_20240510_191154_000123jpg.jpg',
                                        'storage/7/66464b36d7cdb_es-teh-manis.jpg',
                                        'storage/8/66464b70cba11_es-jeruk.jpeg',
                                    ];
                                @endphp
                                @foreach($tab['products'] as $pIndex => $p)
                                    @php
                                        $iconIndex = $pIndex;
                                        $delay = ($iconIndex + 1) * 0.1; // Menghitung waktu tunda berdasarkan indeks produk
                                    @endphp
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="{{ $delay }}s">
                                        <div class="service-item rounded pt-3" style="height: 440px; display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                                            <div class="p-4" style="flex: 1;">
                                                <img src="{{ asset($icons[$iconIndex]) }}" class="img-fluid rounded" alt="Product Image" style="width: 200px; height: 200px">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 style="margin: 10px 0;"><br>{{ $p->name }}</h5>
                                                    <p>{{ $p->description }}</p>
                                                </div>
                                            </div>
                                            <div style="position: absolute; bottom: 0; right: 10px; padding: 5px; color: #FEA116; border-radius: 5px; font-weight: bold; font-size: 22px;"> 
                                                {{ $p->price }}
                                            </div>                        
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div> --}}

    <div class="container py-5">
        <div class="text-center">
            <h2 class="fw-bold">Food Menu</h2>
            <p class="text-muted">Explore our delicious dishes</p>
        </div>
        <div class="row mt-4">
            @php
                $icons = [
                    'storage/5/66463973111bd_IMG_20240510_183329.jpg',
                    'storage/6/66463b358c820_2_20240510_191154_000123jpg.jpg',
                    'storage/7/66464b36d7cdb_es-teh-manis.jpg',
                    'storage/8/66464b70cba11_es-jeruk.jpeg',
                ];
            @endphp
            @foreach($tabs as $tab)
                @foreach($tab['products'] as $pIndex => $p)
                    <div class="col-lg-6">
                        <div class="card mb-4 shadow-sm" style="min-height: 400px;">
                            <img src="{{ asset($icons[$pIndex % count($icons)]) }}" class="card-img-top" alt="{{ $p->name }}" style="width: 100%; height: auto; object-fit: cover; max-height: 400px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->name }}</h5>
                                <p class="card-text">{{ $p->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    {{-- <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </div> --}}
                                    <small class="text-muted">{{ $p -> price }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    

<!-- Menu End -->
@endsection