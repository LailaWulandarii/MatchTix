@extends('user.main')
@section('title', 'Beranda')
@section('content')
    <!-- Recent events Section -->
    <section class="event section">

        <!-- Section Title -->
        <div class="container section-title pb-0" data-aos="fade-up">
            <p>Jelajahi Event</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-5">
                <div class="col-xl-4 col-md-6">
                    <div class="event-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
                        <div class="event-img position-relative overflow-hidden">
                            <img src="{{ asset('img/write.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="event-content d-flex flex-column">
                            <h3 class="event-title">Nama Event</h3>
                            <div class="d-flex align-items-center">
                                <i class='bx bx-calendar-event'></i><span class="ps-2">tanggal</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class='bx bx-time'></i> <span class="ps-2">jam awal</span>
                                </div>
                                <span class="px-3 text-black-50">-</span>
                                <div class="d-flex align-items-center">
                                    <span class="ps-2">jam akhir</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class='bx bx-map'></i> <span class="ps-2">Tempat</span>
                            </div>
                            <button type="button" class="btn btn-primary rounded-pill mt-3">Selengkapnya</button>
                        </div>
                    </div>
                </div><!-- End event item -->
            </div>
        </div>
    </section>
@endsection
