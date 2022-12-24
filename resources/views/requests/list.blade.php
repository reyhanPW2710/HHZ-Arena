@extends('layouts.app-master')

@section('content')
        <div class="container">

            <h3 class="text-center text-dark"><b>Requests</b> </h3>
            <a href="create" class="btn btn-outline-success">Add New Request</a>

            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Facility</th>
                    <th>Date</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach ($requests as $request)
                 <tr>
                       <th scope="row">{{ $request->id }}</th>
                       <td>{{ $request->facility->name }}</td>
                       <td>{{ $request->date }}</td>
                       <td>{{ $request->start . '.00' }}</td>
                       <td>{{ $request->end . '.00' }}</td>
                       <td>{{ $request->is_approved == -1 ? 'Waiting approval' : ( $request->is_approved ? 'Approved' : 'Rejected') }}</td>

                   </tr>
                   @endforeach

                </tbody>
              </table>
        </div>
@endsection
