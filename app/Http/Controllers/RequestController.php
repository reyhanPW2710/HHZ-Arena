<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $requests = RequestModel::all();
        return view('requests.index')->with('requests',$requests);
    }

    public function list()
    {
        $requests = RequestModel::where('user_id', auth()->user()->id)->get();
        return view('requests.list')->with('requests',$requests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities = Facility::all();
        return view('requests.create')->with('facilities',$facilities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->get('date');
        $facility_id = $request->get('facility_id');
        $start = $request->get('start');
        $end = $request->get('end');
        $check = RequestModel::where('facility_id', $facility_id)
        ->where('date', $date)
        ->where('start', '<=', $end)
        ->where('end', '>=', $start)
        ->where(function ($query) {
            $query->whereNull('is_approved')
            ->orWhere('is_approved', true)
            ->orWhere('is_approved', 1);
        });
        if($check->count() > 0){
            return redirect("/requests/create")->with('error', 'The facility is not available in the specified time');
        }
        $req = RequestModel::create([
            'user_id' => auth()->user()->id,
            'facility_id' => $facility_id,
            'date' => $date,
            'start' => $start,
            'end' => $end,
            'is_approved' => -1
        ]);
        $req->save();
        return redirect("/requests/list");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request,$id)
    {
     $req=RequestModel::findOrFail($id);
        $req->update([
            "is_approved"=>true,
        ]);
        return redirect("/requests");
    }

    public function reject(Request $request,$id)
    {
     $req=RequestModel::findOrFail($id);
        $req->update([
            "is_approved"=>false,
        ]);
        return redirect("/requests");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $req = RequestModel::findOrFail($id);
        $req->delete();
        return redirect("/requests");
    }
}
