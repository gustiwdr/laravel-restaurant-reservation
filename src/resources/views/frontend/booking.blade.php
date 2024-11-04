@extends('layouts.frontend')
@section('title', 'RESERVATION')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Reservasi</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Reservasi</li>
            </ol>
        </nav>
    </div>
</div>
    <!-- Reservation Start -->
<section class="section-card">
    <div class="card card-1">
        <img src="frontend/img/about4.jpg" alt="" class="card__img">
        <div class="card__details">
            <p style="text-align: center; margin-top: 15px; font-size: 20px"><b>Paket Booking <br>"Baru Jadian"</b></p>
            <ul>
                <li>Tersedia kursi untuk 1-2 orang</li>
                <li>Paket hanya berlaku untuk makan di tempat</li>
                <li>Harga sudah termasuk pajak dan layanan</li>
                <li>Pembelian paket hanya berlaku untuk jumlah pelanggan yang sudah ditetapkan</li>
            </ul>
        </div>
        <a href="#popup" class="btn__book">Reservasi</a>
    </div>
    <div class="card card-2">
        <img src="frontend/img/about3.jpg" alt="" class="card__img">
        <div class="card__details">
            <p style="text-align: center; margin-top: 15px; font-size: 20px"><b>Paket Booking <br>"Keluarga Cemara"</b></p>
            <ul>
                <li>Tersedia kursi untuk 3-6 orang</li>
                <li>Paket hanya berlaku untuk makan di tempat</li>
                <li>Harga sudah termasuk pajak dan layanan</li>
                <li>Pembelian paket hanya berlaku untuk jumlah pelanggan yang sudah ditetapkan</li>
            </ul>
        </div>
        <a href="#popup" class="btn__book">Reservasi</a>
    </div>
    <div class="card card-3">
        <img src="frontend/img/about2.jpg" alt="" class="card__img">
        <div class="card__details">
            <p style="text-align: center; margin-top: 15px; font-size: 20px"><b>Paket Booking <br>"Satu Keturunan"</b></p>
            <ul>
                <li>Tersedia kursi untuk 7-10 orang</li>
                <li>Paket hanya berlaku untuk makan di tempat</li>
                <li>Harga sudah termasuk pajak dan layanan</li>
                <li>Pembelian paket hanya berlaku untuk jumlah pelanggan yang sudah ditetapkan</li>
            </ul>
        </div>
        <a href="#popup" class="btn__book">Reservasi</a>
    </div>

    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__img">
                <img src="" alt="" style="max-width: 100%; height: auto;">
                <img src="" alt="" style="max-width: 100%; height: auto;">
                <img src="" alt="" style="max-width: 100%; height: auto;">
                <a href="#section-card" class="popup__close">&times;</a>
            </div>
            <div class="popup__header">
                <h1>Mulai Reservasi Sekarang!</h1>
                <h2>Harap baca ketentuan di bawah ini sebelum melakukan reservasi</h2>
            </div>
            <div class="popup__text">
                <p>Reservasi meja di restoran kami harus dilakukan maksimal 1 jam sebelum kedatangan dan tidak memerlukan pembayaran uang muka. Anda dapat memesan meja secara online dengan mengisi formulir reservasi.</p>
                <p>Pemesanan makanan dan pembayaran dilakukan di restoran saat kedatangan. Batalkan reservasi dengan konfirmasi maksimal 30 menit sebelum waktu reservasi. Kami berkomitmen memberikan pengalaman bersantap yang nyaman. Terima kasih telah memilih restoran kami!</p>
            </div>
            <a href="/form" class="btn__book popup__btn">Reservasi Sekarang!</a>
        </div>
    </div>
</section>
@endsection