@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')

<main>
    <section class="section-detail-header"></section>
    <section class="section-detail-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 ps-lg-0">
            <div class="card card-details">
              <h1>Nusa Penida</h1>
              <p>Republic of Indonesia Raya</p>

              <div class="gallery">
                <div class="xzoom-container">
                  <img src="frontend/images/details_big1.jpg" class="xzoom" id="xzoom-default"
                    xoriginal="frontend/images/details_big1.jpg">
                </div>

                <div class="xzoom-thumbs">
                  <a href="frontend/images/details_big1.jpg">
                    <img src="frontend/images/details_big1.jpg" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_big1.jpg">
                  </a>

                  <a href="frontend/images/details_big2.jpg">
                    <img src="frontend/images/details_big2.jpg" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_big2.jpg">
                  </a>

                  <a href="frontend/images/details_big3.jpg">
                    <img src="frontend/images/details_big3.jpg" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_big3.jpg">
                  </a>

                  <a href="frontend/images/details_big4.jpg">
                    <img src="frontend/images/details_big4.jpg" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_big4.jpg">
                  </a>
                </div>

                <h2>Tentang Wisata</h2>
                <p>
                  Nusa Penida is an island South-East of the Indonesian island Bali. Nusa Penida is only a thirty minute
                  boat ride from Bali. The island’s landscape is beautiful, the diving spots are world class and its
                  people are very welcoming. Until recently, the island
                  was still relatively unknown by by tourists.
                </p>
                <p>Nusa Penida is an island South-East of the Indonesian island Bali. Nusa Penida is only a thirty
                  minute boat ride from Bali. The island’s landscape is beautiful, the diving spots are world class and
                  its people are very welcoming. Until recently, the island
                  was still relatively unknown by by tourists.</p>

                <div class="features row">
                  <div class="col-md-4">
                    <div class="description">
                      <img src="frontend/images/ic_ticket.png" alt="Event" class="features-image">
                      <div class="description">
                        <h3>Featured Event</h3>
                        <p>Tari Kecak</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="description">
                      <img src="frontend/images/ic_chat.png" alt="Language" class="features-image">
                      <div class="description">
                        <h3>Language</h3>
                        <p>B. Indonesia</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="description">
                      <img src="frontend/images/ic_burger.png" alt="Foods" class="features-image">
                      <div class="description">
                        <h3>Foods</h3>
                        <p>Local Foods</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img src="frontend/images/member 1.png" class="member-image" alt="Member 1">
                <img src="frontend/images/member 2.png" class="member-image" alt="Member 2">
                <img src="frontend/images/member 3.png" class="member-image" alt="Member 3">
                <img src="frontend/images/member 4.png" class="member-image" alt="Member 4">
                <img src="frontend/images/member 5.png" class="member-image" alt="Member 5">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">22 Aug, 2020</td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">4D 3N</td>
                </tr>
                <tr>
                  <th width="50%">Type of Trip</th>
                  <td width="50%" class="text-right">Open Public</td>
                </tr>
                <tr>
                  <th width="50%">Charge</th>
                  <td width="50%" class="text-right">$80,00/person</td>
                </tr>
              </table>
            </div>
            <div class=" join-container d-grid">
              <button class="btn btn-join-now" type="button">
                Join Now
              </button>
            </div>
          </div>
        </div>
    </section>

</main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: '400',
      title: false,
      tint: '#333',
      zoomWidth: 250,
      zoomHeight: 250,
      Xoffset: 10
    });
  });
</script>
@endpush