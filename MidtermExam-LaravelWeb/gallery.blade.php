@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4" style="font-weight: 600;">My Photo Gallery</h1>
    <p class="text-center mb-4">Here are 15 of my favorite photos</p>

    <div class="row g-1"> 
        @foreach($photos as $photo)
        <div class="col-6 col-sm-4 col-md-2-4 p-1"> 
            <div class="gallery-card">
                <img src="{{ asset('images/' . $photo) }}" alt="Photo {{ $loop->iteration }}" class="img-fluid">
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>

.gallery-card {
    width: 100%;
    padding-top: 100%;
    position: relative;
    overflow: hidden;
}

.gallery-card img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

@media (min-width: 992px) {
    .col-md-2-4 {
        flex: 0 0 20%;
        max-width: 20%;
    }
}
</style>
@endsection
