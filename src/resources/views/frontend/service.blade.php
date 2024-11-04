@extends('layouts.frontend')
@section('title', 'SERVICES')

@section('content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Layanan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Layanan</li>
                </ol>
            </nav>
        </div>
    </div>

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
@endsection