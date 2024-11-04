<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-1 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="ff-secondary text-start text-primary fw-normal mb-4">Restoran</h4>
                <a class="btn btn-link" href="/about">Visi & Misi</a>
                <a class="btn btn-link" href="/contact">Kontak Kami</a>
                <a class="btn btn-link" href="/booking">Reservasi</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="ff-secondary text-start text-primary fw-normal mb-4">Kontak Kami</h4>
                @foreach ($datafooter as $df)
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$df -> alamat}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$df -> phone}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$df -> email}}</p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="ff-secondary text-start text-primary fw-normal mb-4">Jam Buka</h4>
                <h5 class="text-light fw-normal">Senin - Minggu</h5>
                <p>09.00 - 23.00</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                <p>Dapatkan berita ter-update mengenai Waroeng Ayam Bago.</p>
                <div class="position-static mx-auto" style="max-width: 300px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-static top-0 end-0 mt-2 me-2">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Ayam Bago Restaurant</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="/">Beranda</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>