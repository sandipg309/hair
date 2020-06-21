<?php
namespace App\Http\Controllers\Location;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LocationResource;


class LocationController extends Controller
{

    public function index()
    {
      return  LocationResource::collection(Location::latest()->paginate(10));
     
    }
    public function show($id)
    {
      return new LocationResource(Location::findOrFail($id));
    
    }

    public function store(Request $request)
    {
       $data['location']=Location::create($request->all());
      return response()->json($data);
    }

    public function update(Request $request,$id)
    {
        $data['location']=Location::findOrFail($id);
        $data['location']->update($request->all());
       return response()->json($data);
    }

    public function destroy($id)
    {
       $data['location']=Location::findOrFail($id);
      $data['location']->delete();
      return "Data Deleted Successfully";
    }




}
