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
              <h1>{{ $item->title }}</h1>
              <p> {{ $item->location }} </p>

              @if ($item->galleries->count())
                <div class="gallery">
                  <div class="xzoom-container">
                    <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom" id="xzoom-default"
                      xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                  </div>

                  <div class="xzoom-thumbs">
                    @foreach ($item->galleries as $gallery)
                    <a href="{{ Storage::url($gallery->image) }}">
                      <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery" width="128"
                        xpreview="{{ Storage::url($gallery->image) }}">
                    </a>
                    @endforeach
                  </div>

                  <h2>Tentang Wisata</h2>
                  <p>
                    {!! $item->about !!}
                  </p>

                  <div class="features row">
                    <div class="col-md-4">
                      <div class="description">
                        <img src="{{ url('frontend/images/ic_ticket.png') }}" alt="Event" class="features-image">
                        <div class="description">
                          <h3>Featured Event</h3>
                          <p>{{ $item->featured_event}} </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="description">
                        <img src="{{ url('frontend/images/ic_chat.png') }}" alt="Language" class="features-image">
                        <div class="description">
                          <h3>Language</h3>
                          <p> {{ $item->languages}} </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="description">
                        <img src="{{ url('frontend/images/ic_burger.png') }}" alt="Foods" class="features-image">
                        <div class="description">
                          <h3>Foods</h3>
                          <p> {{ $item->foods}} </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endif

            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img src="{{url('frontend/images/member 1.png')}}" class="member-image" alt="Member 1">
                <img src="{{url('frontend/images/member 2.png')}}" class="member-image" alt="Member 2">
                <img src="{{url('frontend/images/member 3.png')}}" class="member-image" alt="Member 3">
                <img src="{{url('frontend/images/member 4.png')}}" class="member-image" alt="Member 4">
                <img src="{{url('frontend/images/member 5.png')}}" class="member-image" alt="Member 5">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Jam Kerja</th>
                  <td width="50%" class="text-right"> {{ $item->working_hours }} </td>
                </tr>
                <tr>
                  <th width="50%">Category of Trip</th>
                  <td width="50%" class="text-right">
                    {{ $item->category}}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Charge</th>
                  <td width="50%" class="text-right">
                    Rp{{ $item->price }} / orang
                  </td>
                </tr>
              </table>
            </div>
            <div class="join-container d-grid">
              @auth
              <form action=" {{ route('checkout_process', $item->id) }} " method="post">
                @csrf
                <button class="btn btn-block btn-join-now px-5" type="submit">
                  Join Now
                </button>
              </form>
              @endauth

              @guest
                  <a href="{{ route('login') }}" class="btn btn-block btn-join-now">
                    Login or Register to join
                  </a>
              @endguest
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