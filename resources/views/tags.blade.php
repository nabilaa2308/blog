@extends('layouts.main')

@section('title')
Ocoding Bog | {{ $title }}    
@endsection

@section('container')
<div class="bg-info position-relative overlay-bottom py-5" style="margin-bottom: auto">
    <div class="text-center">
        <img src="image/tag.png" class="img-fluid" alt="Tag">
   </div>
    <h1 class="text-white mt-4 mb-4 text-center">Tag</h1>
</div>

<h2 class="my-3">
    
 </h2>
 <!-- Breadcrumb:start -->
 <!-- Breadcrumb:end -->
 <div class="position-relative" style="margin-bottom: auto">
    <div class="text-center">
 <!-- List tag -->
    <div class="row">
       <div class="col">
        @forelse ($tag as $dttag)
            <!-- true -->
            <a href="{{ route('post-tag', ['slug'=> $dttag->slug]) }}"
            class="badge badge-info py-3 px-5">#{{ $dttag->name }}</a>
        @empty
            <!-- false -->
            <h3 class="text-center">
                No data
             </h3>
        @endforelse
       </div>
    </div>
 <!-- List tag -->
    </div>
 </div>
 
 <!-- pagination:start -->
 <div class="row">
    <div class="col">
 
    </div>
 </div>
 <!-- pagination:end -->
@endsection