@extends('layouts.app-master')

@section('content')
        <div class="container">

            <h3 class="text-center text-dark"><b>Requests</b> </h3>

            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Requester</th>
                    <th>Facility</th>
                    <th>Date</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach ($requests as $request)
                 <tr>
                       <th scope="row">{{ $request->id }}</th>
                       <td>{{ $request->user->name }}</td>
                       <td>{{ $request->facility->name }}</td>
                       <td>{{ $request->date }}</td>
                       <td>{{ $request->start . '.00' }}</td>
                       <td>{{ $request->end . '.00' }}</td>
                       @role('admin')
                       <td>
                           <form action="requests/{{ $request->id }}/delete" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>
                       @endrole
                       @role('management')
                       <td>
                           @if($request->is_approved == -1)
                       <form action="requests/{{ $request->id }}/approve" method="post">
                            <button class="btn btn-outline-success" onclick="return confirm('Are you sure?');" type="submit">Approve</button>
                            @csrf
                            @method('patch')
                        </form>
                        <form action="requests/{{ $request->id }}/reject" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Reject</button>
                            @csrf
                            @method('patch')
                        </form>
                        @else
                       {{ $request->is_approved ? 'Approved' : 'Rejected' }}
                        @endif
                        </td>
                       @endrole

                   </tr>
                   @endforeach

                </tbody>
              </table>
        </div>
@endsection
