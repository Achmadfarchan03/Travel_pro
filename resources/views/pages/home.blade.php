@extends('layouts.app')

@section('title')
Travelnesia
@endsection

@section('content')

<!-- Header -->
<header class="text-center">
    <h1>
      Explore Keindahan Indonesia
      <br>
    </h1>
    <p class="mt-3">
        Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata
        <br>
        Pemerintah Indonesia
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">
      Lihat Selengkapnya
    </a>
</header>
<main>
    {{-- <!-- Stats -->
    <div class="container">
        <section class="section-stats row justify-content-center">
        <div class="col-3 col-md-2 stats-detail">
            <h2>20K+</h2>
            <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>12</h2>
            <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>3K</h2>
            <p>Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>72</h2>
            <p>Partners</p>
        </div>
        </section>
    </div> --}}

    <!-- Wisata Popular -->

    <section class="section-popular" id="popular">
    <div class="container">
        <div class="row">
        <div class="col text-center section-popular-heading">
            <h2>
            Wisata Popular
            </h2>
            <p class="mt-3">
            Something that you never try
            <br>
            before in Madura Island
            </p>
        </div>
        </div>
    </div>
    </section>

    <section class="section-popular-content" id="popularContent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
            @foreach ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                <div class="travel-country">Indonesia</div>
                <div class="travel-location">{{ $item->title }}</div>
                <div class="travel-button mt-auto">
                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                    Lihat Detail
                    </a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>

    {{-- <section class="section-networks mb-5" id="networks">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
                Companies are trusted us
                <br>
                more than just a trip
            </p>
            </div>
            <div class="col-sm-6 col-md-2 me-5">
            <img src="frontend/images/logo-gojek.png" alt="ANA Company">
            </div>
            <div class="col-sm-6 col-md-2 me-5">
            <img src="frontend/images/logo-tiketcom.png" alt="Disney">
            </div>
            <div class="col-sm-6 col-md-2 me-5">
            <img src="frontend/images/logo-pojur.png" alt="S Company">
            </div>
            {{-- <div class="col-sm-6 col-md-2">
            <img src="frontend/images/networks-4.png" alt="VISA">
            </div> --}}
        </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
            <div class="col text-center">
                <h2>Cerita Perjalanan Kami</h2>
                <p>
                Momen Liburan Memberikan Mereka
                <br>
                Pengalaman Terbaik.
                </p>
            </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                    {{-- <img src="" class="mb-3" alt="Testi 1"> --}}
                    <h3 class="mb-4">Ahmad</h3>
                    <p class="testimonial">
                    “ Lorem Ipsum is simply dummy text of the printing and typesetting industry. ”
                    </p>
                </div>
                <hr>
                <p class="trip-to mt-2">
                    Perjalanan ke Ubud Bali, Indonesia
                </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                    {{-- <img src="" class="mb-3" alt="Testi 1"> --}}
                    <h2 class="mb-4">Hasan</h2>
                    <p class="testimonial">
                    “ Lorem Ipsum is simply dummy text of the printing and typesetting industry.”
                    </p>
                </div>
                <hr>
                <p class="trip-to mt-2">
                    Perjalanan ke Ubud Bali, Indonesia
                </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                    {{-- <img src="" class="mb-3" alt="Testi 1"> --}}
                    <h3 class="mb-4">Mutawakkil</h3>
                    <p class="testimonial">
                    “  Lorem Ipsum is simply dummy text of the printing and typesetting industry.”
                    </p>
                </div>
                <hr>
                <p class="trip-to mt-2">
                    Perjalanan ke Ubud Bali, Indonesia
                </p>
                </div>
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 me-4">Bantuan</a>
                    <a href="{{ route('register')}}" class="btn btn-get-started px-4">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
