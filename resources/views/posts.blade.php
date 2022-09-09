@extends('layouts.main')

    @section('container')
    <h2 class="mb-5"></h2>
    <div class="bg-info position-relative overlay-bottom py-5" style="margin-bottom: auto">
        <div class="text-center">
            <img src="image/tag.png" class="img-fluid" alt="Tag">
       </div>
        <h1 class="text-white mt-4 mb-4 text-center">Post</h1>
    </div>
    
@if ($posts->count())
<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $posts->judul }}</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
    
@else
  <p class="text-center fs-4">Belum Ada Post</p>
@endif

    @foreach ($posts as $post)
    <article class="mb-5">
        <h1>
            <a href="/posts/{{ $post->id }}">{{ $post->judul }}</a>
        </h1>


        <a href="/kategori/{{ $post->kategori->slug }}"class="text-decoration-none">{{ $post->kategori->name }}</a>

        <p>{{ $post->deskripsi }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Selengkapnya..</a>
    </article>
    @endforeach

@endsection

