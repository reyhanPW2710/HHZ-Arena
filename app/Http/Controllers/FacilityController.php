<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities=Facility::all();
        return view('facilities.index')->with('facilities',$facilities);
    }

    public function list()
    {
        $facilities=Facility::all();
        return view('facilities.list')->with('facilities',$facilities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $facility =new Facility([
                "name" =>$request->name,
                "description" =>$request->description,
                "price" =>$request->price,
            ]);
           $facility->save();


            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['facility_id']=$facility->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    Image::create($request->all());

                }
            }

            return redirect("/facilities");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $facility = Facility::findOrFail($id);
        return view('facilities.detail')->with('facility',$facility);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $facility=Facility::findOrFail($id);
        return view('facilities.edit')->with('facility',$facility);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     $facility=Facility::findOrFail($id);
        $facility->update([
            "name" =>$request->name,
            "description"=>$request->description,
            "price"=>$request->price,
        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["facility_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("images"),$imageName);
                Image::create($request->all());

            }
        }

        return redirect("/facilities");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $facility=Facility::findOrFail($id);

         $images=Image::where("facility_id",$facility->id)->get();
         foreach($images as $image){
             $image->delete();
         if (File::exists("images/".$image->image)) {
            File::delete("images/".$image->image);
        }
         }
         $facility->delete();
         return back();


    }

    public function deleteimage($id){
        $images=Image::findOrFail($id);
        if (File::exists("images/".$images->image)) {
           File::delete("images/".$images->image);
       }

       Image::find($id)->delete();
       return back();
   }


}
