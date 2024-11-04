@extends('layouts.frontend')
@section('title', 'RESERVATION DETAIL')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Detail Reservasi</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Reservasi</a></li>
                <li class="breadcrumb-item"><a href="#">Formulir Reservasi</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Detail Reservasi</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container py-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h2 class="fw-bold text-center">Detail Reservasi</h2>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">ID Reservasi: {{ $order->id }}</h5>
                        <span class="badge bg-primary">{{ $order->jenis_paket }}</span>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <p class="card-text"><strong>Nama Pelanggan:</strong> {{ $order->nama_depan }} {{ $order->nama_belakang }}</p>
                        </div>
                        <div class="col-12">
                            <p class="card-text"><strong>Email:</strong> {{ $order->email }}</p>
                        </div>
                        <div class="col-12">
                            <p class="card-text"><strong>Nomor Telepon:</strong> {{ $order->no_telp }}</p>
                        </div>
                        <div class="col-12">
                            <p class="card-text"><strong>Jumlah Tamu:</strong> {{ $order->tamu }}</p>
                        </div>
                        <div class="col-12">
                            <p class="card-text"><strong>Tanggal:</strong> {{ $order->tanggal }}</p>
                        </div>
                        <div class="col-12">
                            <p class="card-text"><strong>Waktu:</strong> {{ $order->waktu }}</p>
                        </div>
                    </div>
                    <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
