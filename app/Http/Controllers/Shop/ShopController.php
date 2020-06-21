<?php
namespace App\Http\Controllers\Shop;
use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ShopResource;


class ShopController extends Controller
{

    public function index()
    {
      return  ShopResource::collection(Shop::latest()->get());
    }
    public function show($id)
    {
      return new ShopResource(Shop::findOrFail($id));
    }

    public function store(Request $request)
    {
      $image = $request->image;
      $contents=$request->image->getClientOriginalName();
      $path =$image->storeAs('/shop/',$contents,'public_uploads');
      $shop = new Shop();
      $shop->shopName = $request['shopName'];
      $shop->shopDescription = $request['shopDescription'];
      $shop->contactNumber = $request['contactNumber'];
      $shop->ownerName = $request['ownerName'];
      $shop->image = $contents;
      $shop->ownerName = $request['ownerName'];
      $shop->shopAddress = $request['shopAddress'];
      $shop->longitude = $request['longitude'];
      $shop->latitude = $request['latitude'];
      $shop->save();
      return response()->json($shop);
    }

    public function update(Request $request,$id)
    {
      if($request->has('image'))
      {
      $image = $request->image;
      $contents=$request->image->getClientOriginalName();
      $path =$image->storeAs('/shop/',$contents,'public_uploads');
      $data['shop'] = Shop::find($id);
      $data['shop']->shopName = $request['shopName'];
      $data['shop']->shopDescription = $request['shopDescription'];
      $data['shop']->contactNumber = $request['contactNumber'];
      $data['shop']->ownerName = $request['ownerName'];
      $data['shop']->image = $contents;
      $data['shop']->ownerName = $request['ownerName'];
      $data['shop']->shopAddress = $request['shopAddress'];
      $data['shop']->longitude = $request['longitude'];
      $data['shop']->latitude = $request['latitude'];
      $data['shop']->save();
    }
      else
      {
       $data['shop']= Shop::findOrFail($id);
       $data['shop']->update($request->all());
       $data['shop']->save();
      }
       return response()->json($data);
    }

    public function destroy($id)
    {
       $data['shop']=Shop::findOrFail($id);
      $data['shop']->delete();
      return "Data Deleted Successfully";
    }




}
