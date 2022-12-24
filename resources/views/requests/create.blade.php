@extends('layouts.app-master')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="text-center text-dark"><b>Book a Facility</b> </h3>
                    @if(Session::get('error', false))
                        <?php $data = Session::get('error'); ?>
                        @if (is_array($data))
                            @foreach ($data as $msg)
                                <div class="alert alert-danger" role="alert">
                                    <i class="fa fa-check"></i>
                                    {{ $msg }}
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-danger" role="alert">
                                <i class="fa fa-check"></i>
                                {{ $data }}
                            </div>
                        @endif
                    @endif
                    <form action="create" method="post">
                        @csrf
                        <div class="form-group">
                            <span>Facility</span>
                         <select name="facility_id" class="form-control m-2">
                             @foreach ($facilities as $facility)
                             <option value="{{ $facility->id }}" {{ isset($_GET['id']) ? ($facility->id == $_GET['id'] ? 'selected' : '') : '' }}>{{$facility->name}}</option>
                             @endforeach
                         </select>
                        </div>
                        <div class="form-group">
                            <span>Date</span>
                            <input type="date" name="date" class="form-control m-2" placeholder="date" required>
                        </div>
                         <div class="form-group">
                             <span>Start:</span>
                             <input type="number" name="start" id="start" min="7" max="22" class="m-2" style="text-align: right;">
                             <span>00</span>
                         </div>
                         <div class="form-group">
                             <span>End:</span>
                             <input type="number" name="end" id="end" min="8" max="23" class="m-2" style="text-align: right;">
                             <span>00</span>
                         </div>
                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                </div>
            </div>
            <script>
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
                var yyyy = today.getFullYear();
                if(dd<10){
                dd='0'+dd
                }
                if(mm<10){
                mm='0'+mm
                }

                today = yyyy+'-'+mm+'-'+dd;
                document.getElementsByName("date")[0].setAttribute("min", today);
                document.getElementById("start").addEventListener("change", () => {
                    document.getElementById("end").setAttribute("min", parseInt(document.getElementById("start").value) + 1 )
                });
            </script>
         </body>
</html>
@endsection
