@extends('layouts.frontend')
@section('title', 'BOOKING')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Formulir Reservasi</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/booking">Reservasi</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Formulir Reservasi</li>
            </ol>
        </nav>
    </div>
</div>

<!-- component -->
<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 120vh;">
    <div class="card p-4 shadow" style="max-width: 600px; width: 100%;">
        <h1 class="card-title text-xl font-weight-bold">Formulir Reservasi</h1>
        <p class="text-xl">Harap isi formulir di bawah ini dengan baik dan benar.</p>
        <form action="{{ route('bookings.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_depan" class="form-label">Nama Depan</label>
                        <input type="text" name="nama_depan" id="nama_depan" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                        <input type="text" name="nama_belakang" id="nama_belakang" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input id="email" type="email" name="email" autocomplete="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input id="no_telp" type="text" name="no_telp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tamu" class="form-label">Jumlah Tamu</label>
                <input id="tamu" type="number" name="tamu" class="form-control" required>
            </div>            

            <div class="row">
                <div class="mb-3">
                    <label for="jenis_paket" class="form-label">Pilihan Paket Booking</label>
                    <select name="jenis_paket" id="jenis_paket" class="form-select" required>
                        <option value="">Pilih Paket</option>
                        <option value="Paket Booking Baru Jadian">Paket Booking "Baru Jadian"</option>
                        <option value="Paket Booking Keluarga Cemara">Paket Booking "Keluarga Cemara"</option>
                        <option value="Paket Booking Satu Keturunan">Paket Booking "Satu Keturunan"</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <select name="waktu" id="waktu" class="form-control">
                            <!-- Generate options from 09:00 to 21:00 with 1-hour intervals -->
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                        </select>
                    </div>
                </div>                                
            </div>
            <button type="submit" class="btn btn-dark btn-block fw-bold">
                Submit
            </button>
        </form>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil elemen input tanggal dan waktu
        const dateInput = document.getElementById('tanggal');
        const timeInput = document.getElementById('waktu');

        // Fungsi untuk mengatur nilai min pada input tanggal dan waktu
        function setMinDateTime() {
            // Dapatkan tanggal dan waktu saat ini
            const now = new Date();
            const currentDate = now.toISOString().split('T')[0]; // Format tanggal YYYY-MM-DD
            const currentHours = now.getHours(); // Dapatkan jam saat ini

            // Tetapkan atribut min pada input tanggal
            dateInput.setAttribute('min', currentDate);
            
            // Jika tanggal yang dipilih sama dengan tanggal saat ini
            if (dateInput.value === currentDate) {
                // Set minimum waktu ke jam saat ini + 1 jam
                const minTime = `${(currentHours + 1).toString().padStart(2, '0')}:00`;
                timeInput.setAttribute('min', minTime);
            } else {
                // Jika tanggal yang dipilih lebih besar dari tanggal saat ini, waktu minimum bisa mulai dari 09:00
                timeInput.setAttribute('min', '09:00');
            }
        }

        // Panggil fungsi setMinDateTime() untuk pertama kali
        setMinDateTime();

        // Tambahkan event listener untuk memantau perubahan pada input tanggal dan waktu
        dateInput.addEventListener('change', setMinDateTime);
    });

</script>


@endsection