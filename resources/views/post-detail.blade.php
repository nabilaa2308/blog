@extends('layouts.main')

@section('title')
    Ocoding Bog | {{ $title }}
@endsection

@section('container')
<br>
<!-- Title:start -->
<main class="container border py-2">
    <div class="col-md-8">
        <h2 class="mt-4 mb-3">
            {{ $posts->judul }}
        </h2>
    </div>
    <!-- Title:end -->

    <div class="row">
        <!-- Post Content Column:start -->
        <div class="col-lg-8">
            <div class="col-md-12">
                <!-- thumbnail:start -->
                <img class="img-thumbnail" style="200x700" src="{{ asset('storage/.' . $posts->thumbnail) }}">
                <!-- thumbnail:end -->
                <hr>
                <!-- Post Content:start -->
                <div class="col-md-12">
                    {!! $posts->content !!}
                </div>
                <!-- Post Content:end -->
                <hr>
            </div>
        </div>

        <!-- Sidebar Widgets Column:start -->
        <div class="col-md-4">
            <!-- Categories Widget -->
            <div class="card mb-5">
                <h5 class="card-header">
                    Kategori
                </h5>
                <div class="card-body">
                    <!-- category list:start -->

                    <a href="{{ route('post-kategori', ['slug' => $posts->dataKategori->slug]) }}"
                        class="badge badge-primary py-2 px-4">
                        {{ $posts->dataKategori->name }}
                    </a>

                    <!-- category list:end -->
                </div>
            </div>

            <!-- Side Widget tags:start -->
            <div class="card mb-4">
                <h5 class="card-header">
                    Tags
                </h5>
                <div class="card-body">
                    <!-- tag list:start -->
                    @foreach ($posts->dataTagPost as $tag)
                        <a href="{{ route('post-tag', ['slug' => $tag->dataTags->slug]) }}"
                            class="badge badge-info py-2 px-4 my-1">
                            #{{ $tag->dataTags->name }}
                        </a>
                    @endforeach
                    <!-- tag list:end -->
                </div>
            </div>
            <!-- Side Widget tags:start -->
            <div class="card mb-4">
                <h5 class="card-header">
                    Deskripsi
                </h5>
                <div class="card-body">
                    <!-- tag list:start -->
                    <p>
                        {{ $posts->deskripsi }}
                    </p>
                    <!-- tag list:end -->
                </div>
            </div>
        </div>
        <!-- Sidebar Widgets Column:end -->
    </div>
   </main>
@endsection
