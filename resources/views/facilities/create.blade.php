@extends('layouts.app-master')

@section('content')
        <div class="container">
            <div class="row">


                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="text-center text-primary"><b>Add New Facility</b> </h3>
				    <div class="form-group">
                        <form action="create" method="post" enctype="multipart/form-data">
                         @csrf
        				 <input type="text" name="name" class="form-control m-2" placeholder="name">
                         <textarea name="description" class="form-control m-2" placeholder="description"></textarea>
                         <input type="number" name="price" class="form-control m-2" placeholder="price">
                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>
@endsection
