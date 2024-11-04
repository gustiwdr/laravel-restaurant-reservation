@extends('layouts.frontend')
@section('title', 'CONTACT US')

@section('content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Kontak Kami</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>   
                        <li class="breadcrumb-item text-white active" aria-current="page">Kontak Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Kontak Kami</h5>
                <h1 class="mb-5">Hubungi Kami Untuk Pertanyaan Apa Pun</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Reservasi</h5>
                            <p><i class="fa fa-phone-alt me-3"></i>081122334455</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Umum</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>ayambago@gmail.com</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="section-title ff-secondary fw-normal text-start text-primary">Teknikal</h5>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>ayambago@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15960.277629961342!2d106.82214127045619!3d-6.214762418158637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7d9d54f7b4580d%3A0x9a6a6251d38fc7c7!2sCikupa%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1648307416534!5m2!1sen!2sus"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection