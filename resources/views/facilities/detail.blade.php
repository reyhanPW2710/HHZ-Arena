@extends('layouts.app-master')

@section('content')
<div class="container">
<h3 class="text-center text-dark mb-5"><b>{{$facility->name}}</b> </h3>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach ($facility->images as $img)
    <div class="carousel-item{{  $img == $facility->images()->first() ? ' active' : '' }}">
      <img src="{{ url('images/' . $img->image) }}" class="mx-auto d-block w-80" alt="{{ $facility->name }}">
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<p class="lead mt-5">{{$facility->description}}</p>
<a href="{{ route('requests.create') . '?id=' . $facility->id }}" class="btn btn-danger mb-5">Book Now</a>
</div>
@endsection
