@extends('layouts.app-master')

@section('content')
        <div class="container">

            <h3 class="text-center text-dark"><b>Facilities</b> </h3>
            <a href="facilities/create" class="btn btn-outline-danger">Add New Facility</a>

            <table class="table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach ($facilities as $facility)
                 <tr>
                       <th scope="row">{{ $facility->id }}</th>
                       <td>{{ $facility->name }}</td>
                       <td>{{ $facility->description }}</td>
                       <td>{{ $facility->price }}</td>
                       <td><a href="facilities/{{ $facility->id }}/edit" class="btn btn-info">Update</a></td>
                       <td>
                           <form action="facilities/{{ $facility->id }}/delete" method="post">
                            <button class="btn btn-warning" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>

                   </tr>
                   @endforeach

                </tbody>
              </table>
        </div>
@endsection
