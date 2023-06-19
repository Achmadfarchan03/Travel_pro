@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        </div>


        @if ($errors->any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Location" value="{{ old('location') }}">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') }}">
                    </div>
                    <div class="form-group">
                        <label for="languages">Languages</label>
                        <input type="text" class="form-control" name="languages" placeholder="Languages" value="{{ old('languages') }}">
                    </div>
                    <div class="form-group">
                        <label for="foods">Foods</label>
                        <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ old('foods') }}">
                    </div>
                    <div class="form-group">
                        <label for="working_hours">Working Hours</label>
                        <input type="text" class="form-control" name="working_hours" placeholder="Working Hours" value="{{ old('working_hours') }}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="{{ old('category') }}" hidden>--Pilih Kategori--</option>
                            <option value="Rekreasi dan Hiburan">Rekreasi dan Hiburan</option>
                            <option value="Wisata Alam">Wisata Alam</option>
                            <option value="Sejarah dan Budaya">Sejarah dan Budaya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection