<?php
namespace App\Http\Controllers\District;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictResource;


class DistrictController extends Controller
{

    public function index()
    {
      return  DistrictResource::collection(District::latest()->paginate(10));
     
    }
    public function show($id)
    {
      return new DistrictResource(District::findOrFail($id));
    
    }

    public function store(Request $request)
    {
       $data['district']=District::create($request->all());
      return response()->json($data);
    }

    public function update(Request $request,$id)
    {
        $data['district']=District::findOrFail($id);
        $data['district']->update($request->all());
       return response()->json($data);
    }

    public function destroy($id)
    {
       $data['district']=District::findOrFail($id);
      $data['district']->delete();
      return "Data Deleted Successfully";
    }

    public function DistLoc()
    {
      $data['district']=District::with('location')->get();
      return $data;

    }




}
