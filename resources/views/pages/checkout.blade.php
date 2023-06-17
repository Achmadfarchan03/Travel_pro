@extends('layouts.checkout')
@section('title', 'Checkout')

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
                <li class="breadcrumb-item"><a href="details.html">Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 ps-lg-0">
            <div class="card card-details">
              @if ($errors->any()) 
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <h1>Who's Going?</h1>
              <p>Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }} </p>

              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nationality</td>
                      <td>Visa</td>
                      <td>Passport</td>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($item->details as $detail)
                      <tr>
                        <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" alt="Customer" height="60" class="rounded-circle"></td>
                        <td class="align-middle">
                          {{ $detail->username }}
                        </td>
                        <td class="align-middle">
                          {{ $detail->nationality }}
                        </td>
                        <td class="align-middle">
                          {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                        </td>
                        <td class="align-middle">
                          {{ \Carbon\Carbon::createFromDate($detail->doe_passport) >
                          \Carbon\Carbon::now() ? 'Active' : 'Inactive'}}
                        </td>
                        <td class="align-middle">
                          <a href="{{ route('checkout-remove', $detail->id) }}">
                            <img src="{{ url('frontend/images/close_ic.png') }}" alt="close_button">
                          </a>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center">
                            No Visitor
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2 class="fw-bold">Add Member</h2>
                <form class="form-inline" method="post" action="{{ route('checkout-create', $item->id) }}">
                  @method('POST')
                  @csrf
                  <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                      <label for="username" class="sr-only">Name</label>
                      <input
                      type="text"
                      class="form-control mb-2 me-sm-2"
                      name="username"
                      id="username"
                      placeholder="Username"
                      />
                    </div>
                    <div class="col-12 col-md-3">
                      <label for="nationality" class="sr-only">Nationality</label>
                      <input
                      type="text"
                      class="form-control mb-2 me-sm-2"
                      name="nationality"
                      id="nationality"
                      style="width: 50px"
                      placeholder="Nationality"
                      />
                    </div>
                    <div class="col-12 col-md-3">
                      <label for="is_visa" class="sr-only">VISA</label>
                      <select 
                      name="is_visa" 
                      id="is_visa" 
                      class="form-select mb-2 me-sm-2">
                        <option value="" selected>VISA</option>
                        <option value="1">30 Days</option>
                        <option value="0">N/A</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-3">
                      <label for="doe_passport" class="sr-only mb-1">DOE Passport</label>
                      <div class="input-group mb-2 me-sm-2">
                        <input 
                        type="text" 
                        class="form-control datepicker" 
                        id="doe_passport" 
                        name="doe_passport"
                        placeholder="DOE Passport">
                      </div>
                    </div>
                    <div class="col-12 col-md-3">
                      <button type="submit" class="btn btn-add-now mt-2 px-4">
                        Add Now
                      </button>
                    </div>
                  </div>
                </form>
                <h3 class="mt-4 mb-0 fw-bold">Note</h3>
                <p class="disclaimer mb-0 mt-2">
                  You are only able to invite member that has registered in Nomade.com
                </p>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout Information</h2>
              <table class="trip-information mt-3">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">
                    {{ $item->details->count() }} person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Additional VISA</th>
                  <td width="50%" class="text-right">
                    ${{ $item->additional_visa }},00
                  </td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">
                    ${{ $item->travel_package->price }},00 / Person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total Price</th>
                  <td width="50%" class="text-right">
                    ${{ $item->transaction_total }},00
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total Pay(+Unique Code)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">$ {{ $item->transaction_total }},</span>
                    <span class="text-orange">{{ mt_rand(0,99) }}</span></td>
                </tr>
              </table>
              <hr>
              <h2>Payments Instructions</h2>
              <p class="payment-instruction">Please complete the payments before you
                continue the trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="frontend/images/logo atm.png" alt="Logo ATM" class="bank-image">
                  <div class="description">
                    <h3>PT Nomade Indonesia</h3>
                    <p>
                      Bank Central Asia
                      <br>
                      0977 6809 1122
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="frontend/images/logo atm.png" alt="Logo ATM" class="bank-image">
                  <div class="description">
                    <h3>PT Nomade Indonesia</h3>
                    <p>
                      Bank HSBS
                      <br>
                      9990 1829 0099
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class=" join-container d-grid">
              <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-join-now" type="button">
                I Have Made Payment
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">
                Cancel Booking
              </a>
            </div>
          </div>
        </div>
    </section>

</main>

@endsection


@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
  <script>
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      uilibrary: 'bootstrap4',
      icons: {
        rightIcon: '<img src="{{ url('frontend/images/ic_calendar.png') }}">'
      }
    })
  </script>
@endpush