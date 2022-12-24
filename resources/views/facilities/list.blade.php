@extends('layouts.app-master')

@section('content')
        <div class="container">

            <h1 class="text-center text-dark"><b>Facilities</b> </h1>
            <div>

                @foreach ($facilities as $facility)

                <div class="card col-md-5" style="float: left; margin:30px;">
                    <img src="{{ url('images/' . $facility->images()->first()->image) }}" class="card-img-top" height="300px" alt="{{ $facility->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $facility->name }}</h5>
                        <a href="{{ route('facilities.detail', ['facility' => $facility->id]) }}" class="btn btn-danger">View more</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
