@extends('layouts.app-master')

@section('content')
<div class="container" style="margin-top: 50px;">
            <div class="row">


               <div class="col-lg-3">
                     @if (count($facility->images)>0)
                     <p>Images:</p>
                     @foreach ($facility->images as $img)
                     <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                     @endforeach
                     @endif

                </div> 


                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Edit Facility</b> </h3>
				    <div class="form-group">
                        <form action="update" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("patch")
                         <input type="text" name="name" class="form-control m-2" placeholder="name" value="{{ $facility->name }}">
                         <textarea name="description" cols="20" rows="4" class="form-control m-2" placeholder="description">{{ $facility->description }}</textarea>
        				 <input type="number" name="price" class="form-control m-2" placeholder="price" value="{{ $facility->price }}">

                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>
@endsection
