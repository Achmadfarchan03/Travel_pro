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
                <li class="breadcrumb-item"><a href="home.html" style="color: white;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: white;">Pesanan Saya</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ps-lg-0">
            <div class="card card-details">
              <h1>Daftar Pesanan</h1>
              <div class="table-responsive">
                <table class="table table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Wisata</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                     @forelse ($items as $item)

                     <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->travel_package->title }}</td>
                      <td>Rp{{ $item->transaction_total }}</td>
                      <td>{{ $item->transaction_status }}</td>
                    </tr>
                     @empty
                     <tr>
                      <td colspan="4" class="text-center">
                          Anda Belum melakukan pesanan
                      </td>
                  </tr>
                     @endforelse

                        {{-- @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse --}}
                    </tbody>
                </table>
          </div>
        </div>
    </section>

</main>

@endsection


@push('addon-script')
@endpush
