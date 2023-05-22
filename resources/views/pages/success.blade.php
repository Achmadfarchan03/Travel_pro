@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
<main>
    <section class="success-container mt-5 text-center">
        <img src="{{ url('frontend/images/ic_success.png') }}" alt="Checkout Success">
        <h2>Yay! Success</h2>
        <p>We’have sent you email for tripinstruction <br>
        please read it as well
        </p>
        <button class="btn btn-home-page px-4 mt-2">
        <a href="{{ url('/') }}">Home Page</a>
        </button>
</section>
</main>
@endsection