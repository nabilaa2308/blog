@extends('layouts.main')

@section('container')
    <div class="bg-info position-relative overlay-bottom py-5" style="margin-bottom: auto">
        <div class="text-center">
            <img src="image/Kategori.png" class="img-fluid" alt="Kategori">
        </div>
        <h1 class="text-white mt-4 mb-4 text-center">Kategori</h1>
    </div>
    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pb-4">
                            @foreach ($kategoris as $kategori)
                                <a class="courses-list-item position-relative d-block overflow-hidden mb-2"
                                    href="detail.html">
                                    <img class="img-fluid" src="..." alt="">
                                    <div class="courses-text">
                                        <h4 class="text-center text-white px-3">laravel</h4>
                                        <div class="border-top w-100 mt-3">
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection
